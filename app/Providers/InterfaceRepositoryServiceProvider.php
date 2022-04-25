<?php

namespace App\Providers;

use App\Repositories\Interfaces\CurrentByTitleRepositoryInterface;
use App\Repositories\CurrentByTitleRepository;
use Illuminate\Support\ServiceProvider;

class InterfaceRepositoryServiceProvider extends ServiceProvider
{
    /* Register services. */
    public function register() {}

    /*  Bootstrap services. */
    public function boot()
    {

        $this->app->bind(CurrentByTitleRepositoryInterface::class, CurrentByTitleRepository::class);


    }


}
