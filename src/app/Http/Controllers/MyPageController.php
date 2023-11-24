<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;


class MyPageController extends Controller
{
    public function index(Shop $shop){
        $user=Auth::user();
        $reservations=Reservation::with('shop','time','person')->get();
        $nices=Nice::with('shop.prefecture','shop.genre','shop','user')->get();
        return view('my_page',compact('reservations','nices','user'));
    }

    public function delete($id){
        $nice=Nice::find($id);
        $nice->delete();
        return back();
    }

    public function cancel($id){
        $reservation=reservation::find($id);
        $reservation->delete();
        return back();
    }
}
