<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Car;
use App\Models\Insurance;
use Illuminate\Http\Request;

class FrontCarController extends Controller
{
    public function cars(){
        $cars = Car::all();
        return view('frontend.layout.car.cars',\compact('cars'));
    }

    public function searchedCar(Request $request){
        $search = $request->input('search');
        $cars = Car::where('name', 'like', '%' . $search . '%')->get();
        return view('frontend.layout.car.cars', compact('cars', 'search'));
    }

    public function singleview($id){
        $car = Car::find($id);
        $insurances = Insurance::all();
        return view('frontend.layout.car.singleview',\compact('car','insurances'));
    }
}
