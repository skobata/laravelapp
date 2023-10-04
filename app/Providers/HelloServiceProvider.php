<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Http\Validators\HelloValidator;
use Illuminate\Support\Facades\Validator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Validator::extend('hello', function ($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
    }
}
