<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AddressSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProducerSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(PromotionProductSeeder::class);
        $this->call(ProductStatus::class);
        $this->call(Product::class);
        $this->call(UserSeeder::class);
        $this->call(Supplier::class);
        $this->call(ImportProduct::class);
        $this->call(Import::class);
        $this->call(RoleUserSeeder::class);
        $this->call(Role::class);
        $this->call(ReviewSeeder::class);
        $this->call(TransactionProductSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(TransactionStatusSeeder::class);
        $this->call(PhotoArraySeeder::class);
    }
}
