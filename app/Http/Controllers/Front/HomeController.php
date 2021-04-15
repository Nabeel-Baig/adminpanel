<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    final public function index(): View
    {
        return view('front.home');
    }

}
