<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomeVerifyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (is_null($request->user()->email_verify_at)) {


            if ($request->user()->getTable() === 'admins') {
                return redirect()->route('admin.notice');
            } else {
            }
        }
        return $next($request);
    }
}
