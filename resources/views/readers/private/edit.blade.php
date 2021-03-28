@extends('readers.template.base')

@section ('title', 'edit')

@section('content')
  {{-- <form action="{{route('beers.store')}}" method="post"> --}}
  <form action="{{route('readers.update', compact('reader'))}}" method="post">
    {{-- La stringa, appena sotto, fa un input con un token (come si può vedere dall'Inspector) che serve a Laravel per capire se la chiamata arriva dalla form del sito e quindi se il chiamante è autorizzato (salvando, quindi, i dati che gli arrivano) o non autorizzato (come, per es., una chiamata da Postman). --}}
  @csrf

  {{-- scriviamo a mano l'input di tipo hidden --}}
  {{-- <input name="_method" type="hidden" value="POST"> --}}

  {{-- oppure usiamo blade --}}
  {{-- @method('POST') --}}
  @method('PUT')

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" placeholder="Name" value="{{$reader->name}}">
    <div class="invalid-feedback">
      {{$errors->first('name')}}
    </div>
  </div>

  <div class="form-group">
    <label for="lastname">Lastname</label>
    <input type="text" class="form-control {{$errors->has('lastname') ? 'is-invalid' : ''}}" name="lastname" placeholder="Color" value="{{$reader->lastname}}">
    <div class="invalid-feedback">
      {{$errors->first('lastname')}}
    </div>
  </div>

  <div class="form-group">
    <label for="birth_date">Birth-date</label>
    <input type="text" class="form-control {{$errors->has('birth_date') ? 'is-invalid' : ''}}" name="birth_date" placeholder="Birth-date" value="{{$reader->birth_date}}">
    <div class="invalid-feedback">
      {{$errors->first('birth_date')}}
    </div>
  </div>

  <input type="submit" value="Invia">
  </form>
@endsection
