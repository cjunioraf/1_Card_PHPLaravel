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
}
