<?php

namespace App\Http\Controllers;
use DB;
use App\hojaRuta;
use Illuminate\Http\Request;

class hojaRutaController extends Controller
{
    public function index()
    {
        $hojaRuta=hojaRuta::all();//DB::table('hoja_rutas')->get();
        return view ('hojaRuta')->with('hojaRuta',$hojaRuta);
    }
}
