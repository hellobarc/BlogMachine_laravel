<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */



    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->menuItems = ["Home", "About Us", "Contact"];
        $this->category =  Category::all();
        $this->theme_name = env('SITE_THEME');

        view()->composer('theme.'.$this->theme_name.'.master', function($view) {
            $view->with(['contents' =>  $this->category]);
        });
    }
}
