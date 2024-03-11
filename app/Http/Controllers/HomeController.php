<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homes =  Home::all();
        return view("home.home",compact("homes"));
    }
    public function store(Request $request)
    {

        request()->validate([
            "name" => "required",
            "age" => "required"
        ]);

        Home::create([
            "name"=> $request->name,
            "age"=> $request->age,

        ]);

        return redirect()->back();

    }
}
