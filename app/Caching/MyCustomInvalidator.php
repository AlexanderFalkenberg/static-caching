<?php

namespace App\Caching;

use Statamic\StaticCaching\DefaultInvalidator;

class MyCustomInvalidator extends DefaultInvalidator
{
    public function invalidate($item)
    {
        // flushes everything by setting the invalidation rules to 'all'
        dd($this->rules);
    }
}
