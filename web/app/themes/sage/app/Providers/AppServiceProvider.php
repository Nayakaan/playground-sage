<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\Card;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // W tej linijce mogę zarejestrować komponenty, które będą dostępne w widokach i nadac im aliasy
        Blade::component('card', Card::class);
        Blade::component('blog-section', \App\View\Components\BlogSection::class);
    }
}
