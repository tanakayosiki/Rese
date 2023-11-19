<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    
    protected $fillable=['people'];

    public function reservations(){
        return $this->hasMany('App\Models\Reservation');
    }

    public function getPerson(){
        $txt=$this->people.'人';
        return $txt;
    }
}
