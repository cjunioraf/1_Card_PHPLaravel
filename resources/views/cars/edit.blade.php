@extends('layouts.main')

@section('title', 'Editando: ' . $car->model)

@section('Content')   

    <div id="car-create-container" class="col-md-6 offset-md-3">

        <h1>Editando: {{ $car->model }} </h1>   

        <form action="/cars/update/{{ $car->id }}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="image">Imagem do Carro:</label>                
                <input type="file" id="image" name="image" class="from-control-file">
                <img src="/img/cars/{{ $car->image }}" alt="{{ $car->model }}" class = "img-preview">
            </div>

            <div class="form-group">
                <label for="model">Modelo:</label>                
                <input type="text" class="form-control" id="model" name="model" value="{{$car->model}}">
            </div>

            <div class="form-group">
                <label for="date">Data do cadastro:</label>                
                <input type="date" class="form-control" id="date" name="date" value="{{ \Carbon\Carbon::parse($car->date)->format('Y-m-d') }}">                
            </div>

            <div class="form-group">
                <label for="model">Cidade:</label>                
                <input type="text" class="form-control" id="city" name="city" value="{{ $car->city }}">
            </div>

            <div class="form-group">
                <label for="model">O carro é ZERO KM?</label>                
                <select class="form-control" name="zerokm" id="zerokm">
                    <option value="0">Não</option>
                    <option value="1" {{ $car->zerokm == 1 ? "selected='selected'" : "" }}>Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="model">Descrição:</label>                
                <textarea class="form-control" name="description" id="description"> {{$car->description}} </textarea>
            </div>

            <div class="form-group">
                <label for="model">Adicione ítens do carro:</label>                                
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Ar-condicionado"> Ar-condicionado                    
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Direção Hidráulica"> Direção Hidráulica
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Direção Elétrica"> Direção Elétrica
                </div>                    
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="2 Portas"> 2 Portas    
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="4 Portas"> 4 Portas
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Vidros Elétricos"> Vidros Elétricos
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Comp. de Bordo"> Comp. de Bordo
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Salvar">

        </form>

    </div>

@endsection