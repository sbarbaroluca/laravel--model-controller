<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $title='I miei film';
        $movies= \App\Movie::all();

        return view('home', compact('title', 'movies'));
    }
}
