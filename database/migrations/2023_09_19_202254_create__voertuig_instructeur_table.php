<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoertuigInstructeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voertuig_instructeur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('VoertuigId')->references('id')->on('voertuig');
            $table->foreignId('InstructeurId')->references('id')->on('instructeur');
            $table->date('DatumToekenning');
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
        Schema::dropIfExists('voertuig_instructeur');
    }
}
