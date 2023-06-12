<?php

namespace Nonsapiens\FakerNews;

use Illuminate\Support\Facades\Facade;

class News extends Facade
{

    protected static function getFacadeAccessor()
    {
        return \Nonsapiens\FakerNews\Faker\News::class;
    }

}