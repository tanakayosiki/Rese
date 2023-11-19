<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Prefecture;
use App\Models\Genre;
use App\Models\Time;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index(){
        $shop=Shop::with('prefecture','genre')->get();
        return view('shop_detail',compact('shop'));
    }

    public function detail($id){
        $times=Time::all();
        $people=Person::all();
        $shop=Shop::find($id);
        return view('shop_detail',compact('shop','times','people'));
    }

    public function reservation(Request $request){
        $user=Auth::user();
        $item=$request->all();
        $time=$item["time_id"];
        $person=$item["person_id"];
        $shop=$item["shop_id"];
        $date=$item["date"];
        $create=Reservation::create([
            'user_id'=>$user->id,
            'shop_id'=>$shop,
            'time_id'=>$time,
            'person_id'=>$person,
            'date'=>$date
        ]);
        return redirect('/done');
    }

    public function done(){
        return view('done');
    }
}
