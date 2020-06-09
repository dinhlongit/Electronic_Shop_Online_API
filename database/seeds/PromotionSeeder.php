<?php

use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schema::disableForeignKeyConstraints();
        DB::table('promotions')->truncate();
        $promotions = [
            ['Khuyen Mai Trong Thang 6','2020/06/01','2020/06/30'],
            ['khuyen mai trong thang 7','2020/07/01','2020/07/30'],
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
