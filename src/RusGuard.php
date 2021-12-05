<?php

namespace lVinokurov\RusGuard;

use ArrayType\ArrayOfguid;
use ArrayType\ArrayOfLogMsgSubType;
use ArrayType\ArrayOfLogMsgType;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use lVinokurov\RusGuard\Dto\Employee\CreateEmployeeDto;
use lVinokurov\RusGuard\Dto\Events\GetEventsDto;
use lVinokurov\RusGuard\Dto\Group\CreateGroupDto;
use ServiceType\Add;
use ServiceType\Assign;
use ServiceType\Get;
use ServiceType\Lock;
use ServiceType\Set;
use StructType\AcsEmployeeGroup;
use StructType\AcsEmployeeSlim;
use StructType\AcsKeySaveData;
use StructType\AddAcsEmployeeGroup;
use StructType\AssignAcsKeyForEmployee;
use StructType\GetEvents;
use StructType\GetEventsByDeviceIDs;
use StructType\GetLogMessageSubtypes;
use StructType\GetLogMessageTypes;
use StructType\GetSwitchedOffLogMessageSubtypesOfWorkplace;
use StructType\LockAcsEmployee;
use StructType\SetUseEmployeeGroupParentAccessLevel;

class RusGuard
{
  protected $options;

  public function __construct()
  {
    $this->buildClient();
  }

  public function buildClient(): RusGuard
  {
    if (!$this->options)
      $this->setOptions();

    return $this;
  }

  /**
   * Установка начальных настроек
   */
  protected function setOptions()
  {
    $config_options = config('rusguard.options');

    foreach ($config_options as $name => $val) {
      $name_const = Str::upper('wsdl_' . $name);
      if (defined('WsdlToPhp\PackageBase\AbstractSoapClientBase::' . $name_const))
        $this->options['wsdl_' . $name] = $val;
    }
    // Добавление classmap
    $this->options['wsdl_classmap'] = \ClassMap::get();
  }

  /**
   * Создание структуры
   *
   * @param $object
   * @param array $args
   * @return mixed
   */
  protected function setStructure($object, array $args)
  {
    foreach ($args as $key => $val) {
      $method = 'set' . Str::studly($key);
      if (method_exists($object, $method)) {
        $object->$method($val);
      }
    }

    return $object;
  }

  /**
   * Создание работника
   *
   * @param CreateEmployeeDto $dto
   * @param string $group_id
   * @return AcsEmployeeSlim|null
   * @throws Exception
   */
  public function createEmployee(CreateEmployeeDto $dto, string $group_id)
  {
    $add = new Add($this->options);

    $structure = $this->setStructure(new \StructType\AcsEmployeeSaveData(), (array) $dto);
    $result = $add->AddAcsEmployee(
      new \StructType\AddAcsEmployee($group_id, $structure)
    );

    if (!$result) {
      throw new Exception($add->getLastError());
    }

    return $add->getResult()->getAddAcsEmployeeResult();
  }

  /**
   * Блокировка или разблокировка работника
   *
   * @param array $args
   * @return bool
   * @throws Exception
   */
  public function lockEmployee(array $args)
  {
    $lock = new Lock($this->options);
    $args['ids'] = new ArrayOfguid(is_array($args['ids']) ? $args['ids'] : [$args['ids']]);

    $structure = $this->setStructure(new LockAcsEmployee(), $args);

    $result = $lock->LockAcsEmployee($structure);

    if (!$result) {
      throw new Exception($lock->getLastError());
    }

    return true;
  }

  /**
   * Создание фото для работника
   *
   * @param array $args
   * @return bool
   * @throws Exception
   */
  public function createEmployeePhoto(array $args)
  {
    $set = new Set($this->options);
    $structure = $this->setStructure(new \StructType\SetAcsEmployeePhoto(), $args);

    $result = $set->SetAcsEmployeePhoto($structure);

    if (!$result) {
      throw new Exception($set->getLastError());
    }

    return true;
  }

  /**
   * Добавление ключа для работника
   *
   * @param array $args
   * @return bool
   * @throws Exception
   */
  public function addKeyForEmployee(array $args)
  {
    $assign = new Assign($this->options);

    if (isset($args['key_data']))
      $args['key_data'] = $this->setStructure(new AcsKeySaveData(), $args['key_data']);

    $structure = $this->setStructure(new AssignAcsKeyForEmployee(), $args);
    $result = $assign->AssignAcsKeyForEmployee($structure);

    if (!$result) {
      throw new Exception($assign->getLastError());
    }

    return true;
  }

  /**
   * Создание группы
   *
   * @param CreateGroupDto $dto
   * @return AcsEmployeeGroup|null
   * @throws Exception
   */
  public function createGroup(CreateGroupDto $dto)
  {
    $add = new Add($this->options);

    $structure = $this->setStructure(new AddAcsEmployeeGroup(), (array) $dto);

    $result = $add->AddAcsEmployeeGroup($structure);

    if (!$result) {
      throw new Exception($add->getLastError());
    }

    return $add->getResult()->getAddAcsEmployeeGroupResult();
  }

  /**
   * Установка галочки для группы наследовать права с родительской
   *
   * @param string $group_id
   * @param bool $is_use_parent_access_level
   * @return bool
   * @throws Exception
   */
  public function setUseEmployeeGroupParentAccessLevel(string $group_id, bool $is_use_parent_access_level)
  {
    $set = new Set($this->options);

    $args = [
      'employee_group_id' => $group_id,
      'is_use_parent_access_level' => $is_use_parent_access_level
    ];

    $structure = $this->setStructure(new SetUseEmployeeGroupParentAccessLevel(), $args);
    $result = $set->SetUseEmployeeGroupParentAccessLevel($structure);

    if (!$result) {
      throw new Exception($set->getLastError());
    }

    return true;
  }

  public function getEventsByDto(GetEventsDto $dto = null)
  {
    $get = new Get($this->options);

    $args = array_merge(
      (array) $dto,
      [
        'msgSubTypes' => $dto->subTypes ? new ArrayOfLogMsgSubType($dto->subTypes) : null
      ]
    );
    $structure = $this->setStructure(
      new GetEvents(),
      $args
    );
//    wovemaj970@govinput.com
    $result = $get->GetEvents($structure);

    if (!$result) {
      throw new Exception($get->getLastError());
    }

      return (array) $result->getGetEventsResult()->getMessages()->getLogMessage();
  }
}
