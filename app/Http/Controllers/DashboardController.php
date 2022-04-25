<?php

namespace App\Http\Controllers;

class DashboardController extends CoreController
{

    public function index()
    {
        return view('dashboard');
    }

}
