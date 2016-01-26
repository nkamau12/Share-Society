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
            $table->String('PID');
            $table->String('Category');
            $table->date('DateOfPurchase');
            $table->double('Total');
            $table->String('MID');
            $table->primary('PID');
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
