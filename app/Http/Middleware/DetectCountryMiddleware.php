<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class DetectCountryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get country from Cloudflare header or null
        // The CF-IPCountry header is automatically added by Cloudflare when the application is behind Cloudflare's proxy service
        // Example: 'CM', 'US', 'GB', 'FR', etc.
        $country = $request->header('CF-IPCountry', null);

        Log::info('Country detected', [
            'country' => $country
        ]);

        // Store for current request
        $request->attributes->set('userCountry', strtoupper($country));

        return $next($request);
    }
}
