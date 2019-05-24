<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class CarsController extends Controller
{
    //
    public function index(){
        return view('booking');
    }
    public function result()
    {
        return view('result');
    }
    public function contact()
    {
        return view('contact');
    }
    public function edit()
    {
        return view('edit');
    }
    public function store(Request $request)
    {
        // valideeri andmed
        $this->validate($request,[
            'time' => 'required',
            'name' => 'required',
            'car' => 'required',
            'date' => 'required|date'
         ]);

        # code...
        $result = new Result();

        $result->time = $request->time;
        $result->name = $request->name;
        $result->car = $request->car;
        $result->date = $request->date;
        
        $result->save();

        return redirect('/result')->with('message','Saved');

    }
}
