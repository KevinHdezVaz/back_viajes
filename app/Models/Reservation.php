<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 
        'travel_date', 
        'number_of_passengers', 
        'package', 
        'selectedHotel',
        'total',
        'costExtra',
        'nombre',     // Agrega 'nombre'
        'title'       // Agrega 'title'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'costExtra' => 'array', // Esto le dice a Eloquent que maneje el campo como JSON
    ];
}
