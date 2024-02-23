<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Illuminate\Support\Facades\Session;


class StudentGate
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

        if (Auth::check()) {
            $research_project_data_ = DB::table('research_project')
                ->where('student_reference', Auth::user()->email)
                ->first();

            if ($research_project_data_ != NULL) {
                if ($research_project_data_->supervisor_email != '-')
                    return $next($request);
                else
                    return redirect('/dashboard');
            } else {
                // Session::flush();

                return redirect()->back();
            }
        } else {
            return redirect("/");
        }
    }
}
