<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Shop;
use App\Models\Role;
use DB;

class AdminController extends Controller
{
    public function index(){
        $roles=User::all();
        return view('admin',compact('roles'));
    }

    public function attach($id){
        $user=User::find($id);
        $user->roles()->sync(2);
        return back();
    }

    public function detach($id){
        $user=User::find($id);
        $user->roles()->sync(3);
        return back();
    }

    public function select(){
        $roles=User::whereHas('roles',function($query){
            $query->where('role_id',2);
        })->get();
        $shops=shop::all();
        return view('shop_select',compact('roles','shops'));
    }

    public function postSelect(Request $request,$id){
        $user=User::find($id);
        $shop=$request['shop_id'];
        $user->shops()->sync($shop);
        return back()->with('message','登録しました');
    }
}
