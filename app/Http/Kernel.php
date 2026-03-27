<?php
protected $routeMiddleware = [
    // ...
    'cert_api_token' => \App\Http\Middleware\CheckSimpleApiToken::class,
];
