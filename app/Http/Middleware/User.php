<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use RealRashid\SweetAlert\Facades\Alert;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check()) {
            if (Auth::user()->is_admin == '0') {
                return $next($request);
            } elseif (Auth::user()->is_admin == '1') {
                Alert::error('Oops!', 'Access Denied');
                return redirect()->back();
            }
        } else {
            Alert::error('Oops!', 'Login your account');
            return redirect()->route('login');
        }
    }
}
