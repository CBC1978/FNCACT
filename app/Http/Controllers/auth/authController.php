<?php

    namespace App\Http\Controllers\auth;

    use App\Http\Requests\auth\formUser;
    use App\Models\Groupe;
    use App\Models\User;
    use Illuminate\Support\Facades\Hash;

    class authController
    {

        public function login()
        {
            return view('auth.login');

        }

        public function loginUser()
        {

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

//            $user->save();

//            return redirect()->route('user.home')->with('success', "L'utilisateur est ajouté.");
        }

        public function getFormUpdate($id)
        {
            $groupes = Groupe::all();
            $user = User::find(intval($id));
            $user->fk_groupe = $user->groupe;
            return view('auth.update', compact('user', 'groupes'));
        }

        public function home()
        {
            $users = User::all();

            $users->each(function ($user){
                $user->fk_groupe = $user->groupe;
            });
            return view('auth.home' , compact('users'));
        }

    }
