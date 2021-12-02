<?php
    namespace SamirEltabal\CmsSystem;

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\ServiceProvider;

    class CmsSystemServiceProvider extends ServiceProvider {

        public function boot() {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
            $this->registerRoutes();
        }

        public  function register() {
            $this->mergeConfigFrom(__DIR__.'/config/config.php', 'cms');
        }

        protected function registerRoutes() {
            Route::group($this->routeConfiguration(), function () {
                $this->loadRoutesFrom(__DIR__.'/./Routes/Routes.php');
            });
        }

        protected function routeConfiguration () {
            return [
                'prefix' => config('cms.prefix'),
                'middleware' => config('cms.middleware')
            ];
        }
    }
