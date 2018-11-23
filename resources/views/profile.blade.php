@extends('layouts.app')
@section('assets')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Perfil</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
 </head>
 @endsection

 @section('content')

 <body>
 	@include("header")
 	<div class="container">
 		<div class ="user-info">
	 			<h1>Hola {{session()->get('user.credentials.name')}}</h1>
         <img class="avatar" src="{{session()->get('user.credentials.avatar')}}" alt="avatar">
		</div>

		<div class="user-text">

        <h1><a href="{{route("logout")}}">Su carrito</a></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>
	
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere libero aspernatur, dolorum corporis labore ad error consequatur rerum, distinctio sunt quisquam esse vitae. Rem quos expedita magni sint dolore earum!</p>

		</div>
 	</div>
 </body>
 </html>

 @endsection