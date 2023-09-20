@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h5>{{ $name }}</h5>
    <h6>{{ $email }}</h6>
    <p><img src="img/{{ $image }}.png" alt="{{ @name }}"></p>
@endsection
