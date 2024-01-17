<?php

namespace App\Http\Controllers;

use App\Models\User;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }
    public function home(Request $request) : View
    {
        $user = Auth::user();
        
        return view('home.index');
    }

    public function updatePassword(Request $request) : RedirectResponse
    {
        $user = Auth::user();
        $validated = $request -> validate([
            'current_password' => [
                'required',
                'string',
                function (string $attribute, mixed $value, Closure $fails) use ($user){
                    if(! Hash::check($value, $user->password)){
                        $fails("Le :attribute est erroné.");
                    }
                }
            ],
            'newpass' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $user ->update([
            'password' => Hash::make($validated['newpass'])
        ]);
        return redirect() -> route('home')->withStatus('Mot de passe modifié');
    }

    public function profile(Request $request) : View
    {
        $user = Auth::user();
        return view('home.profil', [
            'user' => $user,
        ]);
    }

    public function tableajax(Request $request, $modelName) : View
    {
        if (class_exists($modelName)) {
            $traitement = explode('\\', $modelName);
            $model = strtolower(end($traitement)).'s';
            $columns = Schema::getColumnListing($model);
            $modelDatas = $modelName::all();
            return view('home.utilisateur', [
                'modelDatas' => $modelDatas,
                'columns' => $columns,
                'modelname' =>$modelName,
            ]);
        }else{
            $message = "Le model $modelName n'existe pas";
            return view('home.error', [
                'message' => $message,
            ]);
        } 
    }
}
