<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable=['shop_id','user_id','star','comment'];

    public function shop(){
        return $this->belongsTo('App\Models\Shop');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function getStar(){
        switch($this->star){
            case(1):
                $star='☆';
            break;
            case(2):
                $star='☆☆';
            break;
            case(3):
                $star='☆☆☆';
            break;
            case(4):
                $star='☆☆☆☆';
            break;
            case(5):
                $star='☆☆☆☆☆';
        }
        return $star;
    }

    public function getScore(){
        $score=$this->star;
        return $score;
    }
}
