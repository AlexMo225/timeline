<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        // Afficher la vue d'édition du profil avec les données de l'utilisateur
        return view('profile.edit', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        // Valider et mettre à jour le profil de l'utilisateur
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            // Ajoutez d'autres validations si nécessaire
        ]);

        $user = Auth::user();
        $user->update($request->only(['name', 'email']));
        // Ajoutez d'autres champs à mettre à jour si nécessaire

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
    }
}
