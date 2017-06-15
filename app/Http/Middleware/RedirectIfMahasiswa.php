<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfMahasiswa
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
      if ($user) {
        if ($user->isMahasiswa()) {
         return $next($request);
        }
      }
      return redirect ('/');
    }
}
