<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('selectedHotel')->nullable()->after('package');
            $table->decimal('total', 8, 2)->nullable()->after('selectedHotel');
             $table->text('costExtra')->nullable(); // o $table->string('costExtra')->nullable(); si sabes que el contenido siempre será corto

        });
    }
    
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn(['selectedHotel', 'total', 'costExtra']);
        });
    }
};
