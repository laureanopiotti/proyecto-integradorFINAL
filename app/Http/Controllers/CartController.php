<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id)
    {
      $product =  \App\Product::find($id);
      $product = [
            "name" => $product->name,
            'description' => $product->description,
            'genre' => $product->genre,
            'price' => $product->price,
            'image' => $product->imageLoc,
      ];

       session()->put("user.cart." . $id, $product);
       

       return view('cart');
    }

    function show(){
        return view('cart');

    }
    public function remove($id)
    {
        session()->pull('user.cart.' . $id);
        return view('cart');
    }

}
