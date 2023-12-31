@extends('layouts.main')

@section('title', $car->model)

@section('Content')
    <!-- 10 colunas / offset-md-1 centraliza no meio bootsTrap-->
    <div class="col-md-10 offset-md-1">

        <div class="row">

            <div id="image-container" class= "col-md-6">
                <img src="/img/cars/{{ $car->image }}" class="img-fluid" alt="{{ $car->model }}">
            </div>

            <div id="info-container" class= "col-md-6">
                
                <h1>{{ $car->model }}</h1>
                <p class="car-city"><ion-icon name="location-outline"></ion-icon>{{ $car->city }}</p>
                <p class="car-interested"><ion-icon name="people-outline"></ion-icon> {{ count($car->users) }} Interessado(s)</p> 
                <p class="car-owner"><ion-icon name="star-outline"></ion-icon> {{ $carOwner['name'] }}</p>

                @if($userJoined == false)

                    <form action="/cars/join/{{ $car->id }}" method="POST">

                        @csrf                    
                        
                        <a href="/cars/join/{{ $car->id }}" 
                        class="btn btn-primary" 
                        id="car-submit" onclick="event.preventDefault(); this.closest('form').submit();">Confirmar Interesse
                        </a>

                    </form>               

                @else                    
                    <p class="joined-msg"> Você já possui Interesse nesse carro.</p>   
                @endif

                <h3>Carro possui:</h3>  

                <ul id="itens-list">
                    @foreach($car->itens as $item)
                        <li><ion-icon name="play-outline"></ion-icon><span>{{ $item }}</span></li>
                    @endforeach
                </ul>

            </div>

            <div class= "col-md-12" id="description-container">
                <h3>Sobre o carro:</h3>
                <p class="car-description"> {{ $car->description }}</p>
            </div>

        </div>
    </div>

@endsection

