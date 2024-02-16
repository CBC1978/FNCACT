<?php

namespace App\Http\Controllers\auxiliary;

use App\Http\Controllers\Controller;
use App\Http\Requests\auxiliary\formAuxiliary;
use App\Models\Auxiliary;
use App\Models\StatutJuridique;
use App\Models\TypeAuxiliary;
use App\Models\Ville;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

use function PHPUnit\Framework\throwException;

class auxiliaryController extends Controller
{
    public function index()
    {

        $auxiliarys = Auxiliary::all();

        $auxiliarys->each(function ($auxiliary){
            $auxiliary->fk_statut_juridique =  $auxiliary->statutJuridique;
            $auxiliary->fk_ville = $auxiliary->ville;
            $auxiliary->fk_type_auxiliaire = $auxiliary->typeAuxiliary;

        });


        return view('auxiliary.home', compact('auxiliarys'));

    }

    public function getForm(){
        $villes = Ville::all();
        $statuts = StatutJuridique::all();
        $typeAuxiliarys = TypeAuxiliary::all();
        return view('auxiliary.form', compact('villes', 'typeAuxiliarys', 'statuts'));
    }

    public function storeAuxiliary(formAuxiliary  $request)
    {

        $data = $request->validated();

        $auxiliary = new Auxiliary();

        $auxiliary->numero_rccm = $request->numero_rccm;
        $auxiliary->numero_ifu =  $request->numero_ifu;
        $auxiliary->numero_cnss = $request->numero_cnss;
        $auxiliary->annee_creation = date("Y", strtotime($request->annee_creation)) ;
        $auxiliary->numero_licence = $request->numero_licence;
        $auxiliary->raison_sociale = $request->raison_sociale;
        $auxiliary->sigle = $request->sigle;
        $auxiliary->boite_postale = $request->boite_postale;
        $auxiliary->email = $request->email;
        $auxiliary->contact_1 = $request->contact_1;
        $auxiliary->contact_2 = $request->contact_2;
        $auxiliary->fk_ville = intval($request->ville);
        $auxiliary->adressage = $request->adressage;
        $auxiliary->nom_responsable = $request->nom_responsable;
        $auxiliary->fk_statut_juridique = intval($request->statut_juridique);
        $auxiliary->fk_type_auxiliaire = intval($request->type_auxiliaire);

        $auxiliary->created_by = 1;
        $auxiliary->updated_by = 1;

        $auxiliary->save();

        return redirect()->route('auxiliary.home')->with('success', "L'auxiliaire est ajouté.");

    }

    public function getFormUpdate($id){
        $statutJuridiques = StatutJuridique::all();
        $villes = Ville::all();
        $typeAuxiliarys = TypeAuxiliary::all();

        $auxiliary = Auxiliary::find(intval($id));
        $auxiliary->fk_ville = $auxiliary->ville;
        $auxiliary->fk_statut_juridique = $auxiliary->statutJuridique;
        $auxiliary->fk_type_auxiliaire = $auxiliary->typeAuxiliary;

        return view('auxiliary.update', compact('statutJuridiques', 'typeAuxiliarys', 'villes','auxiliary'));
    }

    public function updateAuxiliary(FormAuxiliary $request){
        //dd($request);
        $request->validated();
        $previousUrl  = app('router')->getRoutes(url()->previous())
            ->match(app('request')->create(url()->previous()))->getName();
        $auxiliary = Auxiliary::find(intval($request->id_auxiliaire_transport));

        $auxiliary->numero_rccm = $request->numero_rccm;
        $auxiliary->numero_ifu =  $request->numero_ifu;
        $auxiliary->numero_cnss = $request->numero_cnss;
        $auxiliary->annee_creation = date("Y", strtotime($request->annee_creation)) ;
        $auxiliary->numero_licence = $request->numero_licence;
        $auxiliary->raison_sociale = $request->raison_sociale;
        $auxiliary->sigle = $request->sigle;
        $auxiliary->boite_postale = $request->boite_postale;
        $auxiliary->email = $request->email;
        $auxiliary->contact_1 = $request->contact_1;
        $auxiliary->contact_2 = $request->contact_2;
        $auxiliary->fk_ville = intval($request->ville);
        $auxiliary->adressage = $request->adressage;
        $auxiliary->nom_responsable = $request->nom_responsable;
        $auxiliary->fk_statut_juridique = intval($request->statut_juridique);
        $auxiliary->fk_type_auxiliaire = intval($request->type_auxiliaire);

        $auxiliary->created_by = 1;
        $auxiliary->updated_by = 1;

        $auxiliary->save();

        //dd($auxiliary);




        return redirect()->route('auxiliary.home')->with('success', "Les informations sur l'auxiliaire sont modifiées .");

    }

    public function deleteAuxiliary($id){

        try {


            $auxiliary = Auxiliary::find(intval ($id));

            $auxiliary->delete();
            return 0;
        }
        catch (\Exception $e) {
            throwException($e);
        }
    }

    public function view()
    {
        return view('auxiliary.view');

    }
}
