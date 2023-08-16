<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Lang;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Validator::extend('persian', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[\p{Arabic} ]+$/u', $value);
        });

        Validator::replacer('persian', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, Lang::get('validation.persian'));
        });
    }
}
