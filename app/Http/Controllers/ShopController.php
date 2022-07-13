<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function single(Product $product)
    {
            $title = $product->title;
            return view('products.single', compact('title', 'product'));
    }

}