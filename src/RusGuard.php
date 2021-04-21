<?php

namespace  lVinokurov\RusGuard;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

class RusGuard
{
  protected $options;

  public function __construct()
  {

  }

  public function buildClient()
  {
    $this->setOptions();

    return $this;
  }

  protected function setOptions()
  {
    $this->options = config('rusguard.options');

    foreach($this->options as $name => $val){
      dd($name);
    }
  }
}
