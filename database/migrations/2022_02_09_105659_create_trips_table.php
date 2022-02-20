<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('second_title');
            $table->text('overview');
            $table->text('description');
            $table->text('second_description');
            $table->bigInteger('price_one');
            $table->bigInteger('price_two');
            $table->text('included');
            $table->text('not_included');
            $table->boolean('discount')->default(0);
            $table->timestamps();
            //$table->date('created_at');
            //$table->date('updated_at');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
