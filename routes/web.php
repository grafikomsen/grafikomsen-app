<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function(){
    // Afficher le formulaire de connexion
    Route::get('login',[DashboardController::class, 'create'])->name('admin.login');
    // Gérer la soumission du formulaire de connexion
    Route::post('login', [DashboardController::class, 'store'])->name('admin.login.request');

    // Authentification vers le tableau de bord
    Route::group(['middleware' => 'admin'], function() {
        // Le chemin du tableau de bord
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        // Mettre à jour l'itinéraire du mot de passe
        //Route::get('update-password', [DashboardController::class, 'edit'])->name('admin.update-password');
        // Vérifier l'itinéraire du mot de passe
        //Route::post('verify-password', [DashboardController::class, 'verifyPassword'])->name('admin.verify.password');
        // Update password Route
        //Route::post('update-password', [DashboardController::class, 'updatePasswordRequest'])->name('admin.update-passwrd.request');
        // Déconnexion de l'administrateur
        Route::get('logout', [DashboardController::class, 'destroy'])->name('admin.logout');
    });
});
