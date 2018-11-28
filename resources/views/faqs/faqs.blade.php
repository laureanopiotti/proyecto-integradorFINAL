@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="{{asset('css/faq.css')}}">
@endsection

@section('content')
<div class="container-fluid mb-3">
    <div class="title-container">
        <h1>Preguntas Frecuentes</h1>
    </div>

    <main id="main" class="main-container">
        <section class="section-container">
            <article class="article-title">
                <h2>Quienes somos?</h2>
            </article>
            <article class="respuesta">
                <p>PIERRE es una marca emprenderora de venta de ropa, que se dedica a diseñar su propia ropa, con estilo unico y elegancia</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>Donde estamos?</h2>
            </article>
            <article class="respuesta">
                <p>Tenemos 2 locales en Buenos Aires, uno situado en Palermo, Arce 399 y en Belgrano, Av. Monre 2575. 
                    En Neuquen, Av. Cantilo 213.      
                    En Mendoza, Crespo 3454.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>Como comprar?</h2>
            </article>
            <article class="respuesta" >
                <p>Actualmente nos manejamos con solo MercadoPago en la pagina. Pero, si se necesita, puede comunicarse y hacerse una transefencia bancaria o pagar en alguno de los 5 locales.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>Talles y medidas</h2>
            </article>
            <article class="respuesta">
                <p>En PIERRE sentimos que la ropa es de cada uno, por eso, cada prenda tiene una sola medida. Nuestro pensamiento nos hace creer que la ropa es caracteristica de la gente, y cada uno debe llevar algo propio, algo unico.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>Desfiles anuales</h2>
            </article>
            <article class="respuesta" >
                <p>Los desfiles suelen hacerse en Noviembre, pero anteriormente mandaremos un comunicado. En estos desfiles organizados por Alan Benitez, se destaca la ropa mas iconica del año, hecha por Laureano Piotti,nuestro principal diseñador. Estos son mostrados a marcas importantes como Dante Rigoli y son fuertemente apoyados por el Gobierno de la Ciudad.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>Hacer Regalos</h2>
            </article>
            <article class="respuesta">
                <p>Actualmente la opcion esta deshabilitada, pero para poder dar y recibir regalos los 2 deben estar registrados y tienen que tener conectada la cuenta de MercadoPago.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>Pregunta7?</h2>
            </article>
            <article class="respuesta">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>Pregunta8?</h2>
            </article>
            <article class="respuesta">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
        </section>
    </main>
</div>
@endsection