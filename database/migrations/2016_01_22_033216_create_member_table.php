<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->String('MID');
            $table->String('Fname');
            $table->String('Lname');
            $table->boolean('Clothing');
            $table->boolean('Furniture');
            $table->boolean('Other');
            $table->String('FID');
            $table->primary('MID');
            $table->foreign('FID')->references('FID')->on('family')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('member');
    }
}
