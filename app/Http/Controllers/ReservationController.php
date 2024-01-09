<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReservationController extends Controller
{
    public function store(Request $request)
{
    $userId = auth()->id(); // Suponiendo que estás autenticado y tienes el ID del usuario
    if (!$userId) {
        return response()->json(['error' => 'Usuario no autenticado.'], 401);
    }
    // Aquí debes acceder a los valores directamente desde $request, no usar corchetes.
    $reservation = Reservation::create([
       
        'user_id' => $userId,
        'travel_date' => $request->input('travel_date'),
        'number_of_passengers' => $request->input('number_of_passengers'),
        'package' => $request->input('package'),
        'selectedHotel' => $request->input('selectedHotel'),
        'total' => $request->input('total'),
        'costExtra' => $request->input('costExtra', []), // Usa un valor por defecto de array vacío si no se proporciona.
        'nombre' => $request->input('nombre'),  
        'title' => $request->input('title'),
    ]);

    // Log::info(); // Esta línea está incompleta, debes pasarle algún mensaje o dato a loguear.

    return response()->json($reservation, 200);

    
}


public function obtenerReservaciones()
{
    $reservaciones = Reservation::all();
    return response()->json($reservaciones);
}

    public function getUserReservations()
    {
        $userId = auth()->id();
        $reservations = Reservation::where('user_id', $userId)->get();

        return response()->json($reservations);
    }
}
