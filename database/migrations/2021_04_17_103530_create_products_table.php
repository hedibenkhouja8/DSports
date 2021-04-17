<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',70);
            $table->string('description');
            $table->double('unit_price',10,3);
            $table->double('msrp',12,3);
            $table->enum('size',['xs','s','m','l','xl','xxl']);
            $table->string('color');
            $table->unsignedInteger('categorie_id');//ou bien
           // $table->integer('categorie_id')->unsigned();
           $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('restrict')->onUpdate('restrict');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
