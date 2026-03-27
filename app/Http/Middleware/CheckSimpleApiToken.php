<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSimpleApiToken
{
    public function handle(Request $request, Closure $next)
    {
        $auth = $request->header('Authorization', '');
        if (!str_starts_with($auth, 'Bearer ')) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $token = substr($auth, 7);

        // Read from .env directly (avoids extra config wiring)
        $expected = env('CERT_PAGE_API_TOKEN');
        if (!$expected || !hash_equals($expected, $token)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
