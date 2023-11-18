@extends('layouts.main')

@section('title', 'CAFEJ Carros')

@section('Content')

    @foreach($cars as $car)
        <p>{{ $car->model }} -- {{ $car->description }}</p>
    @endforeach

@endsection
