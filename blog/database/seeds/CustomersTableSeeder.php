<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            'email'=>'vincent.retore@gmail.com',
            'last_name'=>'Retore',
            'first_name'=>'Vincent',
            'created_at'=>date("m.d.y"),   
        ]);

    }
}
