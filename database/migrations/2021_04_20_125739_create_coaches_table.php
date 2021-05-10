<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomcoach');
            $table->string('prenomcoach');
            $table->string('emailcoach');
            $table->string('passcoach');
            $table->integer('agecoach');
            $table->string('description');
            $table->enum('specialite',['Boxing','Dancing','Yoga','Swimming','Cycling','Weight Training']);
            $table->string('role')->default('coach');

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
        Schema::dropIfExists('coaches');
    }
}
