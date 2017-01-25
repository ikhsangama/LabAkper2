<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdmin
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @param  string|null  $guard
   * @return mixed
   */
    public function handle($request, Closure $next)
    {
      $user = $request->user();
      // dd($request);
      if ($user->role=='1') {
        $guard = 'admin';
        return $next($request);
      }
       return redirect ('/');
    }
}
