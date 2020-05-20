<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function php() {
        $lessons = array(
            'lesson1' => 'this is php lesson 1',
            'lesson2' => 'this is php lesson 2',
            'lesson3' => 'this is php lesson 3',
        );
        return view('php', compact('lessons'));
    }

    public function js() {
        $lessons = array(
            'lesson1' => 'this is php lesson 1',
            'lesson2' => 'this is php lesson 2',
            'lesson3' => 'this is php lesson 3',
        );
        return view('js', compact('lessons'));
    }
}
