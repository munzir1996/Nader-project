<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->increments( 'id');
            $table->integer('receipt_number')->nullable();
            $table->integer('report_number')->nullable();
            $table->integer('passport_no');
            $table->string('name');
            $table->date('birthday');
            $table->string('adress');
            $table->string('blood_type');
            $table->integer('ns_no');// الرقم الوطني
            $table->integer('phone');
            $table->string('gender');
            $table->date('date_begin');
            $table->date('date_end');
            $table->string('job');
            $table->string('photo')->nullable();
            $table->string('personal_state');
            $table->softDeletes();
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
        Schema::dropIfExists('passports');
    }
}
