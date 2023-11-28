<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Person;
use App\Models\Time;


class MyPageController extends Controller
{
    public function index(Shop $shop){
        $user=Auth::user();
        $reservations=Reservation::with('shop','time','person')->get();
        $nices=Nice::with('shop.prefecture','shop.genre','shop','user')->get();
        $people=Person::all();
        $times=Time::all();
        return view('my_page',compact('reservations','nices','user','people','times'));
    }

    public function delete($id){
        $nice=Nice::find($id);
        $nice->delete();
        return back();
    }

    public function cancel($id){
        $reservation=Reservation::find($id);
        $reservation->delete();
        return back();
    }

    public function update(Request $request,$id){
        $item=$request->all();
        $reservation=Reservation::find($id);
        $time=$item["time_id"];
        $person=$item["person_id"];
        $date=$item["date"];

        if(isset($_POST['time_id'])){
            if($_POST['time_id']==null){
                $reservation->update([
                    'time_id'=>$reservation->time_id
                ]);
            }else{
            $reservation->update([
                'time_id'=>$time,
            ]);
            }
        }
        if(isset($_POST['person_id'])){
            if($_POST['person_id']==null){
                $reservation->update([
                    'person_id'=>$reservation->person_id
                ]);
            }else{
            $reservation->update([
                'person_id'=>$person,
            ]);
            }
        }
        if(isset($_POST['date'])){
            if($_POST['date']==null){
                $reservation->update([
                    'date'=>$reservation->date
                ]);
                return back();
            }else{
            $reservation->update([
                'date'=>$date,
            ]);
            return back();
            }
        }
    }
}
