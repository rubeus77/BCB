<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('screen_name');
            $table->date('birth_date');
            $table->bigInteger('address');
            $table->bigInteger('mail_address');
            $table->string('email1');
            $table->string('email2');
            $table->string('tel1');
            $table->string('tel2');
            $table->integer('card_number');
            $table->bigInteger('member_status');
            $table->bigInteger('card_status');
            $table->timestamps();

            // $table->foreign('address')->references('id')->on('addresses');
            // $table->foreign('mail_address')->references('id')->on('addresses');
            // $table->foreign('member_status')->references('id')->on('member_statuses');
            // $table->foreign('card_status')->references('id')->on('card_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
