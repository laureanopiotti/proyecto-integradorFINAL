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
            "password" => '',
            "npassword" => '',
            "confirm-password" => '',
            "genre" => 'required',
            "name" => 'required',
        ]);

        $user = User::find($id);
if($request->input("npassword") == null || $request->input("npassword") == "" ){
    return true;
}
elseif(length($request->input("npassword")) > 7 && $request->input("npassword") == $request->input("confirm-password")){
    $user->password = Hash::make($request->input("npassword"));
    return true;
}

        $user->name = $request->input("name");
        $user->genre = $request->input("genre");


        $path = $request->file('avatar');



        if (!is_null($path)) {
            $path->storeAs('public/products', 'avatar'.$request->user()->id);
            $user->avatar = 'storage/products/avatar'.$request->user()->id;
        }



        $user->save();


        return view('profile');
    }
}
