@extends('layouts.app')
@section('assets')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/product.css')}}">
<link rel="stylesheet" href="{{asset('css/reset.css')}}">


@endsection


@section('content')


  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
                        <div class="tab-pane active d-flex justify-content-center" id="pic-1"><img class="asd" src="{{asset($product->imageLoc)}}" /></div>
						  <div class="tab-pane d-flex" id="pic-2"><img class="asd" src="{{asset($product->imageLoc2)}}" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
							
						  <li><a data-target="#pic-1" data-toggle="tab"><img  src="{{asset($product->imageLoc)}}" /></a></li>
						  <li><a class="active" data-target="#pic-2" data-toggle="tab"><img src="{{asset($product->imageLoc2)}}" /></a></li>

						</ul>
						
					</div>
					<div class="details col-md-6">
                    <h3 class="product-title">{{$product->name}}</h3>
                    <h4 class=product-title>{{$product->genre['name']}}</h4>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
							</div>
						</div>
                    <p class="product-description">{{$product->description}}</p>
                    <h4 class="price">PRECIO: <span>${{$product->price}}</span></h4>
						<p class="vote"><strong>Denunciar este producto</strong></p>
						<h5 class="sizes">size: 
						<span class="size" data-toggle="tooltip" title="small">{{$product->size_id}}</span>
						</h5>
						
						<div class="action">
							<a href={{route('cart.add', $product->id)}} class="add-to-cart btn btn-default" type="button">ANADIR AL CARRITO</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
  </body>
</html>
@endsection