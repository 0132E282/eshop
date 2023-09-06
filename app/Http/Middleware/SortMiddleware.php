<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SortMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $req, Closure $next): Response
    {
        $sort = [
            'enabled' => false,
            'columns' => '',
            'type' => '',
        ];
        if (isset($_GET['_sort'])) {
            $sort = [
                'enabled' => true,
                'columns' => $req->input('columns') ?? '',
                'type' => strtolower($req->input('type')) != 'asc' &&  strtolower($req->input('type'))  != 'desc' ?  'desc' : $req->input('type'),
            ];
            session(['sort' => $sort]);
        }
        return $next($req);
    }
}
