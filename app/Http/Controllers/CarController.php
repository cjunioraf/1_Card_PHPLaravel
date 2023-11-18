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

        return view('cars.show',['car'=> $car]);    

    }
}
