<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name_product'=>'table',
            'qt_product'=>3.203,
            'price'=>3.203,


        ]);
    }
}
