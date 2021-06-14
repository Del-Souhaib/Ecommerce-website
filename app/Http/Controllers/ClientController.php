<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:client');
    }

    public function dashboard(){
        return view('client.dashboard');
    }
}
