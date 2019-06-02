<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('status_type');
            $table->date('accession_date'); //data wejścia
            $table->date('leave_date'); //data opuszczenia
            $table->string('declaration_scan_URL'); //skan deklaracji
            $table->string('adding_scan_URL'); //deklaracja przyjęcia
            $table->string('leave_reason_scan_URL'); //skan przyczyn odejścia
            $table->timestamps();

            // $table->foreign('status_type')->references('id')->on('status_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_statuses');
    }
}
