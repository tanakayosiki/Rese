<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\User;
use App\Models\Reservation;

class MailController extends Controller
{
    public function send(){
        $tos=User::whereHas('roles',function($query){
            $query->where('role_id',3);
        })->get();
        foreach($tos as $to){
        Mail::to($to)->send(new SendMail());
    }
        return back()->with('message','送信しました');
    }

    public function qrCode($id){
        $reservation=Reservation::find($id);
        return view('qr_code',compact('reservation'));
    }
}
