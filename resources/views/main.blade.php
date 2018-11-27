@extends('layouts.app')

@section('assets')
 <style>
    .carousel-inner {
        text-shadow: 1px 1px #000;
    }
 </style>
@endsection

@section('content')  
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <section class="carousel-inner">
        <article class="carousel-item active">
        <img class="d-block w-100" src="{{asset('images/carousel/fashion-1.jpg')}}" alt="First slide">
        <article class="carousel-caption d-none d-md-block">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <h5>Lorem, ipsum dolor.</h5>
        </article>
        </article>
        <article class="carousel-item">
        <img class="d-block w-100 height: 200px" src="{{asset('images/carousel/fashion-2.jpg')}}" alt="Second slide">
        <article class="carousel-caption d-none d-md-block">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <h5>Lorem, ipsum dolor.</h5>
        </article>
        </article>
        <article class="carousel-item">
        <img class="d-block w-100 height: 200px" src="{{asset('images/carousel/fashion-3.jpg')}}" alt="Third slide">
        <article class="carousel-caption d-none d-md-block">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <h5>Lorem, ipsum dolor.</h5>
        </article>
        </article>
    </section>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class='container-fluid p-5 bg-light'> 
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <article class="row">
            <section class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/main/image-1.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Titulo 1</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum neque culpa magni excepturi, hic distinctio aperiam at adipisci quisquam quod.</p>
                <p><a class="btn btn-dark" href="#" role="button">Ver más&raquo;</a></p>
            </section><!-- /.col-lg-4 -->
            <section class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/main/image-2.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Titulo 2</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum neque culpa magni excepturi, hic distinctio aperiam at adipisci quisquam quod.</p>
                <p><a class="btn btn-dark" href="#" role="button">Ver más&raquo;</a></p>
            </section><!-- /.col-lg-4 -->
            <section class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/main/image-3.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Titulo 3</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum neque culpa magni excepturi, hic distinctio aperiam at adipisci quisquam quod.</p>
                <p><a class="btn btn-dark" href="#" role="button">Ver más&raquo;</a></p>
            </section><!-- /.col-lg-4 -->
        </article><!-- /.row -->
    </div>
</div>
@endsection
