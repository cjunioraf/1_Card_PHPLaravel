@extends('layouts.main')

@section('title', 'Dashboard')

@section('Content')
        
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Carros</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-cars-container">

        @if(count($cars) > 0)            

            <table class="table">

                <thead>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Interessados</th>
                        <th scope="col">Ação</th>
                    </tr>

                </thead>

                <tbody>
                    
                    @foreach($cars as $car)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>                        
                            <td><a href="/cars/{{ $car->id }}"> {{ $car->model }}</a></td>
                            <td>0</td>
                            <td>
                                <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                                
                                <form action="/cars/{{ $car->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        @else
            <p>Não foi possível carro cadastrado! <a href="/cars/create">Cadastrar carro</a> </p>    
        @endif      

    </div>

@endsection