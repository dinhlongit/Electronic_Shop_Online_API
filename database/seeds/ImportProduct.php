<?php

use Illuminate\Database\Seeder;

class ImportProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $importproducts = array(
            array('id' => '1','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '1','created_at' => '2019-04-25 18:14:34','updated_at' => '2019-04-30 10:30:01'),
            array('id' => '2','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '2','created_at' => '2019-04-25 18:14:35','updated_at' => '2019-08-16 16:55:00'),
            array('id' => '3','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '3','created_at' => '2019-04-25 18:14:36','updated_at' => '2019-08-16 16:55:00'),
            array('id' => '4','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '4','created_at' => '2019-04-25 18:14:37','updated_at' => '2019-08-16 16:55:00'),
            array('id' => '5','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '5','created_at' => '2019-04-25 18:14:38','updated_at' => '2019-05-02 11:39:34'),
            array('id' => '6','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '6','created_at' => '2019-04-25 18:14:39','updated_at' => '2019-04-25 18:45:59'),
            array('id' => '7','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '7','created_at' => '2019-04-25 18:14:39','updated_at' => '2019-06-01 16:41:25'),
            array('id' => '8','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '8','created_at' => '2019-04-25 18:14:42','updated_at' => '2019-06-02 00:41:41'),
            array('id' => '9','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '9','created_at' => '2019-04-25 18:14:42','updated_at' => '2019-04-25 18:46:15'),
            array('id' => '10','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '10','created_at' => '2019-04-25 18:14:48','updated_at' => '2019-04-25 18:46:16'),
            array('id' => '11','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '11','created_at' => '2019-04-25 18:14:48','updated_at' => '2019-04-25 18:46:17'),
            array('id' => '12','amount' => '55','import_price' => '5000000','export_price' => '6000000','import_id' => '1','product_id' => '12','created_at' => '2019-04-25 18:14:49','updated_at' => '2019-04-25 18:46:18'),
            array('id' => '13','amount' => '55','import_price' => '400000','export_price' => '750000','import_id' => '1','product_id' => '13','created_at' => '2019-04-25 18:14:50','updated_at' => '2019-06-01 16:41:25'),
            array('id' => '14','amount' => '55','import_price' => '400000','export_price' => '750000','import_id' => '1','product_id' => '14','created_at' => '2019-04-25 18:14:51','updated_at' => '2019-08-19 15:32:12'),
            array('id' => '15','amount' => '55','import_price' => '400000','export_price' => '750000','import_id' => '1','product_id' => '15','created_at' => '2019-04-25 18:14:51','updated_at' => '2019-08-19 15:32:12'),
            array('id' => '16','amount' => '55','import_price' => '400000','export_price' => '750000','import_id' => '1','product_id' => '16','created_at' => '2019-04-25 18:14:52','updated_at' => '2019-08-19 15:32:12'),
            array('id' => '17','amount' => '55','import_price' => '400000','export_price' => '750000','import_id' => '1','product_id' => '17','created_at' => '2019-04-25 18:14:53','updated_at' => '2019-05-16 07:23:25'),
            array('id' => '18','amount' => '55','import_price' => '400000','export_price' => '750000','import_id' => '1','product_id' => '18','created_at' => '2019-04-25 18:14:55','updated_at' => '2019-06-01 16:42:52'),
            array('id' => '19','amount' => '100','import_price' => '6000000','export_price' => '7000000','import_id' => '2','product_id' => '1','created_at' => '2019-04-25 18:18:48','updated_at' => '2019-04-25 18:48:38'),
            array('id' => '20','amount' => '50','import_price' => '6000000','export_price' => '7000000','import_id' => '2','product_id' => '2','created_at' => '2019-04-25 18:18:49','updated_at' => '2019-04-25 18:48:40'),
            array('id' => '21','amount' => '50','import_price' => '6000000','export_price' => '7000000','import_id' => '2','product_id' => '3','created_at' => '2019-04-25 18:18:49','updated_at' => '2019-04-25 18:48:40'),
            array('id' => '22','amount' => '3','import_price' => '8000000','export_price' => '9000000','import_id' => '3','product_id' => '1','created_at' => '2019-04-26 02:00:01','updated_at' => '2019-04-26 12:03:17'),
            array('id' => '23','amount' => '1','import_price' => '9000000','export_price' => '10000000','import_id' => '3','product_id' => '2','created_at' => '2019-04-26 02:01:19','updated_at' => '2019-04-26 02:01:47'),
            array('id' => '24','amount' => '10','import_price' => '6000000','export_price' => '7000000','import_id' => '4','product_id' => '1','created_at' => '2019-04-26 04:17:15','updated_at' => '2019-04-26 04:46:35'),
            array('id' => '25','amount' => '5','import_price' => '5500000','export_price' => '7500000','import_id' => '5','product_id' => '1','created_at' => '2019-04-26 04:21:51','updated_at' => '2019-04-26 04:46:35'),
            array('id' => '26','amount' => '5','import_price' => '7500000','export_price' => '8500000','import_id' => '6','product_id' => '1','created_at' => '2019-04-26 04:23:02','updated_at' => '2019-08-14 02:23:47'),
            array('id' => '27','amount' => '20','import_price' => '5000000','export_price' => '5500000','import_id' => '8','product_id' => '2','created_at' => '2019-05-08 08:12:59','updated_at' => '2019-05-08 08:13:25'),
            array('id' => '28','amount' => '10','import_price' => '7000000','export_price' => '8000000','import_id' => '8','product_id' => '3','created_at' => '2019-05-08 08:13:58','updated_at' => '2019-05-08 08:14:10'),
            array('id' => '29','amount' => '5','import_price' => '5000000','export_price' => '6000000','import_id' => '8','product_id' => '1','created_at' => '2019-05-08 08:24:08','updated_at' => '2019-05-08 09:22:15'),
            array('id' => '30','amount' => '5','import_price' => '7000000','export_price' => '7500000','import_id' => '7','product_id' => '1','created_at' => '2019-05-08 08:29:20','updated_at' => '2019-05-08 09:27:19'),
            array('id' => '31','amount' => '5','import_price' => '9000000','export_price' => '9500000','import_id' => '10','product_id' => '1','created_at' => '2019-05-08 09:25:29','updated_at' => '2019-05-08 09:29:51'),
            array('id' => '32','amount' => '5','import_price' => '5500000','export_price' => '6500000','import_id' => '11','product_id' => '1','created_at' => '2019-05-08 09:28:07','updated_at' => '2019-06-01 16:33:31'),
            array('id' => '33','amount' => '10','import_price' => '111111','export_price' => '33333333','import_id' => '24','product_id' => '1','created_at' => '2019-08-14 02:21:10','updated_at' => '2019-08-16 16:55:00'),
            array('id' => '34','amount' => '20','import_price' => '1500000','export_price' => '2000000','import_id' => '24','product_id' => '2','created_at' => '2019-08-14 09:36:51','updated_at' => '2019-08-14 09:44:25'),
            array('id' => '35','amount' => '30','import_price' => '4444444','export_price' => '555555555','import_id' => '24','product_id' => '28','created_at' => '2019-08-14 09:37:03','updated_at' => '2019-08-14 09:44:42'),
            array('id' => '36','amount' => '4','import_price' => '4000000','export_price' => '5000000','import_id' => '24','product_id' => '27','created_at' => '2019-08-14 09:52:09','updated_at' => '2019-08-23 10:59:49'),
            array('id' => '37','amount' => '10','import_price' => '45000000','export_price' => '6000000','import_id' => '27','product_id' => '1','created_at' => '2019-08-25 12:02:12','updated_at' => '2019-08-25 12:02:54'),
            array('id' => '38','amount' => '5','import_price' => '15000000','export_price' => '25000000','import_id' => '28','product_id' => '21','created_at' => '2019-08-28 09:50:50','updated_at' => '2019-08-28 09:51:23'),
            array('id' => '39','amount' => '50','import_price' => '3500000','export_price' => '5000000','import_id' => '29','product_id' => '22','created_at' => '2019-08-31 10:13:57','updated_at' => '2019-08-31 10:16:26'),
            array('id' => '40','amount' => '50','import_price' => '4500000','export_price' => '6000000','import_id' => '29','product_id' => '28','created_at' => '2019-08-31 10:13:58','updated_at' => '2019-08-31 10:22:13'),
            array('id' => '41','amount' => '50','import_price' => '4600000','export_price' => '5800000','import_id' => '29','product_id' => '29','created_at' => '2019-08-31 10:14:00','updated_at' => '2019-08-31 10:30:26'),
            array('id' => '42','amount' => '50','import_price' => '5000000','export_price' => '7000000','import_id' => '29','product_id' => '30','created_at' => '2019-08-31 10:14:01','updated_at' => '2019-08-31 10:30:27'),
            array('id' => '43','amount' => '50','import_price' => '3900000','export_price' => '4900000','import_id' => '29','product_id' => '31','created_at' => '2019-08-31 10:14:02','updated_at' => '2019-08-31 10:30:27'),
            array('id' => '44','amount' => '50','import_price' => '9000000','export_price' => '60000000','import_id' => '29','product_id' => '21','created_at' => '2019-08-31 10:14:11','updated_at' => '2019-08-31 10:34:01'),
            array('id' => '45','amount' => '40','import_price' => '5500000','export_price' => '7000000','import_id' => '29','product_id' => '24','created_at' => '2019-08-31 10:14:12','updated_at' => '2019-08-31 10:40:50'),
            array('id' => '46','amount' => '50','import_price' => '6000000','export_price' => '10000000','import_id' => '30','product_id' => '1','created_at' => '2019-09-05 18:47:44','updated_at' => '2019-09-05 19:22:27'),
            array('id' => '47','amount' => '20','import_price' => '5500000','export_price' => '7500000','import_id' => '31','product_id' => '26','created_at' => '2019-09-06 15:16:51','updated_at' => '2019-09-06 15:17:51'),
            array('id' => '48','amount' => '20','import_price' => '6500000','export_price' => '8500000','import_id' => '31','product_id' => '25','created_at' => '2019-09-06 15:16:53','updated_at' => '2019-09-06 15:17:53'),
            array('id' => '49','amount' => '20','import_price' => '7500000','export_price' => '9500000','import_id' => '31','product_id' => '27','created_at' => '2019-09-06 15:16:56','updated_at' => '2019-09-06 15:17:54'),
            array('id' => '50','amount' => '50','import_price' => '100000','export_price' => '180000','import_id' => '32','product_id' => '32','created_at' => '2019-09-10 10:35:53','updated_at' => '2019-09-10 10:36:19')

        );
        Schema::disableForeignKeyConstraints();
        DB::table('import_products')->truncate();
        foreach ($importproducts as $item) {
            App\ImportProduct::create([
                'amount' => $item['amount'],
                'import_price' => $item['import_price'],
                'export_price' => $item['export_price'],
                'import_id' => $item['import_id'],
                'product_id' => $item['product_id']
            ]);
        }

        Schema::enableForeignKeyConstraints();

    }
}
