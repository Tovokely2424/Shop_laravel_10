<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this -> middleware('guest');
    }
    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'between:5,100'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required']
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        Auth::login($user);
        return redirect()->route('home')->with('status', 'Inscription réussie !');
    }

    //Gestion requete ajax
    public function saveWithAjax(Request $request )
    {
        $userData = $request -> all();
        $validator = Validator::make($userData, [
            'name'=>'required|max:50',
            'email'=>'required|email|unique:users|max:100',
            'password'=>'required|confirmed|min:6|max:50',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
        
            // Vérification des erreurs pour chaque champ
            $errorFields = [];
            if ($errors->has('name')) {
                $errorFields['name'] = $errors->get('name');
            }
            if ($errors->has('email')) {
                $errorFields['email'] = $errors->get('email');
            }
            if ($errors->has('password')) {
                $errorFields['password'] = $errors->get('password');
            }
        
            return response()->json([
                'status' => 400,
                'messages' => $errorFields
            ]);
        }else{
            $user = User::create([
                'name' => $request -> name,
                'email' => $request ->email,
                'password' => Hash::make( $userData['password'])
            ]);
            if($user){
                return response() -> json([
                    'status' => 200,
                    'messages' => 'Enregistrement succès !'
                ]);
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => 'Erreur lors de l\'enregistrement de l\'utilisateur'
                ]);
            }
        }
    }

}