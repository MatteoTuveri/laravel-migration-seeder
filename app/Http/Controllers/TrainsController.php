<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        $date = date("Y-m-d");
        $data = Train::where('departure_time', 'like', $date . '%')->get();
        return view('home',compact('data'));
    }
}
