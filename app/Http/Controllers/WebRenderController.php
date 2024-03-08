<?php

namespace App\Http\Controllers;

class WebRenderController extends Controller
{
    public function __invoke($path = null) {
        $tabCurent = $path;
        return view('home.index')->with('tabCurent');
    }
}
