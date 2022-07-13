<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Session;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {
        //Controllo accesso
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        //Leggiamo username
        $user = User::find(Session::get('user_id'));
        $products = Product::orderBy('id', 'asc')->paginate(12);
        return view('home', [
            'title' => 'Mobile E-Commerce',
            'username' => $user->username,
            'products' => $products
        ]);
    }

    public function add($p1, $p2, $p3)
    {
        if(Session::get('user_id'))
        {
            $cart = new Cart;
            $cart -> user_id = Session::get('user_id');
            $cart -> product_id = $p1;
            $cart -> product_name = $p2;
            $cart -> product_price = $p3;
            $cart -> save();
        }
    }
}
