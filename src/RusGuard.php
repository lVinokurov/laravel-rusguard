<?php

namespace  lVinokurov\RusGuard;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use ServiceType\Add;
use StructType\AddAcsEmployeeGroup;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class RusGuard
{
  protected $options;
  protected $logger;

  public function __construct()
  {
    $this->buildClient();
    $this->logger = Log::stack(['errors']);
  }

  public function buildClient()
  {
    if(!$this->options)
      $this->setOptions();

    return $this;
  }

  protected function setOptions()
  {
    $config_options = config('rusguard.options');

    foreach($config_options as $name => $val){
      $name_const = Str::upper('wsdl_'.$name);
      if(defined('WsdlToPhp\PackageBase\AbstractSoapClientBase::'.$name_const))
        $this->options['wsdl_'.$name] = $val;
    }
    // Добавление classmap
    $this->options['wsdl_classmap'] = \ClassMap::get();

    return;
  }

  /**
   * @param ...$args
   */
  public function createGroup($title, $group_id)
  {
    $add = new Add($this->options);

    $result = $add->AddAcsEmployeeGroup(
      (new AddAcsEmployeeGroup())
        ->setParentId($group_id)
        ->setName($title)
     );

    if(!$result)
      throw new \Exception($add->getLastError());

      return $add->getResult()->getAddAcsEmployeeGroupResult();
  }

  /**
   * @param ...$args
   *
   * fisrt_name - required
   * last_name - required
   * middle_name
   *
   *
   */
  public function createUser(
    $first_name,
    $last_name,
    $middle_name,
    $group_id
  )
  {
    $add = new Add($this->options);

    $result = $add->AddAcsEmployee(
      new \StructType\AddAcsEmployee($group_id,
        (new \StructType\AcsEmployeeSaveData())
          ->setFirstName($first_name)
          ->setLastName($last_name)
          ->setSecondName($middle_name)
      )
    );

    if(!$result)
      throw new \Exception($add->getLastError());

    return $add->getResult()->getAddAcsEmployeeResult();
  }
}
