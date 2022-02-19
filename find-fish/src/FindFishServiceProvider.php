<?php
namespace Arifuzzaman\FindFish;

use Illuminate\Support\ServiceProvider;

class FindFishServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // dd('LaraTrackerServiceProvider');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

}
