<?php

use Illuminate\Database\Seeder;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('producers')->truncate();

        $producers=[
            ["id"=>"1","name"=>"Samsung","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"2","name"=>"Sony","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"3","name"=>"Xiaomi","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"4","name"=>"Apple","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"5","name"=>"Midea","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"6","name"=>"Panasonic","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"7","name"=>"Mitsubishi","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"8","name"=>"Asia","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"9","name"=>"Komasu","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"10","name"=>"Sunhouse","created_at"=>"2019-04-29 03:32:54","updated_at"=>"2019-04-29 03:32:54"],
            ["id"=>"11","name"=>"Hatachi","created_at"=>"2019-04-30 16:09:19","updated_at"=>"2019-04-30 16:09:19"],
            ["id"=>"12","name"=>"BeKo","created_at"=>"2019-06-01 17:27:36","updated_at"=>"2019-06-01 17:27:36"],
            ["id"=>"13","name"=>"LG","created_at"=>"2019-06-01 17:30:31","updated_at"=>"2019-06-01 17:30:31"],
            ["id"=>"14","name"=>"AQua","created_at"=>"2019-06-01 17:35:21","updated_at"=>"2019-06-01 17:35:21"]
        ];
        foreach ($producers as $producer){
         App\Producer::create([
               'id' => $producer['id'],
               'name' => $producer['name']
             ]
         );
        }
        Schema::enableForeignKeyConstraints();

        //
    }
}
