<?php

    namespace App\Http\Controllers\auth;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\auth\formLogin;
    use App\Http\Requests\auth\formProfileUpdate;
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

        public function getFormLogin()
        {
            return view('auth.login');

        }

        /*public function login(formLogin $request)
        {
            $validated = $request->validated();
            //Get username
            $user = User::whereUsername($request->username)->first();

            //Verify if username exist
            if ( ($user) && !empty($user->id)) {
                if (Hash::check($request->password, $user->password)) {
                    return redirect()->route('getHome');
                }else {
                    return back()->with('fail', "Les mots de passe ne correspondent pas");
                }
            }else {
                return back()->with('fail', "Le nom d'utilisateur n'existe pas");
            }
        }*/



        public function login(formLogin $request)
        {
            $validated = $request->validated();
            $userId = User::where(['username'=>$request->username])->pluck('id')->first();
            $user = User::find($userId);
            if($user){
                if (Hash::check($request->password, $user->password)){
                    $request->session()->put('userId', $userId);
                    $request->session()->put('userId', $user->id);
                    $request->session()->put('nom', $user->nom);
                    $request->session()->put('prenom', $user->prenom);
                    $request->session()->put('email', $user->email);
                    $request->session()->put('username', $user->username);
                    $request->session()->put('fk_groupe', $user->fk_groupe);
                    $request->session()->put('created_by', $user->created_by);
                    $request->session()->put('updated_by', $user->updated_by);
                    //dd($request->session()->all());
                    return redirect()->route('getHome');
                } else {
                    return back()->with('fail', "Les mots de passe ne correspondent pas ");
                }
            } else {
                return back()->with('fail', "Le nom d'utlisateur n'existe pas ");
            }
        }

        public function logout(Request $request)
        {
           // Auth::logout(); // Déconnecte l'utilisateur
           $request->session()->flush(); // Vide la session
           return redirect()->route('getFormLogin'); // Redirige vers la page de connexion
        }


        public function home()
        {
            $users = User::all();
            $users->each(function ($user){
                $user->fk_groupe = $user->groupe;
            });
            return view('auth.home' , compact('users'));
        }

        public function getHome()
        {
            return  view('home');
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
            if (empty($request->password)) {
                $user->password = $user->password;
            }else{
                $user->password = Hash::make( $request->password);
            }

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


        public function profile()
        {
            if (session()->has('username')) {
                $username = session('username');
                $user = User::where('username', $username)->first(); // Recherche de 'utilisateur par son nom d'utilisateur

                if ($user) {
                    return view('auth.profile', compact('user'));

                }
            }
        }

        public function updateProfile(formProfileUpdate $request){
            $username = session('username');
            $user = User::where('username', $username)->first();
            if ($user) {
                $user->nom = $request->nom;
                $user->prenom =  $request->prenom;
                $user->username = $request->username;
                $user->email = $request->email;
                if (empty($request->password)) {
                    $user->password = $user->password;
                }else{
                    $user->password = Hash::make( $request->password);
                }

                $user->created_by = 1;
                $user->updated_by = 1;

                $user->save();
            }

            return redirect()->route('auth.profile')->with('success', 'Vos informations sont mise à jour avec succès.');
        }

    }
