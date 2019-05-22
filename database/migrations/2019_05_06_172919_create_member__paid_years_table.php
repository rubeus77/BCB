<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberPaidYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_paidyears', function (Blueprint $table) {
            $table->bigInteger('member_id');
            $table->bigInteger('paidyear_id');
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members');;
            $table->foreign('paidyear_id')->references('id')->on('paid_years');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member__paid_years');
    }
}
