<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Time extends Model
{
    use HasFactory;

    protected $fillable=['time'];

    public function reservations(){
        return $this->hasMany('App\Models\Reservation');
    }

    public function getTime(){
        $date=$this->time;
        $time=new Carbon($date);
        $hour=$time->hour;
        $minute=$time->minute;
        $hm=sprintf("%02d:%02d",$hour,$minute);
        return $hm;
    }
}
