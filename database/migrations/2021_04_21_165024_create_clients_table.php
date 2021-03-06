<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('emailclient');
            
            $table->integer('age');
            $table->integer('coach_id')->unsigned();
            $table->enum('sport',['Boxing','Dancing','Yoga','Swimming','Cycling','Weight Training']);
            $table->string('datedebutabonnement');
            $table->string('datefinabonnement');
            $table->string('address');
            $table->string('phone');
            $table->string('picture');
            $table->timestamps();
            $table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade')->onUpdate('cascade');
            $table->string('role')->default('client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
