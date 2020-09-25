@extends('layouts.main-layout')
@section('content')
  <h1>
    Stanza:
    {{ $stanza -> room_number }}
  </h1>
  <ul>
    <li>Floor: {{ $stanza -> floor}}</li>
    <li>Beds: {{ $stanza -> beds }}</li>
  </ul>

  <h3>
    <a href="{{route('stanze-index')}}">
      INDEX STANZE
    </a>
  </h3>
@endsection
