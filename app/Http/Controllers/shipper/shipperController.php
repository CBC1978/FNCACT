<?php

namespace App\Http\Controllers\shipper;

use App\Http\Controllers\Controller;
use App\Http\Requests\shipper\formShipper;
use App\Models\Produit;
use App\Models\Shipper;
use App\Models\ShipperProduct;
use App\Models\StatutJuridique;
use App\Models\Ville;
use Illuminate\Http\Request;
use function PHPUnit\Framework\throwException;

class shipperController extends Controller
{
    public function getShipper()
    {
        return Shipper::all();

    }
    public function home(){

        $shippers = Shipper::all();
        $shippers->each(function($shipper){
            $shipper->fk_ville = $shipper->ville;
            $shipper->fk_statut_juridique = $shipper->statutJuridique;
            $shipper->produit = $shipper->Product;
            $shipper->produit->each(function ($produit){
                $produit->detail = $produit->Product;
            });
        });
        return view('shipper.home' ,compact('shippers'));
    }

    public function getProduit()
    {
        return Produit::all();
    }

    public function getForm()
    {
        $statutJuridiques = StatutJuridique::all();
        $produits = Produit::all();
        $villes = Ville::all();
        return view('shipper.form', compact('statutJuridiques', 'produits', 'villes'));

    }
    public function getDetail($id)
    {
        $shipper = Shipper::find(intval($id));
        $shipper->fk_ville = $shipper->ville->libelle;
        $shipper->fk_statut_juridique = $shipper->statutJuridique->libelle;
        $shipper->produit = $shipper->Product;
        $shipper->produit->each(function ($produit){
            $produit->detail = $produit->Product;
        });
        return view('shipper.view');
    }

    public function storeShipper(formShipper $request)
    {
        $data = $request->validated();

        $shipper = new Shipper();

        $shipper->numero_rccm = $request->numero_rccm;
        $shipper->numero_ifu =  $request->numero_ifu;
        $shipper->numero_cnss = $request->numero_cnss;
        $shipper->numero_cbc = $request->numero_cbc;
        $shipper->annee_creation = $request->annee_creation;
        $shipper->raison_sociale = $request->raison_sociale;
        $shipper->sigle = $request->sigle;
        $shipper->boite_postale = $request->boite_postale;
        $shipper->email = $request->email;
        $shipper->contact_1 = $request->contact_1;
        $shipper->contact_2 = $request->contact_2;
        $shipper->fk_ville = intval($request->ville);
        $shipper->adressage = $request->adressage;
        $shipper->nom_responsable = $request->nom_responsable;
        $shipper->fk_statut_juridique = intval($request->statut_juridique);
        $shipper->activite_principale = $request->activite_principale;
        $shipper->activite_secondaire = $request->activite_secondaire;
        $shipper->operation_transport = $request->operation_transport;

        $shipper->created_by = 1;
        $shipper->updated_by = 1;

        //Import product
        if (isset($request->product_import) && !empty($request->product_import)){
            foreach ($request->product_import as $product){

                $objProduct = new ShipperProduct();
                $objProduct->fk_chargeur =  intval($request->id_chargeur);
                $objProduct->fk_produit = intval($product);
                $objProduct->type_produit = env('INT_IMPORT');
                $objProduct->created_by = 1;
                $objProduct->updated_by = 1;

                $objProduct->save();
            }
        }

        //Export product
        if (isset($request->product_export) && !empty($request->product_export)){
            foreach ($request->product_export as $product){

                $objProduct = new ShipperProduct();
                $objProduct->fk_chargeur =  intval($request->id_chargeur);
                $objProduct->fk_produit = intval($product);
                $objProduct->type_produit = env('INT_EXPORT');
                $objProduct->created_by = 1;
                $objProduct->updated_by = 1;

                $objProduct->save();
            }
        }
        $shipper->save();

        return redirect()->route('shipper.home')->with('success', "Le chargeur est ajouté.");
    }

    public function getFormUpdate($id)
    {
        $statutJuridiques = StatutJuridique::all();
        $produits = Produit::all();
        $villes = Ville::all();

        $shipper = Shipper::find(intval($id));
        $shipper->fk_ville = $shipper->ville;
        $shipper->fk_statut_juridique = $shipper->statutJuridique;
        $shipper->produit = $shipper->Product;
        $shipper->produit->each(function ($produit){
            $produit->detail = $produit->Product;
        });

        return view('shipper.update', compact('statutJuridiques', 'produits', 'villes','shipper'));
    }

    public function updateShipper(formShipper $request)
    {
        $request->validated();
        $previousUrl  = app('router')->getRoutes(url()->previous())
            ->match(app('request')->create(url()->previous()))->getName();
        $shipper = Shipper::find(intval($request->id_chargeur));

        $shipper->numero_rccm = $request->numero_rccm;
        $shipper->numero_ifu =  $request->numero_ifu;
        $shipper->numero_cnss = $request->numero_cnss;
        $shipper->numero_cbc = $request->numero_cbc;
        $shipper->annee_creation = $request->annee_creation;
        $shipper->raison_sociale = $request->raison_sociale;
        $shipper->sigle = $request->sigle;
        $shipper->boite_postale = $request->boite_postale;
        $shipper->email = $request->email;
        $shipper->contact_1 = $request->contact_1;
        $shipper->contact_2 = $request->contact_2;
        $shipper->fk_ville = intval($request->ville);
        $shipper->adressage = $request->adressage;
        $shipper->nom_responsable = $request->nom_responsable;
        $shipper->fk_statut_juridique = intval($request->statut_juridique);
        $shipper->activite_principale = $request->activite_principale;
        $shipper->activite_secondaire = $request->activite_secondaire;
        $shipper->operation_transport = $request->operation_transport;

        $shipper->created_by = 1;
        $shipper->updated_by = 1;

        // Delete products
        $products = $shipper->Product;
        $products->each(function($product){
            $product->delete();
        });

        //Import product
        if (isset($request->product_import) && !empty($request->product_import)){
            foreach ($request->product_import as $product){

                $objProduct = new ShipperProduct();
                $objProduct->fk_chargeur =  intval($request->id_chargeur);
                $objProduct->fk_produit = intval($product);
                $objProduct->type_produit = env('INT_IMPORT');
                $objProduct->created_by = 1;
                $objProduct->updated_by = 1;

                $objProduct->save();
            }
        }

        //Export product
        if (isset($request->product_export) && !empty($request->product_export)){
            foreach ($request->product_export as $product){

                $objProduct = new ShipperProduct();
                $objProduct->fk_chargeur =  intval($request->id_chargeur);
                $objProduct->fk_produit = intval($product);
                $objProduct->type_produit = env('INT_EXPORT');
                $objProduct->created_by = 1;
                $objProduct->updated_by = 1;

                $objProduct->save();
            }
        }
        $shipper->save();

        return redirect()->route('shipper.home')->with('success', "Les informations sur le chargeur sont modifiées");
    }

    public function deleteShipper($id)
    {
        try {
            $shipperProducts = ShipperProduct::where('fk_chargeur','=',intval($id));

            $shipperProducts->each(function($shipper){
                $shipper->delete();
            });

            $shipper = Shipper::find(intval($id));

            $shipper->delete();

            return 0;
        }
       catch (\Exception $e){
            throwException($e);
       }
    }
}
