<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable=['prefecture_id','genre_id','name','img','detail'];

    public function prefecture(){
        return $this->belongsTo('App\Models\Prefecture');
    }

    public function genre(){
        return $this->belongsTo('App\Models\Genre');
    }

    public function reservations(){
        return $this->hasMany('App\Models\Reservation');
    }
}
