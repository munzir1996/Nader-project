<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestPassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_passports', function (Blueprint $table) {
            $table->id();
            $table->string('adress')->nullable();
            $table->string('job')->nullable();
            $table->integer('passport_no');
            $table->boolean('status')->default(0);
            $table->string('personal_state')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_passports');
    }
}
