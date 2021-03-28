@extends('readers.template.base')

@section ('title', 'create')

@section('content')
  <form action="{{route('readers.store')}}" method="post">
    {{-- La stringa, appena sotto, fa un input con un token (come si può vedere dall'Inspector) che serve a Laravel per capire se la chiamata arriva dalla form del sito e quindi se il chiamante è autorizzato (salvando, quindi, i dati che gli arrivano) o non autorizzato (come, per es., una chiamata da Postman). --}}
  @csrf

  {{-- scriviamo a mano l'input di tipo hidden in cui andremo a specificare, di volta in volta, il method del Crud che non sia un GET o un POST. In questo caso, se decommentassi la stringa di codice che segue lascerei come value POST. Probabilmente è sempre meglio tenere questa stringa, o la sua alternativa appena più in basso, sempre decommentata, per non avere eventuali problemi con Laravel--}}
  {{-- <input name="_method" type="hidden" value="POST"> --}}

  {{-- oppure usiamo blade --}}
  {{-- @method('POST') --}}
  <div class="form-group">
    <label for="name">Name</label>
    {{-- <input type="text" class="form-control" name="name" placeholder="Name"> --}}
    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" placeholder="Name" value="">
    <div class="invalid-feedback">
      {{$errors->first('name')}}
    </div>
  </div>

  <div class="form-group">
    <label for="lastname">Lastname</label>
    {{-- <input type="text" class="form-control" name="color" placeholder="Color"> --}}
    <input type="text" class="form-control {{$errors->has('lastname') ? 'is-invalid' : ''}}" name="lastname" placeholder="Lastname" value="">
    <div class="invalid-feedback">
      {{$errors->first('lastname')}}
    </div>
  </div>

  <div class="form-group">
    <label for="birth_date">Birth-date</label>
    {{-- <input type="text" class="form-control" name="Description" placeholder="Description"> --}}
    <input type="date" class="form-control {{$errors->has('birth_date') ? 'is-invalid' : ''}}" name="birth_date" placeholder="Birth-date" value="">
    <div class="invalid-feedback">
      {{$errors->first('birth_date')}}
    </div>
  </div>

  <input type="submit" value="Save">
  </form>
@endsection
