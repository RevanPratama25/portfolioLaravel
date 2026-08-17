<?php

use App\Providers\AppServiceProvider;

return array_values(array_filter([
    AppServiceProvider::class,

    // Dev-only providers — loaded only when the package is installed.
    // These are in require-dev and excluded via dont-discover to prevent
    // "class not found" errors on Vercel (which runs composer install --no-dev).
    class_exists(\Laravel\Pail\PailServiceProvider::class) ? \Laravel\Pail\PailServiceProvider::class : null,
    class_exists(\Laravel\Pao\Laravel\ServiceProvider::class) ? \Laravel\Pao\Laravel\ServiceProvider::class : null,
    class_exists(\NunoMaduro\Collision\Adapters\Laravel\CollisionServiceProvider::class) ? \NunoMaduro\Collision\Adapters\Laravel\CollisionServiceProvider::class : null,
]));
