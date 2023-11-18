@extends('layouts.main')

@section('title', 'CAFEJ Carros')

@section('Content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Carro</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>    

<div id="cars-container" class="col-md-12">

    <h2>Carros já cadastrados</h2>

    <p class=subtitle >Próximos carros</p>

    <div id="cards-container" class="row">

        @foreach($cars as $car)
            <div class="card col-md-3">
                <img src="/img/cars/{{ $car->image }}" alt="{{ $car->model }}">            
                <div class="card-body">
                    <p class="card-date">data da inclusão 18/11/2023</p>
                    <h5 class="card-model">{{ $car->model }}</h5>
                    <p class="card-interested">X interessado</p>
                    <a href="/cars/{{ $car->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach

    </div>

</div>
 
@endsection
