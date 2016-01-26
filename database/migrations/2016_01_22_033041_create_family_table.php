<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family', function (Blueprint $table) {
            $table->string('FID');
            $table->string('Agency');
            $table->date('letterdate');
            $table->string('Address');
            $table->integer('PhoneNo');
            $table->date('StartDate');
            $table->primary('FID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('family');
    }
}
