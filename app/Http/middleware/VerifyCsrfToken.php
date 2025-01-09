<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    // Add your routes here that should be excluded from CSRF verification
    protected $except = [
        '/register',
        '/login',
    ];
}
