<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCheck
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
        if(!session()->has('LoggedAdmin') && ($request->path() !='/admin/login')){
            return redirect('/admin/login')->with('gagal','Anda harus login terlebih dahulu');
        }

        if(session()->has('LoggedAdmin') && ($request->path() == '/admin/login') ){
            return back();
        }
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires: ',gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60)));
    }
}
