<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

}
