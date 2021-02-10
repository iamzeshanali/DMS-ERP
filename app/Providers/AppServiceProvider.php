<?php

namespace App\Providers;

use App\AppCms;
use App\AppOrm;
use Dms\Core\ICms;
use Dms\Core\Persistence\Db\Mapping\IOrm;
use Illuminate\Support\ServiceProvider;

use App\Domain\Services\Persistence\ITodoItemRepository;
use App\Infrastructure\Persistence\DbTodoItemRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IOrm::class, AppOrm::class);
        $this->app->singleton(ICms::class, AppCms::class);
        // Bind your repositories here
        $this->app->singleton(ITodoItemRepository::class, DbTodoItemRepository::class);
    }
}
