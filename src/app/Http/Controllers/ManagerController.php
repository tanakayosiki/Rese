<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\Genre;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reservation;

class ManagerController extends Controller
{
    public function index(Request $request){
        $id=$request['id'];
        $user=User::find($id);
        $shop=Shop::whereHas('users',function($query)use($id){
            $query->where('user_id',$id);
        })->first();
        return view('manager',compact('user','shop'));
    }

    public function newShop($id){
        $user=User::find($id);
        $prefectures=Prefecture::all();
        $genres=Genre::all();
        return view('new_shop',compact('user','prefectures','genres'));
    }

    public function postNewShop(Request $request,$id){
        $shop=Shop::create([
            'name'=>$request['name'],
            'prefecture_id'=>$request['prefecture_id'],
            'genre_id'=>$request['genre_id'],
            'img'=>$request['img'],
            'detail'=>$request['detail'],
        ]);
        $shop->users()->sync($id);
        return redirect('/')->with('message','登録完了しました');
    }

    public function update($id,Shop $shop){
        $shop=Shop::whereHas('users',function($query)use($id){
            $query->where('user_id',$id);
        })->first();
        return view('update',compact('shop'));
    }

    public function postUpdate($id,Request $request){
        $item=$request->all();
        $shop=Shop::find($id);
        $shop->update([
            'img'=>$item['img'],
            'detail'=>$item['detail'],
        ]);
        return back()->with('message','更新しました');
    }

    public function reservation($id){
        $reservations=Reservation::whereHas('shop',function($query)use($id){
            $query->where('shop_id',$id);
        })->get();
        return view('reservation',compact('reservations'));
    }
}
