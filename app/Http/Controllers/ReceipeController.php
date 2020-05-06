<?php

namespace App\Http\Controllers;

use App\Receipe;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function index()  {
        $receipes = Receipe::all();
        return view('Home', compact('receipes'));
    }
}
