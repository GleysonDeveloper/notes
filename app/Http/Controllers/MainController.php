<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Método do controlador index
    public function index($value)
    {
        return view('main', ['value' => $value]);
    }
}
