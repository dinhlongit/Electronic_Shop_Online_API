<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('promotions')->truncate();
        $promotions = [
            ['Khuyen Mai Trong Thang 5','2020/05/01','2020/05/30'],
            ['khuyen mai trong thang 6','2020/06/01','2020/06/05'],
        ];
        foreach ($promotions as $promotion) {
            App\Promotion::create([
                'name'=>$promotion[0],
                'start_date'=>$promotion[1],
                'end_date'=>$promotion[2]
            ]);
        }


        Schema::enableForeignKeyConstraints();
    }
}
