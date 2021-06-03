<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    //
    public function index()
    {
        $selects = DB::select('select * from countries where id < 10');
        return view('main',['selects'=>$selects]);        
//            return view('main');
    }

    public function about()
    {
            return view('about');
    }

    public function services()
    {
            return view('services');
    }

}
