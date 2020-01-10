@extends('layouts.app')

@section('title','Inserir Livro')

@section('content')
<h3 class="text-center">Inserir novo livro</h3>
@if ($errors->any()) <!-- mostra os erros -->
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif
<form action="{{route('books.store')}}" method="post" enctype="multipart/form-data"> <!--enctype para imagens-->
    @csrf
    <div class="form-group">
            <label for="title">Titulo:</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="authorOfBook">Autor(es):</label>
            <input type="text" name="authorOfBook"  class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="float" name="price"  class="form-control">
        </div>
        <div class="form-group">
            <label for="language">Linguagem:</label>
            <input type="text" name="language"  class="form-control">
        </div>
        <div class="form-group">
            <label for="ISBN">ISBN:</label>
            <input type="number" name="isbn"  class="form-control">
        </div>
        <div class="form-group d-flex flex-column">
            <label for="imagem">Fotografia do Livro:</label>
            <input type="file" name="image" class="py-2">
        </div>
        <button type="submit" class="btn btn-primary">Inserir</button>
        </form>

@endsection