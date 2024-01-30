<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 50);
            $table->string('Stazione_partenza', 100);
            $table->string('Stazione_arrivo', 100);
            $table->time('Orario_partenza');
            $table->time('Orario_arrivo');
            $table->smallInteger('Codice_treno')->unsigned();
            $table->tinyInteger('Numero_carrozze')->unsigned();
            $table->boolean('In_orario')->unsigned()->default(1);
            $table->boolean('Cancellato')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
