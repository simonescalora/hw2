<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class CartController extends BaseController
{
    public function cart()
    {
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }

        $userid = User::find(Session::get('user_id'))->id;
        
        $array = DB::select("SELECT product_id, product_name, product_price FROM carts WHERE user_id = ?", [$userid]);


        return view('checkout')->with('array', $array);
        
    }

    public function delete($prod)
    {
        $userid = User::find(Session::get('user_id'))->id;

        DB::table('carts')
            ->where('user_id',$userid)
            ->where('product_id', $prod)
            ->delete();
    }

    public function report()
    {
        $userid = User::find(Session::get('user_id'))->id;

        DB::table('carts')
            ->where('user_id',$userid)
            ->delete();
    }
}