<?php

use Illuminate\Database\Seeder;

class Import extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imports = array(
            array('id' => '1','user_id' => '2','import_date' => '2019-04-26 18:14:27','supplier_id' => '1','created_at' => '2019-04-25 18:14:27','updated_at' => '2019-04-26 05:15:51'),
            array('id' => '2','user_id' => '2','import_date' => '2019-04-26 18:18:33','supplier_id' => '1','created_at' => '2019-04-25 18:18:33','updated_at' => '2019-04-25 18:33:40'),
            array('id' => '3','user_id' => '2','import_date' => '2019-04-26 01:59:37','supplier_id' => '5','created_at' => '2019-04-26 01:59:37','updated_at' => '2019-04-26 02:37:24'),
            array('id' => '4','user_id' => '2','import_date' => '2019-04-26 04:17:08','supplier_id' => '3','created_at' => '2019-04-26 04:17:08','updated_at' => '2019-04-26 04:17:45'),
            array('id' => '5','user_id' => '2','import_date' => '2019-04-26 04:21:33','supplier_id' => '1','created_at' => '2019-04-26 04:21:33','updated_at' => '2019-04-26 04:22:07'),
            array('id' => '6','user_id' => '2','import_date' => '2019-04-26 04:21:40','supplier_id' => '1','created_at' => '2019-04-26 04:21:40','updated_at' => '2019-04-26 04:23:13'),
            array('id' => '7','user_id' => '2','import_date' => '2019-04-27 07:46:47','supplier_id' => '4','created_at' => '2019-04-26 07:45:45','updated_at' => '2019-05-08 08:29:30'),
            array('id' => '8','user_id' => '2','import_date' => '2019-05-08 00:00:00','supplier_id' => '2','created_at' => '2019-05-01 00:00:00','updated_at' => '2019-05-08 08:24:23'),
            array('id' => '10','user_id' => '2','import_date' => '2019-05-09 09:25:22','supplier_id' => '1','created_at' => '2019-05-08 09:25:22','updated_at' => '2019-05-08 09:25:43'),
            array('id' => '11','user_id' => '2','import_date' => '2019-05-10 09:27:58','supplier_id' => '1','created_at' => '2019-05-08 09:27:58','updated_at' => '2019-05-08 09:28:18'),
            array('id' => '24','user_id' => '5','import_date' => '2019-08-15 02:13:35','supplier_id' => '2','created_at' => '2019-08-14 02:13:35','updated_at' => '2019-08-14 02:21:15'),
            array('id' => '25','user_id' => '4','import_date' => '2019-08-25 11:47:00','supplier_id' => '4','created_at' => '2019-08-25 11:47:00','updated_at' => '2019-08-25 11:47:00'),
            array('id' => '26','user_id' => '4','import_date' => '2001-01-02 12:02:02','supplier_id' => '2','created_at' => '2019-08-25 12:02:02','updated_at' => '2019-08-25 12:02:02'),
            array('id' => '27','user_id' => '4','import_date' => '2001-01-02 12:02:08','supplier_id' => '3','created_at' => '2019-08-25 12:02:08','updated_at' => '2019-08-25 12:02:08'),
            array('id' => '28','user_id' => '4','import_date' => '2019-08-28 09:50:28','supplier_id' => '2','created_at' => '2019-08-28 09:50:28','updated_at' => '2019-08-28 09:50:28'),
            array('id' => '29','user_id' => '4','import_date' => '2019-08-31 10:13:44','supplier_id' => '5','created_at' => '2019-08-31 10:13:44','updated_at' => '2019-08-31 10:13:44'),
            array('id' => '30','user_id' => '4','import_date' => '2019-09-05 18:47:36','supplier_id' => '4','created_at' => '2019-09-05 18:47:36','updated_at' => '2019-09-05 18:47:36'),
            array('id' => '31','user_id' => '4','import_date' => '2019-09-06 15:16:07','supplier_id' => '3','created_at' => '2019-09-06 15:16:07','updated_at' => '2019-09-06 15:16:07'),
            array('id' => '32','user_id' => '4','import_date' => '2019-09-10 10:35:18','supplier_id' => '3','created_at' => '2019-09-10 10:35:18','updated_at' => '2019-09-10 10:35:18')
        );
        Schema::disableForeignKeyConstraints();
        DB::table('imports')->truncate();
        foreach ($imports as $item) {
            App\Import::create([
                'user_id' => $item['user_id'],
                'import_date' => $item['import_date'],
                'supplier_id' => $item['supplier_id']
            ]);
        }

        Schema::enableForeignKeyConstraints();

    }
}
