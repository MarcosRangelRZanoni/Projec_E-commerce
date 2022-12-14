@extends('site.layout')

@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/Carrosel_IMG1.jpg') }}" alt="Carrosel">

            <div class="container">
                <div class="carousel-caption text-left">
                    <!-- <h1>Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Carrosel_IMG2.png') }}" alt="Carrosel">

            <div class="container">
                <div class="carousel-caption">
                    <!-- <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Carrosel_IMG3.jpg') }}" alt="Carrosel">


            <div class="container">
                <div class="carousel-caption text-right">
                    <!-- <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row m-auto">
                @foreach($produtos as $produto)
                <div class="col ms-5">
                    <div class="card shadow-cards" style="width: 18rem;">
                        <img src="{{ asset($produto->imagem) }}" class="card-img-top" alt="{{ $produto->nome }}">
                        <div class="card-body cards-all">
                            <h5 class="card-title">{{ $produto->nome }}</h5>
                            <p class="card-text">{{ $produto->descricao }}</p>
                            <p class="card-text">{{ $produto->preco }}</p>
                            <a href="#" class="btn btn-primary text-color" style="color: #180D2B; font-weight: bold;">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection