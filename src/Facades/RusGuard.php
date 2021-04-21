<?php

namespace lVinokurov\RusGuard\Facades;

use Illuminate\Support\Facades\Facade;

class RusGuard extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'rusguard';
  }
}
