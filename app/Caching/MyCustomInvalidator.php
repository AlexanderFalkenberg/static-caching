<?php

namespace App\Caching;

use Statamic\StaticCaching\Cacher;
use Statamic\StaticCaching\DefaultInvalidator;

class MyCustomInvalidator extends DefaultInvalidator
{
    public function __construct(Cacher $cacher, $rules = [])
    {
        dd("Rules", $rules);

        parent::__construct($cacher, $rules);
    }

    public function invalidate($item)
    {
        dd($this->rules);
    }
}
