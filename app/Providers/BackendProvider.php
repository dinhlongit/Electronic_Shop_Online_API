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

        $this->app->bind(
            \App\Repositories\Order\OrderRepositoryInterface::class,
            \App\Repositories\Order\OrderEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Import\ImportRepositoryInterface::class,
            \App\Repositories\Import\ImportEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Supplier\SupplierRepositoryInterface::class,
            \App\Repositories\Supplier\SupplierEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Role\RoleRepositoryInterface::class,
            \App\Repositories\Role\RoleEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Review\ReviewRepositoryInterface::class,
            \App\Repositories\Review\ReviewEloquentRepository::class
        );


        $this->app->bind(
            \App\Repositories\ImportProduct\ImportProductRepositoryInterface::class,
            \App\Repositories\ImportProduct\ImportProductEloquentRepository::class
        );


        $this->app->bind(
            \App\Repositories\Address\AddressRepositoryInterface::class,
            \App\Repositories\Address\AddressEloquentRepository::class
        );


        $this->app->bind(
            \App\Repositories\OrderStatus\OrderStatusRepositoryInterface::class,
            \App\Repositories\OrderStatus\OrderStatusEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\ProductStatus\ProductStatuRepositoryInterface::class,
            \App\Repositories\ProductStatus\ProductStatusEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\PhotoArray\PhotoArrayRepositoryInterface::class,
            \App\Repositories\PhotoArray\PhotoArrayEloquentRepository::class
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
