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
    public function show(Home $home)
    {
        return view("home.components.show_section1", compact("home"));
    }

    public function update(Request $request ,Home $home){

        request()->validate([
            "name" => "required",
            "age" => "required"
        ]);

        $home->update([
            "name"=> $request->name,
            "age"=> $request->age,

        ]);
        return redirect()->route("home.index");
    }

    public function destroy(Home $home){
        $home->delete();
        return redirect()->route("home.index");

    }
}
