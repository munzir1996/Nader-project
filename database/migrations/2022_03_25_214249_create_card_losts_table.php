<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardLostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_losts', function (Blueprint $table) {
            $table->id();
            $table->integer('card_no');
            $table->string('adress')->nullable();
            $table->string('job')->nullable();
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
        Schema::dropIfExists('card_losts');
    }
}
