<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
}

public function contact() {
    return view('contact');
}

public function ons() {
    return view('ons');
}

public function app() {
    return view('app');
}
}

