<?php

namespace App\Http\Controllers;
use DB;
use App\servicio;
use Illuminate\Http\Request;

class servicioController extends Controller
{
    public function index()
    {
        $servicio=servicio::all();//DB::table('servicios')->get();
        return view ('servicio')->with('servicio',$servicio);
    }
}
