<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function frontend() {
        return view('frontend.content');
    }
}
