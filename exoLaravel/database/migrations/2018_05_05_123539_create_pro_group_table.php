<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_group', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grproduct_id');
            $table->foreign('grproduct_id')->references('id')->on('prodgroup')
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
        Schema::table('pro_group', function (Blueprint $table) {
            $table->dropForeign('pro_group_grproduct_id_foreign');
            $table->dropForeign('pro_group_prod_id_foreign');
        });
        Schema::dropIfExists('pro_group');
        
    }
}
