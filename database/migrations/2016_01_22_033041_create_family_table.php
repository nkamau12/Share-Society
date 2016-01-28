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
            $table->increments('FID');
            $table->string('Agency');
            $table->date('letterdate');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('postalCode');
            $table->string('province');
            $table->integer('PhoneNo');
            $table->date('StartDate');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
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
