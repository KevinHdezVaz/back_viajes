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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('travel_date');
            $table->integer('number_of_passengers');
            $table->string('package');
            $table->timestamps();
            $table->string('selectedHotel')->nullable(); // para campos de texto
            $table->decimal('total', 8, 2)->nullable(); // para montos de dinero
            $table->json('costExtra')->nullable(); // para un campo que almacenará JSON
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
