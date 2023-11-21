<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public static function index() {
        return view ('cars.all', [
            "title" => "F1 | Cars",
            "car" => Car::all()
        ]);
    }

    public function show($car) {
        return view('cars.detail', [
            "title" => "FDIWS | Details of Car",
            "car" => Car::find($car)
        ]);
    }
}
