<?php

namespace  lVinokurov\RusGuard;

class RusGuard
{
  protected $login;
  protected $password;
  protected $url;

  public function __construct()
  {
    $this->login = config('rusguard.login');
    $this->password = config('rusguard.password');
    $this->url = config('rusguard.url');
  }

  public function buildClient()
  {
    
  }

}
