<?php

namespace src;

use Faker\Generator;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider
{

    public function boot(Request $request, Router $router)
    {
        $configPath = realpath(dirname(__FILE__) . '/../config/fakernews.php');

        $this->publishes([$configPath => config_path('fakernews.php')], 'nonsapiens.fakernews');
        $this->mergeConfigFrom($configPath, 'fakernews');
    }

    public function register()
    {
        $this->app->bind(Generator::class, function ($app) {
            $faker = \Faker\Factory::create(config('app.faker_locale', 'en_US'));
            $faker->addProvider(new \Nonsapiens\FakerNews\Faker\News($faker));

            return $faker;
        });

    }

}