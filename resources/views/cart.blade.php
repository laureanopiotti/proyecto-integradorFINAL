@extends('layouts.app')
@section('assets')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/carrito.css')}}">

@endsection

@section('content')

<div class="container col-10">
    <section class="row">
        <article class="col-12">
            <br>
            <section class="table-responsive">
                <table class="table table-striped">
                    <thead>
                            @if (session()->get('user.cart'))

                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Descripcion </th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-center">Price</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
            
                                                                                                                                                                                    @php
                                                                                                                                                                                    $total = 0;
                                                                                                                                                                                    @endphp
                        @foreach (session()->get('user.cart') as $product)
                            
                                                                                                                                            @php
                                                                                                                                                $total = $total + $product['price']
                                                                                                                                            @endphp

                            <tr>
                                <td><img src="{{asset($product['image'])}}" width="10%"/> </td>
                                <td class="initialism">{{$product['name']}}</td>
                                <td class="">{{$product['description']}}</td>
                                <td >In stock</td>
                                <td><input id="quantity" class="form-control" type="number" value="1" /></td>
                                <p id="errorQuantity"></p>
                                <td class="text-right">$ {{$product['price']}}</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            </tr>


                        @endforeach
                        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sub-Total</td>
                        <td></td>
                        <td class="text-right">$ {{$total}}</td>
                        <td></td>

                    </tr>
                
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td></td>
                    <td class="total"></td>
                        <td></td>

                        </tr>
                    </tbody>
                </table>
            </section>
        </article>
        <section class="col mb-2">
            <article class="row">
                <section class="col-sm-12  col-md-6">
                <button href='{{route('men')}}' class="btn btn-block btn-light">Continue Shopping</button>
                </section>
                <section class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </section>
            </article>
            <br>
        </section>
    </section>
</div>

@else
<h2> USTED NO TIENE NADA EN EL CARRITO </h2>
@endif         

<script src ="{{asset('js/cart.js')}}"></script>


@endsection
