<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = Car::published();
        return view('cars', compact('cars'));
    }

    // public function show($id)
    // {
    //     $results = DB::select('select * from $idusers where id = ?', array(1));
    //     return view('cars', compact('cars'));
    // }

    public function show(Car $car)
    {
     return view('cars.show', compact('car'));
    }

    // public function show($id){
    //     $post = Post::with('comments')->find($id);
    //     return view('posts.show', compact('post'));
    // }
}
