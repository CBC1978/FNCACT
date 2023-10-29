<?php

namespace App\Http\Controllers\carrier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class carrierController extends Controller
{
    public function index()
    {
        return view('carrier.home');

    }

    public function store()
    {
        return view('carrier.form');

    }

    public function view()
    {
        return view('carrier.view');

    }
}
