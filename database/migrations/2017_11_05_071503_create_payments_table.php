<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->integer('proposal_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->bigInteger('price');
            $table->timestamps();
        });
        // Schema::table('payments', function (Blueprint $table) {
        //     $table->foreign('job_id')->references('id')->on('jobs');
        //     $table->foreign('proposal_id')->references('id')->on('proposals');
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
