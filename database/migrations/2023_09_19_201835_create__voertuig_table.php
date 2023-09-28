<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoertuigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voertuig', function (Blueprint $table) {
            $table->id();
            $table->string('Kenteken');
            $table->string('Type');
            $table->date('Bouwjaar');
            $table->string('Brandstof');
            $table->foreignId('TypeVoertuigId')->references('id')->on('type_voertuig');
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
        Schema::dropIfExists('voertuig');
    }
}
