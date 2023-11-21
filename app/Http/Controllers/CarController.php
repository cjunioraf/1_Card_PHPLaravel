<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\User;

class CarController extends Controller
{
    public function index(){
        //verifica se vem algo no search
        $search = request('search');

        if($search){
            //select * from cars where model like '%search%'
            $cars = Car::where('model', 'like', '%' .$search.'%')->get();
        } else {
            //select * from                 
            $cars = Car::all();
        }        
        
        return view('welcome',['cars' => $cars, 'search'=> $search]);
    }

    public function create(){
        return view('cars.create');
    }

    public function store(Request $request){
        
        $car = new Car;
        $Msg = "Carro salvo com sucesso!";
        //pega o usuário autenticado
        $user = auth()->user();
        $car->user_id = $user->id;

        $car->model = $request->model;
        $car->date = $request->date;
        $car->city = $request->city;
        $car->zerokm = $request->zerokm;  
        $car->description = $request->description;
        $car->itens = $request->itens; 
        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestimage = $request->image;            
            $extension = $requestimage->extension();
            $imagename = md5($requestimage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            //Faz o uploade do arquivo do servidor
            $requestimage->move(public_path('img/cars'), $imagename);    
            $car->image = $imagename;
        }       

        $car->save();

        return redirect('/')->with('msg', $Msg);
    }

    public function show($id){

        $car = Car::findOrFail($id); 
        //select * from users where id = $car->user_id - first - primeiro usuário que encontrar(não varre o banco) - toArray transforma o obj em array.
        $carOwner = User::where('id', $car->user_id)->first()->toArray();

        return view('cars.show',['car'=> $car, 'carOwner' => $carOwner]);    

    }
    public function destroy($id){

        Car::findOrFail($id )->delete();
        return redirect('/dashboard')->with('msg','Carro deletado com sucesso!');
    }

    public function edit($id){

        $car = Car::findOrFail($id);
        return view('cars.edit',['car'=> $car]);
    }

    public function update(Request $request){
        
        $record = $request->all();    

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestimage = $request->image;            
            $extension = $requestimage->extension();
            $imagename = md5($requestimage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            //Faz o uploade do arquivo do servidor
            $requestimage->move(public_path('img/cars'), $imagename);    
            $record['image'] = $imagename;
        }  

        Car::findOrFail($request->id)->update($record);
        return redirect('/dashboard')->with('msg','Carro editado com sucesso!');

    }

    public function dashboard(){
        $user = auth()->user();
        $cars = $user->cars;
        return view('cars.dashboard',['cars'=> $cars]);
    }   

    public function joincar($id){

        $user = auth()->user();
        //carASinterested função criada no \App\Models\User attach usuário + id do carro na tabela car_user
        $user->carsASinterested()->attach($id);
        
        $car = Car::findOrFail($id); 

        return redirect('/dashboard')->with('msg','Seu interesse está confirmado no carro ' . $car->model . '!');

    }
}
