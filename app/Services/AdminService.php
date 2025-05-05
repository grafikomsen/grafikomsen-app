<?php

namespace App\Services\Admin;

use Illuminate\Support\Facades\Auth;

class AdminService {

    public function login($data){
        if (Auth::guard('admin')->attempt(
            [
                'email'     => $data['email'],
                'password'  => $data['password']
            ]
        )) {
            # Mémoriser l'e-mail et le mot de passe de l'administrateur
            if (!empty($data['remember'])) {
                # code...
                setcookie('email',$data['email'],time()+3600);
                setcookie('password',$data['password'],time()+3600);
            } else {
                # code...
                setcookie('email');
                setcookie('password','');
            }
            $loginStatus = 1;
        } else {
            $loginStatus = 0;
        }
        return $loginStatus;
    }
}
