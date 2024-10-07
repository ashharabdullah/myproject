<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        \App\Models\Detail::class => \App\Policies\DetailPolicy::class,
    ];
    
}
