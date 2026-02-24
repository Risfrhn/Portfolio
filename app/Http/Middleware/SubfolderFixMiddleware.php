<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubfolderFixMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Hanya proses response sukses yang berupa HTML
        if (!$response->isSuccessful()) {
            return $response;
        }

        $contentType = $response->headers->get('Content-Type');
        if (!str_contains($contentType, 'text/html')) {
            return $response;
        }

        // Deteksi subfolder dari APP_URL secara dinamis
        $subfolder = rtrim(parse_url(config('app.url'), PHP_URL_PATH) ?? '', '/');

        // Hanya lakukan penggantian jika ada subfolder (production)
        if (empty($subfolder)) {
            return $response;
        }

        $content = $response->getContent();

        // Ganti data-update-uri agar Livewire AJAX mengarah ke path yang benar
        $content = str_replace(
            'data-update-uri="/livewire/update"',
            'data-update-uri="' . $subfolder . '/livewire/update"',
            $content
        );

        $content = str_replace(
            'data-update-uri="/livewire/livewire.js/update"',
            'data-update-uri="' . $subfolder . '/livewire/update"',
            $content
        );

        $response->setContent($content);

        return $response;
    }
}
