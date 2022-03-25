<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassportLostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passport_losts', function (Blueprint $table) {
            $table->id();
            $table->string('adress')->nullable();
            $table->string('job')->nullable();
            $table->integer('passport_no');
            $table->boolean('status')->default(0);
            $table->string('personal_state')->nullable();
            $table->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passport_losts');
    }
}
