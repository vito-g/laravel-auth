@extends('readers.template.base')

@section ('title', 'show')

@section('content')

  <div class="card" style= "width: 15rem">


    <div class="card-body">
      <h6 class="card-title">Name: {{$reader->name}}</h6>
      <h6 class="card-title">Lastname:{{$reader->lastname}}</h6>
      <h6 class="card-text">Birth-Date: {{$reader->birth_date}}</h6>
      {{-- <a href="/beers" class="btn btn-primary">All Beers</a> --}}

      {{-- O in alternativa: --}}
      <a href="{{ route('public-index') }}" class="btn btn-primary">Index</a>
    </div>

  </div>

@endsection
