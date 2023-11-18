<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;

class CarController extends Controller
{
    public function index(){
        //select * from 
        $cars = Car::all();
        return view('welcome',['cars' => $cars]);
    }

    public function create(){
        return view('cars.create');
    }

    public function store(Request $request){
        
        $car = new Car;
        $Msg = "Carro salvo com sucesso!";
        
        $car->model = $request->model;
        $car->city = $request->city;
        $car->zerokm = $request->zerokm;  
        $car->description = $request->description;
        
        $car->save();

        return redirect('/')->with('msg', $Msg);
    }
}
