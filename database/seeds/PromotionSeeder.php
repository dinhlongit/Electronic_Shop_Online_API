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
        Schema::disableForeignKeyConstraints();
        DB::table('promotions')->truncate();
        $promotions = [
            ['khuyen mai trong thang 5','2020/05/01','2020/05/08'],
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

        //
    }
}
