<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{

    public function index(): Factory|View
    {
        return view('index');
    }


    public function about(): Factory|View
    {
        return view('about');
    }


    public function contact(): Factory|View
    {
        return view('contact');
    }
}
