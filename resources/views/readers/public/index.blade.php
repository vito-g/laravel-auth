@extends('readers.template.base')

@section ('title', 'index')

@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Birth-date</th>
        {{-- Aggiungo una colonna per le Action --}}
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach( $readers as $key => $reader)
        <tr>
          <th scope="row">{{$reader->id}}</th>
          <td> <a href="{{ route('public-show', compact('reader')) }}"> {{$reader->name}}</a></td>
          <td>{{$reader->lastname}}</td>
          <td>{{$reader->birth_date}}</td>
          {{-- Aggiungo una table date per l'inserimento delle iconcine per le Action --}}
          <td>

            <a href="{{ route('public-show', compact('reader')) }}"><i class="fas fa-eye"></i></a>

            {{-- <a href="{{ route('beers.edit', compact('beer')) }}"><i class="fas fa-pen"></i></a>

            <a href="{{ route('beers.destroy', compact('beer')) }}"><i class="fas fa-eraser"></i></a> --}}


          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
