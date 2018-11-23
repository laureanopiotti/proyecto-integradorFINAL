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
                        <div class="tab-pane active" id="pic-1"><img src="{{$product->imageLoc}}" /></div>
						  <div class="tab-pane" id="pic-2"><img src="{{$product->imageLoc2}}" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{$product->imageLoc}}" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="{{$product->imageLoc2}}" /></a></li>

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
						<h5 class="sizes">sizes: 
                            <span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
                            <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                    
                            {{-- foreach size hacer un span de cda uno (falta tabla pivot) --}}
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