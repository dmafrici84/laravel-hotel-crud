@extends('layouts.main-layout')
@section('content')
  <h1>
    Stanze:
  </h1>
  <ul>
    @foreach ($stanze as $stanza)
      <a href="{{ route('stanza-show', $stanza -> id) }}">
        <li>{{ $stanza -> room_number }}</li>
      </a>
    @endforeach
  </ul>
  <h3>
    <a href="{{route('stanza-create')}}">
      NEW STANZA
    </a>
  </h3>
@endsection
