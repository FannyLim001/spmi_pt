<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
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
        if(!session()->has('LoggedUser') && ($request->path() !='/login')){
            return redirect('/login')->with('gagal','Anda harus login terlebih dahulu');
        }

        if(session()->has('LoggedUser') && ($request->path() == '/login') ){
            return back();
        }
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires: ',gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60)));
  
    }
}
