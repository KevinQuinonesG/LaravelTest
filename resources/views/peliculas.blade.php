@extends('plantilla')
@section('principal')
    <ul>
      @forelse ($peliculas as $pelicula)
      <li>{{ $pelicula }}</li>
      @empty
      <li>
       There is no movies
      </li>
      @endforelse
    </ul>
@endsection
