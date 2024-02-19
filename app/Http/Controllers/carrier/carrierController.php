<?php

namespace App\Http\Controllers\carrier;

use App\Http\Controllers\Controller;
use App\Http\Requests\carrier\formCarrier;
use App\Models\Carrier;
use App\Models\StatutJuridique;
use App\Models\transCondition;
use App\Models\Ville;
use Illuminate\Http\Request;
use function PHPUnit\Framework\throwException;

class carrierController extends Controller
{
    public function index()
    {
        $carriers = Carrier::all();
        $carriers->each(function ($carrier){
            $carrier->conditionnement =  $carrier->Conditionnement;


            if(isset($carrier->Conditionnement) && !empty($carrier->Conditionnement)){
                $carrier->Conditionnement->each(function($type){
                    $type->condition = $type->Conditionnement;
                });
            }
        });
        return view('carrier.home', compact('carriers'));
    }

    public function getForm()
    {
        $villes = Ville::all();
        $statuts = StatutJuridique::all();
        return view('carrier.form', compact('villes', 'statuts'));
    }
    public function storeCarrier(formCarrier $request)
    {
        $data = $request->validated();

        $carrier = new Carrier();

        $carrier->numero_rccm = $request->numero_rccm;
        $carrier->numero_ifu =  $request->numero_ifu;
        $carrier->numero_cnss = $request->numero_cnss;
        $carrier->annee_creation = date("Y", strtotime($request->annee_creation)) ;
        $carrier->numero_licence = $request->numero_licence;
        $carrier->raison_sociale = $request->raison_sociale;
        $carrier->sigle = $request->sigle;
        $carrier->boite_postale = $request->boite_postale;
        $carrier->email = $request->email;
        $carrier->contact_1 = $request->contact_1;
        $carrier->contact_2 = $request->contact_2;
        $carrier->fk_ville = intval($request->ville);
        $carrier->adressage = $request->adressage;
        $carrier->nom_responsable = $request->nom_responsable;
        $carrier->fk_statut_juridique = intval($request->statut_juridique);

        $carrier->created_by = 1;
        $carrier->updated_by = 1;
        $carrier->save();


        if(isset($request->vrac_solide)){
            $transCond = new transCondition();
            $transCond->fk_transporteur = $carrier->id;
            $transCond->fk_conditionnement = env('VRAC_SOLIDE');
            $transCond->created_by = 1;
            $transCond->updated_by = 1;

            $transCond->save();
        }
        if(isset($request->vrac_liquide)){
            $transCond = new transCondition();
            $transCond->fk_transporteur = $carrier->id;
            $transCond->fk_conditionnement = env('VRAC_LIQUIDE');
            $transCond->created_by = 1;
            $transCond->updated_by = 1;

            $transCond->save();
        }
        if(isset($request->roulier)){
            $transCond = new transCondition();
            $transCond->fk_transporteur = $carrier->id;
            $transCond->fk_conditionnement = env('ROULIER');
            $transCond->created_by = 1;
            $transCond->updated_by = 1;

            $transCond->save();
        }
        if(isset($request->conventionnel)){
            $transCond = new transCondition();
            $transCond->fk_transporteur = $carrier->id;
            $transCond->fk_conditionnement = env('CONVENTIONNEL');
            $transCond->created_by = 1;
            $transCond->updated_by = 1;

            $transCond->save();
        }
        if(isset($request->conteneur)){
            $transCond = new transCondition();
            $transCond->fk_transporteur = $carrier->id;
            $transCond->fk_conditionnement = env('CONTENEUR');
            $transCond->created_by = 1;
            $transCond->updated_by = 1;

            $transCond->save();
        }

        return redirect()->route('carrier.home')->with('success', "Le transporteur est ajouté.");
    }


    public function getFormUpdate($id)
    {
        $statutJuridiques = StatutJuridique::all();
        $villes = Ville::all();

        $carrier = Carrier::find(intval($id));
        $carrier->fk_ville = $carrier->ville;
        $carrier->fk_statut_juridique = $carrier->statutJuridique;
        $carrier->condition = $carrier->Conditionnement;

        if(isset($carrier->condition) && !empty($carrier->condition)){

                foreach ($carrier->condition as $type)
                if ($type->fk_conditionnement == env('VRAC_SOLIDE'))
                    $carrier->vrac_solide = true;
                elseif ($type->fk_conditionnement == env('VRAC_LIQUIDE'))
                    $carrier->vrac_liquide  = true;
                elseif ($type->fk_conditionnement == env('CONTENEUR'))
                    $carrier->conteneur  = true;
                elseif ($type->fk_conditionnement == env('CONVENTIONNEL'))
                    $carrier->conventionnel  = true;
                elseif ($type->fk_conditionnement == env('ROULIER'))
                    $carrier->roulier  = true;

        }
//        dd($carrier);

        return view('carrier.update', compact('statutJuridiques', 'villes','carrier'));

    }
    public function updateCarrier(formCarrier $request)
    {

        $request->validated();
        $previousUrl = app('router')->getRoutes(url()->previous())
            ->match(app('request')->create(url()->previous()))->getName() ;
        $carrier = Carrier::find(intval($request->id_transporteur));

        $carrier->numero_rccm = $request->numero_rccm;
        $carrier->numero_ifu = $request->numero_ifu;
        $carrier->numero_cnss = $request->numero_cnss;
        $carrier->annee_creation = $request->annee_creation;
        $carrier->numero_licence = $request->numero_licence;
        $carrier->raison_sociale = $request->raison_sociale;
        $carrier->sigle = $request->sigle;
        $carrier->boite_postale = $request->boite_postale;
        $carrier->email = $request->email;
        $carrier->contact_1 = $request->contact_1;
        $carrier->contact_2 = $request->contact_2;
        $carrier->fk_ville = intval($request->ville);
        $carrier->adressage = $request->adressage;
        $carrier->nom_responsable = $request->nom_responsable;
        $carrier->fk_statut_juridique = intval($request->statut_juridique);

        $carrier->created_by = 1;
        $carrier->updated_by = 1;
        $carrier->save();

        if(isset($request->vrac_solide)){
            $transCond = new transCondition();
            $transCond->fk_transporteur = $carrier->id;
            $transCond->fk_conditionnement = env('VRAC_SOLIDE');
            $transCond->created_by = 1;
            $transCond->updated_by = 1;

            $transCond->save();
        }
        if(isset($request->vrac_liquide)){
            $transCond = new transCondition();
            $transCond->fk_transporteur = $carrier->id;
            $transCond->fk_conditionnement = env('VRAC_LIQUIDE');
            $transCond->created_by = 1;
            $transCond->updated_by = 1;

            $transCond->save();
        }
        if(isset($request->roulier)){
            $transCond = new transCondition();
            $transCond->fk_transporteur = $carrier->id;
            $transCond->fk_conditionnement = env('ROULIER');
            $transCond->created_by = 1;
            $transCond->updated_by = 1;

            $transCond->save();
        }
        if(isset($request->conventionnel)){
            $transCond = new transCondition();
            $transCond->fk_transporteur = $carrier->id;
            $transCond->fk_conditionnement = env('CONVENTIONNEL');
            $transCond->created_by = 1;
            $transCond->updated_by = 1;

            $transCond->save();
        }
        if(isset($request->conteneur)){
            $transCond = new transCondition();
            $transCond->fk_transporteur = $carrier->id;
            $transCond->fk_conditionnement = env('CONTENEUR');
            $transCond->created_by = 1;
            $transCond->updated_by = 1;

            $transCond->save();
        }

        return redirect()->route('carrier.home')->with('success', "Les informations sur le transporteur sont modifiées .");
    }

    public function deleteCarrier($id)
    {
        try {
            $carrierTransConditions =  transCondition::where('fk_transporteur','=',intval($id));

            $carrierTransConditions->each(function($carrier){
                $carrier->delete();
            });

            $carrier = Carrier::find(intval ($id));

            $carrier->delete();
            return 0;
        }
        catch (\Exception $e) {
            throwException($e);
        }
    }


}
