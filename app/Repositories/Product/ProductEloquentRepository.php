<?php


namespace App\Repositories\Product;


use App\Category;
use App\Product;
use App\Repositories\EloquentRepository;
use App\User;
use DB;

class ProductEloquentRepository extends EloquentRepository implements ProductRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
       return \App\Product::class;
    }

    public function getProducts()
    {
//        $query = "select products.id, products.name, products.photo, products.description, SUM(import_products.amount) AS amount, categories.name as category, producers.name as producer from products left join categories on products.category_id = categories.id left join producers on producers.id = products.producer_id left join import_products on import_products.product_id = products.id group by products.id limit 15 offset 0";
//        return DB::select($query);
        $nows = date(now()->toDateString());
        return DB::table('products as p')
                  ->leftJoin('categories','p.category_id','=','categories.id')
                  ->leftJoin('producers','producers.id','=','p.producer_id')
                  ->leftJoin('import_products','import_products.product_id','=','p.id')
                  ->leftJoin('promotion_products','p.id','=','promotion_products.product_id')
                  ->leftJoin('promotions','promotion_products.promotion_id','=','promotions.id')
                  ->select('p.id','p.name','p.photo','p.description',
                  DB::raw('SUM(import_products.amount) AS amount'),
                  'categories.name as category',
                  DB::raw('MAX(import_products.export_price) AS price'),
                  DB::raw('MAX(promotion_products.title) AS discount'),
                  DB::raw("IF ( MAX(promotion_products.title) > 0,'yes','no' ) as sale"),
                  DB::raw("IF ( p.status_id = 3 ,'yes','no' ) as new"),
                  'producers.name as producer')
                  ->where('promotion_products.title',null)
                  ->Orwhere('promotions.start_date','<=',$nows)
                  ->where('promotions.end_date','>=',$nows)
                  ->groupBy('p.id');

    }

    public function getReviewProduct($id){
        $product = Product::find($id);
        $arr =$product->reviews->toArray();
        $arr1 = [];
        foreach ($arr as $item){
            $name = User::find($item['user_id'])->name;
            array_push($item,$name);
            array_push($arr1,$item);
        }
        return $arr1;
    }

    public function getProductByCategory($id)
    {
        $nows = date(now()->toDateString());
        $level1 = Category::where('parrent_id',null)->get()->pluck('id')->toArray();

        if (in_array($id, $level1)){
            $need_get = Category::where('parrent_id',$id)->get()->pluck('id')->toArray();
            return DB::table('products as p')
                ->leftJoin('categories','p.category_id','=','categories.id')
                ->leftJoin('producers','producers.id','=','p.producer_id')
                ->leftJoin('import_products','import_products.product_id','=','p.id')
                ->select('p.id','p.name','p.photo','p.description',
                    DB::raw('SUM(import_products.amount) AS amount') ,'categories.name as category',
                    DB::raw('MAX(import_products.export_price) AS price'))
                ->whereIn('categories.id',$need_get)
                ->orWhereIn('categories.parrent_id',$need_get)
                ->groupBy('p.id');
        }else{
            return DB::table('products as p')
                ->leftJoin('categories','p.category_id','=','categories.id')
                ->leftJoin('producers','producers.id','=','p.producer_id')
                ->leftJoin('import_products','import_products.product_id','=','p.id')
                ->select('p.id','p.name','p.photo','p.description',
                    DB::raw('SUM(import_products.amount) AS amount') ,'categories.name as category',
                    DB::raw('MAX(import_products.export_price) AS price'))
                ->where('categories.id',$id)
                ->orWhere('categories.parrent_id',$id)
                ->groupBy('p.id');
        }
//        return Category::with('categories.products')
//            ->where('categories.id',$id)
//            ->orWhere('categories.parrent_id',$id)
//            ->get();

     //    $singleCategory = Category::find($id);
       //  return $singleCategory->products;

    }


    public function getProductByProducer($id){
        return DB::table('products as p')
            ->leftJoin('categories','p.category_id','=','categories.id')
            ->leftJoin('producers','producers.id','=','p.producer_id')
            ->leftJoin('import_products','import_products.product_id','=','p.id')
            ->select('p.id','p.name','p.photo','p.description',
                DB::raw('SUM(import_products.amount) AS amount') ,'categories.name as category',
                DB::raw('MAX(import_products.export_price) AS price'))
            ->where('producers.id',$id)
            ->groupBy('p.id');
    }





    public function showProductById($id){
        $nows = date(now()->toDateString());
        $product = Product::find($id);
        $detail_promotion = $product->promotions()->get()->pluck('name','id')->toArray();
        $discount = $product->promotions()->get()->pluck('pivot.title','pivot.product_id')->toArray();
        $promotion = [$detail_promotion,
        $discount
        ];
        $review = [DB::table('products as p')
            ->join('reviews','p.id','=','reviews.product_id')
            ->join('users','reviews.user_id','=','users.id')
            ->select('users.name','reviews.content','reviews.rating')
            ->where('p.id',$id)
            ->get()];

        $product = DB::table('products')
              ->leftJoin('categories','products.category_id','=','categories.id')
              ->leftJoin('producers','producers.id','=','products.producer_id')
              ->leftJoin('import_products','import_products.product_id','=','products.id')
              ->select('products.id','products.name','products.photo','products.description','products.information',
                DB::raw('SUM(import_products.amount) AS amount') ,'categories.name as category',
                DB::raw('MAX(import_products.export_price) AS price'),'producers.name as producer')
              ->where('products.id',$id)
              ->groupBy('products.id')
              ->get();
         return  $product->concat($promotion)->concat($review);
    }


    public function getSaleProduct(){
        $nows = date(now()->toDateString());
        return DB::table('products as p')
            ->leftJoin('categories','p.category_id','=','categories.id')
            ->leftJoin('producers','producers.id','=','p.producer_id')
            ->leftJoin('import_products','import_products.product_id','=','p.id')
            ->leftJoin('promotion_products','p.id','=','promotion_products.product_id')
            ->leftJoin('promotions','promotion_products.promotion_id','=','promotions.id')
            ->select('p.id','p.name','p.photo','p.description',
                DB::raw('SUM(import_products.amount) AS amount') ,'categories.name as category',
                DB::raw('MAX(import_products.export_price) AS price'),
                DB::raw('MAX(promotion_products.title) AS discount'),
                'producers.name as producer')
            ->Orwhere('promotions.start_date','<=',$nows)
            ->where('promotions.end_date','>=',$nows)
            ->groupBy('p.id');
    }


    public function getNewProduct()
    {
        $nows = date(now()->toDateString());
        return DB::table('products as p')
            ->where('p.status_id',3)
            ->leftJoin('categories','p.category_id','=','categories.id')
            ->leftJoin('producers','producers.id','=','p.producer_id')
            ->leftJoin('import_products','import_products.product_id','=','p.id')
            ->select('p.id','p.name','p.photo','p.description',
                DB::raw('SUM(import_products.amount) AS amount') ,'categories.name as category',
                DB::raw('MAX(import_products.export_price) AS price'),
                'producers.name as producer')
            ->groupBy('p.id');
    }


    public function filterProductByPrice($start,$end)
    {
        $nows = date(now()->toDateString());
        return DB::table('products as p')
            ->leftJoin('categories','p.category_id','=','categories.id')
            ->leftJoin('producers','producers.id','=','p.producer_id')
            ->leftJoin('import_products','import_products.product_id','=','p.id')
            ->leftJoin('promotion_products','p.id','=','promotion_products.product_id')
            ->leftJoin('promotions','promotion_products.promotion_id','=','promotions.id')
            ->select('p.id','p.name','p.photo','p.description',
                DB::raw('SUM(import_products.amount) AS amount') ,'categories.name as category',
                DB::raw('MAX(import_products.export_price) AS price'),
                DB::raw('MAX(promotion_products.title) AS discount'),
                'producers.name as producer')
            ->where('promotion_products.title',null)
            ->Orwhere('promotions.start_date','<=',$nows)
            ->where('promotions.end_date','>=',$nows)
            ->groupBy('p.id')
            ->having('price','>=',$start)
            ->having('price','<=',$end);
    }

    public function getBestSellProduct()
    {
        // TODO: Implement getBestSellProduct() method.
    }




    public function getPhotosOfProduct($id)
    {
       $product = Product::find($id);
       return $product->photos()->pluck('photo');
    }


}
