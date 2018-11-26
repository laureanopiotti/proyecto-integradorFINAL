<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserUpdate extends Controller
{
    public function edit($id)
    {
        $genres = ['Hombre','Mujer','Otro'];
        $user = User::find($id);
        return view('auth.change',compact('user','genres'));
    }

    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            "password" => 'nullable|alphaNum',
            "npassword" => 'nullable|alphaNum|min:8',
            "confirm-password" => 'nullable|alphaNum|min:8',
            "genre" => 'required',
            "name" => 'required',
        ]);
            
        $user = User::find($id);


if(\Hash::check($request->input("password"), $user->password)){
    $user->password = \Hash::make($request->input("npassword"));
}



        $user->name = $request->input("name");
        $user->genre = $request->input("genre");


        $path = $request->file('avatar');



        if ($path) {
            $path->storeAs('public/products', 'avatar'.$request->user()->id);
            $user->avatar = 'storage/products/avatar'.$request->user()->id;
        }



        $user->save();


        return view('profile') ;
    }
}
