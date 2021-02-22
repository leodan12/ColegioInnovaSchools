<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class EsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        
        $user=Auth::user();  
 
        if($user->esAdmin()){
         return view('inicioProfesores');
         //return redirect()->route('admin');
        
         
         }
         elseif($user->esProf()){
            return redirect('/profesor2');
         }
         elseif($user->esAlum()){
            return redirect('/alumno2');
         }
         else return  route('logout') ;
    return $next($request);
    }
}
