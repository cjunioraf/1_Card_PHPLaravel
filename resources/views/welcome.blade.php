@extends('layouts.main')

@section('title', 'CAFEJ Carros')

@section('Content')

<div id="search-container" class="col-md-12">

    <h1>Busque um Carro</h1>
    <!-- Pesquisa - GET -->
    <form action="/" method="GET" >
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>

</div>    

<div id="cars-container" class="col-md-12">

    @if($search)    

        @if(count($cars) == 0)
            <h2>Buscando por: {{$search}} </h2>
            <p>Não foi possível encontrar carro buscasdo! <a href="/">Ver Todos</a> </p>    
        @else
            <h2>Buscando por: {{$search}} <a href="/">"Ver Todos"</a> </h2>
        @endif      

    @else

        @if(count($cars) == 0)
            <h2>Não há carro disponível!</h2>
        @elseif(count($cars) == 1)
            <h2>Carro disponível:</h2>
        @else 
            <h2>Carros disponíveis:</h2>
        @endif    

    @endif

    <div id="cards-container" class="row">

        @foreach($cars as $car)
            
            <div class="card col-md-3">
                <img src="/img/cars/{{ $car->image }}" alt="{{ $car->model }}">            
                <div class="card-body">
                    <p class="card-date">data da inclusão: {{ date('d/m/Y', strtotime($car->date))}}</p>
                    <h5 class="card-model">{{ $car->model }}</h5>
                    <p class="card-interested">X interessado</p>
                    <a href="/cars/{{ $car->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>

        @endforeach     

    </div>

</div>
 
@endsection
