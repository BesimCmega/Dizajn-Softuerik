<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $allowedRole)
    {
        // Check if the user has the specified role
        $user = $request->user();
        if ($user && $user->roleId == $allowedRole) {
            return $next($request);
        }

        // Redirect or handle unauthorized access
        abort(403, 'Unauthorized.');
    
    }
}
