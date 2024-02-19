<?php

    namespace App\Http\Controllers\auth;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\auth\formUser;
    use App\Http\Requests\auth\formUserUpdate;
    use App\Models\Groupe;
    use App\Models\User;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Http\Request;

use function PHPUnit\Framework\throwException;

    class authController extends Controller
    {

        public function login()
        {
            return view('auth.login');

        }

        public function loginUser()
        {

        }

        public function home()
        {
            $users = User::all();

            $users->each(function ($user){
                $user->fk_groupe = $user->groupe;
            });
            return view('auth.home' , compact('users'));
        }

        public function getForm()
        {
            $groupes = Groupe::all();
            return view('auth.register', compact('groupes'));
        }

        public function storeUser(formUser $request)
        {
            $request->validated();

            $user = new User();
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->fk_groupe = $request->groupe;
            $user->password =Hash::make( $request->password);
            $user->created_by = 1;
            $user->updated_by = 1;

            $user->save();

            return redirect()->route('auth.home')->with('success', "L'utilisateur est ajouté.");
        }

        public function getFormUpdate($id)
        {
            $groupes = Groupe::all();
            $user = User::find(intval($id));
            $user->fk_groupe = $user->groupe;
            return view('auth.update', compact('user', 'groupes'));
        }

        public function updateUser(formUserUpdate $request){

            $request->validated();
            $previousUrl  = app('router')->getRoutes(url()->previous())
                ->match(app('request')->create(url()->previous()))->getName();
            $user = User::find(intval($request->id_utilisateur));
            //dd([$request,$user]);

            $user->nom = $request->nom;
            $user->prenom =  $request->prenom;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->fk_groupe = intval($request->groupe);
            $user->password = Hash::make( $request->password);

            $user->created_by = 1;
            $user->updated_by = 1;

            $user->save();

            return redirect()->route('auth.home')->with('success', "Les informations sur l'utilisateur sont modifiées .");

        }

        public function deleteUser($id){

            try {


                $user = User::find(intval ($id));

                $user->delete();
                return 0;
            }
            catch (\Exception $e) {
                throwException($e);
            }
        }

    }
