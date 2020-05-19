<?php

use Illuminate\Database\Seeder;

class Supplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('suppliers')->truncate();

        $items = [
            ['Nhà cung cấp 1'],
            ['Nhà cung cấp 2'],
            ['Nhà cung cấp 3'],
            ['Nhà cung cấp 4'],
            ['Nhà cung cấp 5'],
        ];

        foreach ($items as $item) {
            App\Supplier::create([
                'name' => $item[0]
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
