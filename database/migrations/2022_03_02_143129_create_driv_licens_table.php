<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrivLicensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driv_licens', function (Blueprint $table) {
            $table->increments( 'id');
            $table->integer('driv_no');
            $table->string('name');
            $table->date('birthday');
            $table->string('adress');
            $table->string('blood_type');
            $table->integer('ns_no');// الرقم الوطني
            $table->integer('phone');
            $table->date('date_begin');
            $table->date('date_end');
            $table->string('job');
            $table->string('gender');
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
        Schema::dropIfExists('driv_licens');
    }
}
