@extends('layouts.main')

@section('title', 'Dashboard')

@section('Content')
        
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Carros</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-cars-container">

        @if(count($cars) > 0)            
            
        @else
            <p>Não foi possível carro cadastrado! <a href="/cars/create">Cadastrar carro</a> </p>    
        @endif      

    </div>

@endsection