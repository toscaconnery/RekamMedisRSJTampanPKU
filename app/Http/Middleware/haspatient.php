<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class haspatient
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
        if(!Session::has('id_pasien')) {
            $request->session()->put('pasien_belum_dipilih', 1);
            return redirect('/');
        }
        return $next($request);
    }
}
