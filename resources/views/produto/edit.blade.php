|@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
    <a class="btn btn-primary" href="{{ route('produto.index') }}"> Voltar</a>
    <p></p>

    @if ($errors->any())
    <p></p>
    <div class="alert alert-danger">
        <strong>Ops!</strong> Houve algum problema com a entrada de dados.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('produto.update', $produto) }}" method="POST" nctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <strong>Categoria: </strong>
                    <input type="input" name="id_Categoria" value="{{ $produto->id_Categoria }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <strong>Nome: </strong>
                    <input type="input" name="nome" value="{{ $produto->nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <strong>Preço: </strong>
                    <input type="input" name="preco" value="{{ $produto->preco }}" class="form-control" placeholder="99999-9999" maxlength="11">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    <input type="input" name="quantidade" value="{{ $produto->quantidade }}" class="form-control" placeholder="CEP">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <input type="input" name="descricao" value="{{ $produto->descricao }}" class="form-control" placeholder="EX: Rua Galindo Neves">
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                    <strong>Fornecedor:</strong>
                    <input type="input" name="id_Fornecedor" value="{{ $produto->id_Fornecedor }}" class="form-control" placeholder="SP">
                </div>
            </div>

            <div class="col-4">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="file" name="imagem" class="form-control-file" placeholder="Imagem">
                </div>
            </div>

            <div class="mt-4 col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
</div>
@endsection