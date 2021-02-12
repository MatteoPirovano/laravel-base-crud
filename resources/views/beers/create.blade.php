@extends('layouts.main')

@section('header')
  <h1 class="mt-5">NUOVA INFO BIRRA</h1>
@endsection

@section('content')
    <form action="{{route('beers.store')}}" method="POST">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
      </div>

      <div class="form-group">
        <label for="country">Nazione</label>
        <input type="text" class="form-control" name="country" id="country" placeholder="Nazione">
      </div>

      <div class="form-group">
        <label for="alcohol_content">Gradazione alcolica</label>
        <input type="text" class="form-control" name="alcohol_content" id="alcohol_content" placeholder="Gradazione alcolica">
      </div>
      
      <div class="form-group">
        <label for="description"></label>
        <textarea class="form-control" name="description" id="description" rows="6"></textarea>
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-primary">Salva e aggiungi</button>
        <a href="{{route('beers.index')}}" class="btn btn-warning">Indietro</a>
      </div>
    </form>
@endsection