<?php

use Illuminate\Database\Seeder;

class PhotoArraySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('photo_arrays')->truncate();

        $images = [
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',1],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',1],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',2],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',2],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',3],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',3],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',4],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',4],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',5],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',5],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',6],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',6],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',7],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',7],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',8],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',8],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',9],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',9],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',10],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',10],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',11],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',11],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',12],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',12],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',13],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',13],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',14],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',14],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',15],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',15],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',16],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',16],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',17],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',17],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',18],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',18],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',19],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',19],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',20],
            ['PNczIxmRbe2DvvzHaJBuki3TRlnihRtJy0S25yHr.jpeg',20],

        ];

        foreach ($images as $image) {
            App\PhotoArray::create([
                'photo'=>$image[0],
                'product_id'=>$image[1],
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
