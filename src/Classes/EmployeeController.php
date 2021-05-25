<?php

namespace lVinokurov\RusGuard\Classes;

use ArrayType\ArrayOfguid;
use lVinokurov\RusGuard\RusGuard;
use ServiceType\Add;
use ServiceType\Assign;
use ServiceType\Lock;
use ServiceType\Set;
use StructType\AcsKeySaveData;
use StructType\AssignAcsKeyForEmployee;
use StructType\LockAcsEmployee;

class EmployeeController extends RusGuard
{
    public function createEmployee($group_id, array $args)
    {
        $add = new Add($this->options);

        $structure = $this->setStructure(new \StructType\AcsEmployeeSaveData(), $args);
        $result = $add->AddAcsEmployee(
            new \StructType\AddAcsEmployee($group_id, $structure)
        );

        if (!$result) {
            $this->logger->critical($add->getLastError()->getMessage());
            throw new \Exception(current($add->getLastError())->getMessage());
        }

        return $add->getResult()->getAddAcsEmployeeResult();
    }

    public function lockEmployee(array $args)
    {
        $lock = new Lock($this->options);
        $args['ids'] = new ArrayOfguid(is_array($args['ids']) ? $args['ids'] : [$args['ids']]);

        $structure = $this->setStructure(new LockAcsEmployee(), $args);

        $result = $lock->LockAcsEmployee($structure);

        if (!$result) {
            $this->logger->critical($lock->getLastError()->getMessage());
            throw new \Exception(current($lock->getLastError())->getMessage());
        }

        return true;
    }

    public function createEmployeePhoto(array $args)
    {
        $set = new Set($this->options);
        $structure = $this->setStructure(new \StructType\SetAcsEmployeePhoto(), $args);

        $result = $set->SetAcsEmployeePhoto($structure);

        if (!$result) {
            $this->logger->critical($set->getLastError()->getMessage());
            throw new \Exception(current($set->getLastError())->getMessage());
        }

        return true;
    }

    public function addKeyForEmployee(array $args)
    {
        $assign = new Assign($this->options);

        if (isset($args['key_data']))
            $args['key_data'] = $this->setStructure(new AcsKeySaveData(), $args['key_data']);

        $structure = $this->setStructure(new AssignAcsKeyForEmployee(), $args);
        $result = $assign->AssignAcsKeyForEmployee($structure);

        if (!$result) {
            $this->logger->critical($assign->getLastError()->getMessage());
            throw new \Exception(current($assign->getLastError())->getMessage());
        }

        return true;
    }
}