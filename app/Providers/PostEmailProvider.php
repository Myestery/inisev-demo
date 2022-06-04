<?php

namespace App\Providers;

use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;
use App\Services\PostEmailNotifierService;
use App\Repositories\SubscriptionRepository;

class PostEmailProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostEmailNotifierService::class, function ($app) {
            return new PostEmailNotifierService(
                $app->make(SubscriptionRepository::class),
                $app->make(PostRepository::class)
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
