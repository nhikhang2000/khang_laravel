<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->increments('trainer_id');
            $table->string('trainer_name', 100);
            $table->tinyInteger('is_leader');
            $table->integer('company_id');
            $table->integer('user_id');
            $table->string('trainer_email', 55);
            $table->string('trainer_phone', 55);
            $table->timestamps();
            $table->foreign('company_id')->references('company_id')->on('companies');
            $table->foreign('user_id')->references('user_id')->on('users');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
