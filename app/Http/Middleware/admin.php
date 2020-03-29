<?php

namespace App\Http\Middleware;

use Closure;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { // Dans la méthode handle on récupère l’utilisateur en cours
        $user = $request->user();
        if ($user && $user->role === 'admin') { // si le user est identifié en tant qu'admin alors
            return $next($request);             //il sera redirigé vers les pages attribué à son rôle
        }
        return redirect()->route('home');
    }

}
