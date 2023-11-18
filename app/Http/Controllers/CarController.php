<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        //$cars = Car::all();
        return view('welcome');
    }

    public function create(){
        return view('cars.create');
    }
}
