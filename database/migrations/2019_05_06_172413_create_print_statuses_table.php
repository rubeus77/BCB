<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\PrintStatus;

class CreatePrintStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        //wstępne dane do bazy danych PrintStatus
        PrintStatus::create([
            'name'=>'Wydrukowana'
        ]);
        PrintStatus::create([
            'name'=>'Wydana'
        ]);
        PrintStatus::create([
            'name'=>'Do druku'
        ]);
        PrintStatus::create([
            'name'=>'Nie drukować'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('print_statuses');
    }
}
