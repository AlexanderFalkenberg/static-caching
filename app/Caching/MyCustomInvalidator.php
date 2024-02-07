<?php

namespace App\Caching;

use Statamic\StaticCaching\DefaultInvalidator;

class MyCustomInvalidator extends DefaultInvalidator
{
    public function invalidate($item)
    {
        dd($this->rules);
    }
}
