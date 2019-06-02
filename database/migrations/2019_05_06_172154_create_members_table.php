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
            $table->bigInteger('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('screen_name')->nullable();
            $table->date('birth_date')->nullable();
            $table->bigInteger('address')->nullable();
            $table->bigInteger('mail_address')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->integer('card_number')->nullable();
            $table->bigInteger('member_status')->nullable();
            $table->bigInteger('card_status')->nullable();
            $table->text('remarks')->nullable();
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
