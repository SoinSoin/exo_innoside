<?php

use Illuminate\Database\Seeder;
use App\Prodgroup;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $this->call(CustomersTableSeeder::class);
            $this->call(ProdgroupTableSeeder::class);
            $this->call(ProductTableSeeder::class);
        }
    }
}
