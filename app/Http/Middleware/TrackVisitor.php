<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Sla de bezoekersinformatie op
        Visitor::create([
            'url' => $request->url(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return $next($request);
    }
}
