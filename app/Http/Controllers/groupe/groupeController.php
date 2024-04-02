<?php

namespace App\Http\Controllers\groupe;

use App\Http\Controllers\Controller;
use App\Http\Requests\groupe\formGroupe;
use App\Models\Groupe;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

use function PHPUnit\Framework\throwException;

class groupeController extends Controller
{
    public function index()
    {
        $groupes = Groupe::all();
        return view('groupe.home', compact('groupes'));
    }

    public function getForm(){

        return view('groupe.form');
    }

    public function storeGroupe(formGroupe  $request)
    {
        $data = $request->validated();
        $groupe = new Groupe();
        $groupe->libelle = $request->libelle;
        $groupe->description =  $request->description;
        $groupe->created_by = 1;
        $groupe->updated_by = 1;
        $groupe->save();

        return redirect()->route('groupe.home')->with('success', "Le groupe est ajouté.");

    }

    public function getFormUpdate($id){

        $groupe = Groupe::find(intval($id));
        return view('groupe.update', compact('groupe'));

    }

    public function updateGroupe(formGroupe $request){
        //dd($request);
        $request->validated();
        $previousUrl  = app('router')->getRoutes(url()->previous())
            ->match(app('request')->create(url()->previous()))->getName();
        $groupe = Groupe::find(intval($request->id_groupe));

        $groupe->libelle = $request->libelle;
        $groupe->description =  $request->description;
        $groupe->created_by = 1;
        $groupe->updated_by = 1;
        $groupe->save();

        return redirect()->route('groupe.home')->with('success', "Les informations sur le groupe sont modifiées .");

    }

    public function deleteGroupe($id){

        try {


            $groupe = Groupe::find(intval ($id));

            $groupe->delete();
            return 0;
        }
        catch (\Exception $e) {
            throwException($e);
        }
    }

    public function view()
    {
        return view('groupe.view');

    }
}
