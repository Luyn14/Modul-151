<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Crewrole;
use App\Models\User;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $crewrolefid = auth()->user()->crewrolefid;

        [
            $user = auth()->user(),
            'crewrole' => Crewrole::find($crewrolefid)
        ];

        if ("Admiral" == $user->crewrole->name) {
            return $next($request);
        } else {
            return redirect('/home');
        }
    }
}
