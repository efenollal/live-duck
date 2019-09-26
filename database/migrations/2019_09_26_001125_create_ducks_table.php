<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ducks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('duck_name');
            $table->integer('hunger')->default('2');
            $table->integer('sadness')->default('1');
            $table->integer('dirtyness')->default('2');
            $table->boolean('is_sleeping')->default('0');
            $table->boolean('is_alive')->default('1');            
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
        Schema::dropIfExists('ducks');
    }
}
