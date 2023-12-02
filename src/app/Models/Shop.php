<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function nices(){
        return $this->hasMany('App\Models\Nice');
    }

    public function reviews(){
      return $this->hasMany('App\Models\Review');
    }

    public function is_liked_by_auth_user()
  {
    $id = Auth::id();

    $nicers = array();
    foreach($this->nices as $nice) {
      array_push($nicers, $nice->user_id);
    }

    if (in_array($id, $nicers)) {
      return true;
    } else {
      return false;
    }
  }

  public function scopePrefectureSearch($query,$prefecture_id){
    if(!empty($prefecture_id)){
      $query->where('prefecture_id',$prefecture_id);
    }
  }

  public function scopeGenreSearch($query,$genre_id){
    if(!empty($genre_id)){
      $query->where('genre_id',$genre_id);
    }
  }

  public function scopeKeywordSearch($query,$keyword){
    if(!empty($keyword)){
      $query->where('name','LIKE','%' .$keyword. '%');
    }
  }
}
