<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{

    //protected $adminService;

    // Injecter AdminService à l'aide du constructeur
    //public function __construct(AdminService $adminService) {
        //$this->adminService = $adminService;
    //}

    public function dashboard(){

        return view('admin.dashboard');
    }

    /**
     * Afficher le formulaire de création d'une nouvelle ressource.
     */
    public function create()
    {
        return view('admin.login');
    }

    /**
     * Stockez une ressource nouvellement créée dans le stockage.
     */
    public function store(Request $request)
    {
        $rule =  [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $message = [
            'email.required'    => "Veuillez entrer votre e-mail",
            'email.email'       => "L'e-mail n'est pas valide",
            'password.required' => 'Veuillez entrer votre mot de passe'
        ];

        $validator = Validator::make($request->all(), $rule, $message);

        if ($validator->passes()) {
            # code...
            if (Auth::guard('admin')->attempt(
                [
                    'email' => $request->email,
                    'password' => $request->password,
                ]
            )) {
                # Mémoriser l'e-mail et le mot de passe de l'administrateur
                if (!empty($request['remember'])) {
                    # code...
                    setcookie('email',$request['email'],time()+3600);
                    setcookie('password',$request['password'],time()+3600);
                } else {
                    # code...
                    setcookie('email');
                    setcookie('password','');
                }

                return redirect()->route('admin.dashboard');

            } else {
                # code...
                return redirect()->route('admin.login')
                ->withInput($request->only('email'))
                ->with('error', 'E-mail/mot de passe est incorrect.');
            }
        } else {
            # code...
            return redirect()->route('admin.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
    }

    /**
    * Supprimer la ressource spécifiée du stockage.
    */
    public function destroy(Admin $admin)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
