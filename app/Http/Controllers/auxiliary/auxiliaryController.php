<?php

namespace App\Http\Controllers\auxiliary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class auxiliaryController extends Controller
{
    public function index()
    {
        return view('auxiliary.home');

    }
    public function store()
    {
        return view('auxiliary.form');

    }
    public function view()
    {
        return view('auxiliary.view');

    }
}
