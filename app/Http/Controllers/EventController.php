<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function portfolio(request $request) {
        return view('portfolio');
    }
}
