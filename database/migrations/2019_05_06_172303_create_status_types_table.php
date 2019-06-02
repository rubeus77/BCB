<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\StatusType;

class CreateStatusTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        //wstępne dane wpisywane do bazy
        StatusType::create([
            'name'=>'Z opłaconą składką'
        ]);
        StatusType::create([
            'name'=> 'Bez opłaconej składki'
        ]);
        StatusType::create([
            'name'=>'Zrezygnował'
        ]);
        StatusType::create([
            'name'=>'Skreślony'
        ]);
        StatusType::create([
            'name'=>'Zawieszony'
        ]);
        StatusType::create([
            'name'=>'Honorowy'
        ]);
        StatusType::create([
            'name'=>'Kandydat na członka'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_types');
    }
}
