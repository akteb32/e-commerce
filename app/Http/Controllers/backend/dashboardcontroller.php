<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }
}
