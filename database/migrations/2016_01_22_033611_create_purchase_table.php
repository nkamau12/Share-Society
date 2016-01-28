<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->increments('PID');
            $table->double('ClothingTotal');
            $table->double('FurnitureTotal');
            $table->double('OtherTotal');
            $table->date('DateOfPurchase');
            $table->integer('MID');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
            $table->foreign('MID')->references('MID')->on('member')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('purchase');
    }
}
