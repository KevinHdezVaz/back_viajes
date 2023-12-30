<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('nombre')->nullable(); // Agrega una columna 'nombre' que permite NULL
            $table->string('title')->nullable();  // Agrega una columna 'title' que permite NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('nombre'); // Elimina la columna 'nombre'
            $table->dropColumn('title');  // Elimina la columna 'title'
        });
    }
};
