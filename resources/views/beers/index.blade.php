@extends('layouts.main')
@section('header')
    <h1 class="mt-5">BIRRE</h1>
@endsection
@section('content')
<table class="table table-dark table-striped table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>NAZIONE DI PRODUZIONE</th>
      <th>GRADAZIONE</th>
      <th>DESCRIZIONE</th>
      <th>CREATO IL</th>
      <th>AGGIORNATO IL</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($beers as $beer)
      <tr>
        <td>{{$beer->id}}</td>
        <td>{{$beer->name}}</td>
        <td>{{$beer->country}}</td>
        <td>{{$beer->alcohol_content}}</td>
        <td>{{$beer->description}}</td>
        <td>{{$beer->created_at}}</td>
        <td>{{$beer->updated_at}}</td>
        <td>
          <a href="{{route('beers.show', ['beer'=> $beer->id])}}" class="btn btn-outline-light">Mostra</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>    
@endsection
@section('footer')
    <div class="text-right">
      <a href="{{route('beers.create')}}" class="btn btn-lg btn-warning">Inserisci un nuova birra</a>
    </div>
@endsection