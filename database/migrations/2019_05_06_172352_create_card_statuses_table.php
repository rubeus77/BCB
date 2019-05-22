<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name_on_card');
            $table->string('last_name_on_card');
            $table->bigInteger('print_status');
            $table->timestamps();

            $table->foreign('print_status')->references('id')->on('print_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_statuses');
    }
}
