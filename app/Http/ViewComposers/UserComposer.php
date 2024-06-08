<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class UserComposer
{
    public function compose(View $view)
    {
        // Obtenez l'utilisateur connecté (enseignant ou ATOS)
        $user = Auth::guard('admin')->user() ?? Auth::guard('atos')->user();

        // Partagez les informations avec la vue
        $view->with('currentUser', $user);
    }
}
