<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomings', function($table){
            $table->increments('id');
            $table->integer('truck_number')->unsigned();
            $table->dateTime('incoming_time');
            $table->timestamps();
        });

        Schema::table('incomings', function ($table) {

            $table->foreign('truck_number')->references('id')->on('trucks');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incomings', function ($table) {

            $table->dropForeign('incomings_truck_number_foreign');

        });

        Schema::drop('incomings');
    }
}
