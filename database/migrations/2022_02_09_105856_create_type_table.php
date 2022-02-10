<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_trips', function (Blueprint $table) {
            $table->id('id');
            //$table->integer('type_id');
            $table->tinyInteger('movement');
            $table->tinyInteger('types');
            $table->tinyInteger('destinations');
            /* $table->foreign('type_id')
                ->references('id')
                ->on('tripsCrud')
                //->onUpdate('cascade')
                ->onDelete('cascade');  */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_trips');
    }
}
