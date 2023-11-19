@extends('layouts.main')

@section('title', 'Cadastro Carro')

@section('Content')   

    <div id="car-create-container" class="col-md-6 offset-md-3">

        <h1>Cadastre seu carro</h1>   

        <form action="/cars" method="POST" enctype="multipart/form-data">
            
            @csrf

            <div class="form-group">
                <label for="image">Imagem do Carro:</label>                
                <input type="file" id="image" name="image" class="from-control-file">
            </div>

            <div class="form-group">
                <label for="model">Modelo:</label>                
                <input type="text" class="form-control" id="model" name="model" placeholder="Modelo do carro">
            </div>

            <div class="form-group">
                <label for="date">Data do cadastro:</label>                
                <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="form-group">
                <label for="model">Cidade:</label>                
                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do carro">
            </div>

            <div class="form-group">
                <label for="model">O carro é ZERO KM?</label>                
                <select class="form-control" name="zerokm" id="zerokm">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="model">Descrição:</label>                
                <textarea class="form-control" name="description" id="description" placeholder="Descrição sobre o carro..."></textarea>
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