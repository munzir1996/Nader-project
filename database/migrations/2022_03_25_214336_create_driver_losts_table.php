<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverLostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_losts', function (Blueprint $table) {
            $table->id();
            $table->string('adress')->nullable();
            $table->string('job')->nullable();
            $table->integer('driv_no');
            $table->boolean('status')->default(0);
            $table->string('personal_state')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_losts');
    }
}
