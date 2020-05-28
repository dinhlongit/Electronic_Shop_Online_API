<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class BackendProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
          $this->app->bind(
            \App\Repositories\Post\UserInterface::class,
              \App\Repositories\Post\UserEloquentRepository::class
          );
          $this->app->bind(
            \App\Repositories\Category\CategoryRepositoryInterface::class,
            \App\Repositories\Category\CategoryEloquentRepository::class
        );
          $this->app->bind(
              \App\Repositories\Product\ProductRepositoryInterface::class,
              \App\Repositories\Product\ProductEloquentRepository::class
          );
        $this->app->bind(
            \App\Repositories\Producer\ProducerRepositoryInterface::class,
            \App\Repositories\Producer\ProducerEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\User\UserRepositoryInterface::class,
            \App\Repositories\User\UserEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Promotion\PromotionRepositoryInterface::class,
            \App\Repositories\Promotion\PromotionEloquentRepository::class
        );


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
