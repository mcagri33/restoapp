<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::orderBy('first_name','asc')->get();
        return view('castle.reservation.index',compact('reservations'));
    }

    public function add()
    {
        return view('castle.reservation.add');
    }

    public function edit($id)
    {
        $reservId = Reservation::find($id);
        return view('castle.reservation.edit',compact('reservId'));
    }
}
