<?php

namespace App\Caching;

use Statamic\StaticCaching\Cacher;
use Statamic\StaticCaching\DefaultInvalidator;

class MyCustomInvalidator extends DefaultInvalidator
{
   /*  public function __construct(Cacher $cacher, $rules = [])
    {
        parent::__construct($cacher, $rules);
    } */

    public function invalidate($item)
    {
        dd("Rules", $this->rules);
    }
}
