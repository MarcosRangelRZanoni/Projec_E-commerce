@extends('site.layout')

@section('content')

<div style="padding-top: 100px;">
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
</div>

@endsection