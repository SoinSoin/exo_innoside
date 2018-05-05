<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustProdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cust_prod', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('custom_id');
            $table->foreign('custom_id')->references('id')->on('customers')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->integer('prod_id');
            $table->foreign('prod_id')->references('id')->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cust_prod', function (Blueprint $table) {
            $table->dropForeign('cust_prod_custom_id_foreign');
            $table->dropForeign('cust_prod_prod_id_foreign');
        });

        Schema::dropIfExists('cust_prod');
    }
}
