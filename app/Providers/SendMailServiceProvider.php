<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class SendMailServiceProvider extends ServiceProvider
{

    /* The event listener mappings for the application. */
    protected $listen = [];

    /* Register any events for your application. */
    public function boot()
    {
        parent::boot();
    }

}
