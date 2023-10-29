<?php

namespace App\Http\Controllers\shipper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shipperController extends Controller
{
    public function index(){

        return view('shipper.home');
    }

    public function store()
    {
        return view('shipper.form');

    }
    public function view()
    {
        return view('shipper.view');

    }
}
