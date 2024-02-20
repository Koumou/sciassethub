<?php

namespace App\Http\Middleware;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Crypt;
use Throwable;

use Closure;
use Illuminate\Http\Request;

class UpdateDatabaseBeforeSessionEnds
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
        return $next($request);
    }

    public function terminate($request, $response)
    {
        // Update database here

        if (Cookie::has('user_loged')) {

            User::where('email', Crypt::decryptString(Cookie::get('user_loged')))->update(['islogin' => '0']);
        }
    }
}
