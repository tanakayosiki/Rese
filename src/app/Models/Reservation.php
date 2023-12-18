<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable=['user_id','shop_id','time_id','person_id','date'];

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function time(){
        return $this->belongsTo('App\Models\Time');
    }

    public function person(){
        return $this->belongsTo('App\Models\Person');
    }

}
