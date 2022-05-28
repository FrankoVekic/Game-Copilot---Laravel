<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_details')->unsigned();
            $table->integer('equipment')->unsigned();
            $table->integer('game')->unsigned();
            $table->integer('quantity');
            $table->foreign('order_details')
            ->references('id')
            ->on('order_details');
            $table->foreign('equipment')
            ->references('id')
            ->on('equipment');
            $table->foreign('game')
            ->references('id')
            ->on('game');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_data');
    }
};
