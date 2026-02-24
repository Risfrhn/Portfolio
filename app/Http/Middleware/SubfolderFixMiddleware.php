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

        $content = $response->getContent();

        // Cari data-update-uri yang salah (tanpa prefix subfolder) dan ganti ke yang benar
        // Livewire secara default sering menghasilkan /livewire/update
        $content = str_replace(
            'data-update-uri="/livewire/update"',
            'data-update-uri="/app-portfolio/livewire/update"',
            $content
        );

        // Jika ada variasi lain seperti /livewire/livewire.js/update
        $content = str_replace(
            'data-update-uri="/livewire/livewire.js/update"',
            'data-update-uri="/app-portfolio/livewire/update"',
            $content
        );

        $response->setContent($content);

        return $response;
    }
}
