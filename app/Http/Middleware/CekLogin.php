<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {

        $tokenUser = $request->session()->get('log_access');
        if($tokenUser == NULL || $tokenUser == ""){
            Session::flush();
            return redirect('logadminalexander')->with('error','Anda Perlu Login Untuk Melanjutkan.');
        }else{
            redirect('admin/dashboard');
            return $next($request);
        }
    }
}
