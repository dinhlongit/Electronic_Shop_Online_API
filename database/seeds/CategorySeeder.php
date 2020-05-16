<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();

        $categories = [
            ["id"=>"1","name"=>"Điện thoại","parrent_id"=>null,"photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-09-06 00:56:02"],
            ["id"=>"2","name"=>"Điện gia dụng","parrent_id"=>null,"photo"=>"fas fa-tv","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-09-06 00:51:39"],
            ["id"=>"3","name"=>"Điện lạnh","parrent_id"=>null,"photo"=>"fas fa-blender","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-09-06 00:53:01"],
            ["id"=>"4","name"=>"Kỹ thuật số","parrent_id"=>null,"photo"=>"fa fa-camera-retro","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"5","name"=>"Laptop","parrent_id"=>null,"photo"=>"fa fa-laptop","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"6","name"=>"Thiết bị văn phòng","parrent_id"=>null,"photo"=>"fas fa-book","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-09-06 00:54:17"],
            ["id"=>"7","name"=>"Tai nghe","parrent_id"=>null,"photo"=>"fas fa-headphones","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-09-06 00:46:47"],
            ["id"=>"8","name"=>"Phụ kiện","parrent_id"=>null,"photo"=>"far fa-keyboard","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-09-06 00:49:45"],
            ["id"=>"9","name"=>"Bếp ga","parrent_id"=>"2","photo"=>"fa fa-mobile","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"10","name"=>"Bếp điện","parrent_id"=>"2","photo"=>"fa fa-mobile","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"11","name"=>"Nồi cơm điện","parrent_id"=>"2","photo"=>"fa fa-mobile","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"12","name"=>"Máy lọc nước","parrent_id"=>"2","photo"=>"fa fa-mobile","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"13","name"=>"Quạt điện","parrent_id"=>"2","photo"=>"fa fa-mobile","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"14","name"=>"Samsung","parrent_id"=>"1","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"15","name"=>"Iphone","parrent_id"=>"1","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"16","name"=>"Asus","parrent_id"=>"1","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"17","name"=>"Nokia","parrent_id"=>"1","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-08-26 10:21:45"],
            ["id"=>"18","name"=>"Xiaomi","parrent_id"=>"1","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"19","name"=>"Oppo","parrent_id"=>"1","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"20","name"=>"LG","parrent_id"=>"1","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"21","name"=>"Sony","parrent_id"=>"1","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"22","name"=>"Samsung A","parrent_id"=>"14","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"23","name"=>"Samsung J","parrent_id"=>"14","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"24","name"=>"Samsung S","parrent_id"=>"14","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"25","name"=>"Samsung Note","parrent_id"=>"14","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"26","name"=>"Iphone X","parrent_id"=>"15","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"27","name"=>"Iphone 8","parrent_id"=>"15","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"28","name"=>"Iphone 7","parrent_id"=>"15","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"29","name"=>"Iphone 6","parrent_id"=>"15","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"30","name"=>"Iphone 5","parrent_id"=>"15","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"31","name"=>"Iphone 4","parrent_id"=>"15","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"32","name"=>"Asus 4","parrent_id"=>"16","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"33","name"=>"Asus 3","parrent_id"=>"16","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"34","name"=>"Asus 2","parrent_id"=>"16","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"35","name"=>"Asus 1","parrent_id"=>"16","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"36","name"=>"Nokia Lumia 1020","parrent_id"=>"17","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"37","name"=>"Nokia Lumia 930","parrent_id"=>"17","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"38","name"=>"Nokia Lumia 630","parrent_id"=>"17","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"39","name"=>"Nokia 1080","parrent_id"=>"17","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"40","name"=>"Xiaomi Redmi","parrent_id"=>"18","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"41","name"=>"Xiaomi Redmi Note","parrent_id"=>"18","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"42","name"=>"Xiaomi MI","parrent_id"=>"18","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"43","name"=>"Sony Xperia","parrent_id"=>"21","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"44","name"=>"Quạt Điện Media","parrent_id"=>"13","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"45","name"=>"Quạt Điện Panasonic","parrent_id"=>"13","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"46","name"=>"Quạt Điện Mitsubishi","parrent_id"=>"13","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"47","name"=>"Quạt Điện Asia","parrent_id"=>"13","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"48","name"=>"Quạt Điện Komasu","parrent_id"=>"13","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"49","name"=>"Quạt Điện Sunhouse","parrent_id"=>"13","photo"=>"fas fa-mobile-alt","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"50","name"=>"Quat dien Samsung","parrent_id"=>"13","photo"=>"far fa-trash","created_at"=>"2019-04-29 04:29:16","updated_at"=>"2019-04-29 04:34:20"],
            ["id"=>"51","name"=>"Điều hòa, máy lạnh","parrent_id"=>"3","photo"=>"far fa-trash","created_at"=>"2019-04-30 15:55:14","updated_at"=>"2019-04-30 15:55:14"],
            ["id"=>"52","name"=>"Tủ lạnh","parrent_id"=>"3","photo"=>"far fa-trash","created_at"=>"2019-04-30 15:55:32","updated_at"=>"2019-04-30 15:55:32"],
            ["id"=>"53","name"=>"Máy giặt","parrent_id"=>"3","photo"=>"far fa-trash","created_at"=>"2019-04-30 15:55:50","updated_at"=>"2019-04-30 15:55:50"],
            ["id"=>"54","name"=>"Điều hòa Panasonic","parrent_id"=>"51","photo"=>"far fa-trash","created_at"=>"2019-04-30 15:57:37","updated_at"=>"2019-04-30 15:57:37"],
            ["id"=>"55","name"=>"Điều hòa Samsung","parrent_id"=>"51","photo"=>"far fa-trash","created_at"=>"2019-04-30 15:58:07","updated_at"=>"2019-04-30 15:58:07"],
            ["id"=>"56","name"=>"Tủ lạnh Samsung","parrent_id"=>"52","photo"=>"far fa-trash","created_at"=>"2019-04-30 15:58:27","updated_at"=>"2019-04-30 15:58:27"],
            ["id"=>"57","name"=>"Tủ lạnh Hatachi","parrent_id"=>"52","photo"=>"far fa-trash","created_at"=>"2019-04-30 15:59:14","updated_at"=>"2019-04-30 15:59:14"],
            ["id"=>"58","name"=>"Máy ảnh DSRL","parrent_id"=>"4","photo"=>"far fa-trash","created_at"=>"2019-04-30 16:00:17","updated_at"=>"2019-04-30 16:00:17"],
            ["id"=>"59","name"=>"Máy ảnh thường","parrent_id"=>"4","photo"=>"far fa-trash","created_at"=>"2019-04-30 16:00:28","updated_at"=>"2019-04-30 16:00:28"],
            ["id"=>"60","name"=>"Tivi","parrent_id"=>"4","photo"=>"far fa-trash","created_at"=>"2019-04-30 16:00:34","updated_at"=>"2019-04-30 16:00:34"],
            ["id"=>"61","name"=>"Tivi Samsung","parrent_id"=>"60","photo"=>"far fa-trash","created_at"=>"2019-04-30 16:01:02","updated_at"=>"2019-04-30 16:01:02"],
            ["id"=>"62","name"=>"Tivi Panasonic","parrent_id"=>"60","photo"=>"far fa-trash","created_at"=>"2019-04-30 16:01:30","updated_at"=>"2019-04-30 16:01:30"],
            ["id"=>"63","name"=>"Tủ lạnh BeKo","parrent_id"=>"52","photo"=>"far fa-trash","created_at"=>"2019-06-01 17:29:37","updated_at"=>"2019-06-01 17:29:37"],
            ["id"=>"64","name"=>"Tủ lạnh LG","parrent_id"=>"52","photo"=>"far fa-trash","created_at"=>"2019-06-01 17:29:53","updated_at"=>"2019-06-01 17:29:53"],
            ["id"=>"65","name"=>"Máy giặt BeKo","parrent_id"=>"53","photo"=>"far fa-trash","created_at"=>"2019-06-01 17:32:49","updated_at"=>"2019-06-01 17:32:49"],
            ["id"=>"66","name"=>"Máy giặt SamSung","parrent_id"=>"53","photo"=>"far fa-trash","created_at"=>"2019-06-01 17:34:46","updated_at"=>"2019-06-01 17:34:46"],
            ["id"=>"67","name"=>"Máy giặt Aqua","parrent_id"=>"53","photo"=>"far fa-trash","created_at"=>"2019-06-01 17:35:02","updated_at"=>"2019-06-01 17:35:02"],
            ["id"=>"68","name"=>"Tivi LG","parrent_id"=>"60","photo"=>"far fa-trash","created_at"=>"2019-06-01 17:40:47","updated_at"=>"2019-06-01 17:40:47"]
        ];

        foreach ($categories as $cate) {
            App\Category::create([
                'name' => $cate['name'],
                'photo'=>$cate['photo'],
                'parrent_id'=>$cate['parrent_id']

            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
