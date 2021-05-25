<?php

namespace lVinokurov\RusGuard;

use ArrayType\ArrayOfguid;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use ServiceType\Add;
use ServiceType\Assign;
use ServiceType\Lock;
use ServiceType\Set;
use StructType\AddAcsEmployeeGroup;
use StructType\AssignAcsKeyForEmployee;
use StructType\LockAcsEmployee;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class RusGuard
{
    protected $options;
    protected $logger;

    public function __construct()
    {
        $this->buildClient();
        $this->logger = Log::stack(config('rusguard.log_stack'));
    }

    public function buildClient()
    {
        if (!$this->options)
            $this->setOptions();

        return $this;
    }

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

        return;
    }

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
     * @param ...$args
     */
    public function createGroup(array $args)
    {
        $add = new \lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase($this->options);

        $structure = $this->setStructure(new AddAcsEmployeeGroup(), $args);

        $result = $add->AddAcsEmployeeGroup($structure);

        if (!$result) {
            $this->logger->critical($add->getLastError())->getMessage();
            throw new \Exception(current($add->getLastError())->getMessage());
        }

        return $add->getResult()->getAddAcsEmployeeGroupResult();
    }

    /**
     * @param ...$args
     *
     * fisrt_name - required
     * last_name - required5
     * middle_name
     *
     *
     */
    public function createUser($group_id, array $args)
    {
        $add = new Add($this->options);

        $structure = $this->setStructure(new \StructType\AcsEmployeeSaveData(), $args);
        $result = $add->AddAcsEmployee(
            new \StructType\AddAcsEmployee($group_id, $structure)
        );

        if (!$result) {
            $this->logger->critical($add->getLastError())->getMessage();
            throw new \Exception(current($add->getLastError())->getMessage());
        }

        return $add->getResult()->getAddAcsEmployeeResult();
    }

    public function lockUser(array $args)
    {
        $lock = new Lock($this->options);
        $args['ids'] = new ArrayOfguid(is_array($args['ids']) ? $args['ids'] : [$args['ids']]);

        $structure = $this->setStructure(new LockAcsEmployee(), $args);

        $result = $lock->LockAcsEmployee($structure);

        if (!$result) {
            $this->logger->critical($lock->getLastError())->getMessage();
            throw new \Exception(current($lock->getLastError())->getMessage());
        }

        return true;
    }

    public function createUserPhoto(array $args)
    {
        $set = new Set($this->options);
        $structure = $this->setStructure(new \StructType\SetAcsEmployeePhoto(), $args);

        $result = $set->SetAcsEmployeePhoto($structure);

        if (!$result) {
            $this->logger->critical($set->getLastError())->getMessage();
            throw new \Exception(current($set->getLastError())->getMessage());
        }

        return true;
    }

    protected function addKeyForUser(array $args)
    {
        $assign = new Assign($this->options);
        $structure = $this->setStructure(new AssignAcsKeyForEmployee(), $args);

        $result = $assign->AssignAcsKeyForEmployee($structure);

        if (!$result) {
            $this->logger->critical($assign->getLastError())->getMessage();
            throw new \Exception(current($assign->getLastError())->getMessage());
        }

        return true;
    }

}
