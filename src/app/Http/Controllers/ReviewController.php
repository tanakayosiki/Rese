<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\Shop;

class ReviewController extends Controller
{
    public function review($id){
        $user=Auth::user();
        $shop=Shop::find($id);
        $reviews=Review::where('shop_id',$shop->id)->get();
        return view('review',compact('shop','reviews'));
    }

    public function evaluation($id){
        $shop=Shop::find($id);
        return view('evaluation',compact('shop'));
    }

    public function postEvaluation(Request $request){
        $user=Auth::user();
        $item=$request->all();
        $shop=$item["shop_id"];
        $star=$item["star"];
        $comment=$item["comment"];
        Review::create([
            'shop_id'=>$shop,
            'user_id'=>$user->id,
            'star'=>$star,
            'comment'=>$comment,
        ]);
        return redirect('/')->with('message','投稿ありがとうございます！');
    }
}
