<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
      <main class="container">
        <h1>Birre</h1>
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
            </tr>
            @endforeach
          </tbody>
        </table>
      </main>
    </body>
</html>
