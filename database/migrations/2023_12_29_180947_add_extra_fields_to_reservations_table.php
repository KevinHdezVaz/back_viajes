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
        $table->string('selectedHotel')->nullable(); // para campos de texto
        $table->decimal('total', 8, 2)->nullable(); // para montos de dinero
        $table->json('costExtra')->nullable(); // para un campo que almacenará JSON
    });
}

public function down()
{
    Schema::table('reservations', function (Blueprint $table) {
        $table->dropColumn('selectedHotel');
        $table->dropColumn('total');
        $table->dropColumn('costExtra');
    });
}

};
