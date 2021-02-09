<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('main.index', [
            'title'              => 'Laquale Reciclaveis - Assesoria e Consultoria em Reciclaveis'
        ]);
    }
}
