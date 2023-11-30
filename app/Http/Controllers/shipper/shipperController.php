<?php

namespace App\Http\Controllers\shipper;

use App\Http\Controllers\Controller;
use App\Http\Requests\shipper\formShipper;
use App\Models\Produit;
use App\Models\StatutJuridique;
use Illuminate\Http\Request;

class shipperController extends Controller
{
    public function index(){

        return view('shipper.home');
    }

    public function getProduit()
    {

        return Produit::all();
    }

    public function getForm()
    {
        $statutJuridiques = StatutJuridique::all();
        $produits = Produit::all();
        return view('shipper.form', compact('statutJuridiques', 'produits'));

    }
    public function getDetail()
    {
        return view('shipper.view');
    }

    public function storeShipper(formShipper $request)
    {
        $data = $request->validated();
        dd($data);
    }
}
