<?php

use Illuminate\Database\Seeder;

class PromotionProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('promotion_products')->truncate();

        $promotions = [
            [0.2,1,1],
            [0.2,1,2],
            [0.2,1,3],

        ];

        foreach ($promotions as $promotion) {
            App\PromotionProduct::create([
                'title'=>$promotion[0],
                'promotion_id'=>$promotion[1],
                'product_id'=>$promotion[2],

            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
