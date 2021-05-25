<?php


namespace lVinokurov\RusGuard\Classes;

use lVinokurov\RusGuard\RusGuard;
use ServiceType\Add;
use ServiceType\Set;
use StructType\AddAcsEmployeeGroup;
use StructType\SetUseEmployeeGroupParentAccessLevel;

class GroupController extends RusGuard
{
    public function createGroup(array $args)
    {
        $add = new Add($this->options);

        $structure = $this->setStructure(new AddAcsEmployeeGroup(), $args);

        $result = $add->AddAcsEmployeeGroup($structure);

        if (!$result) {
            $this->logger->critical($add->getLastError()->getMessage());
            throw new \Exception(current($add->getLastError())->getMessage());
        }

        return $add->getResult()->getAddAcsEmployeeGroupResult();
    }

    public function SetUseEmployeeGroupParentAccessLevel(array $args)
    {
        $set = new Set($this->options);

        $structure = $this->setStructure(new SetUseEmployeeGroupParentAccessLevel(), $args);
        $result = $set->SetUseEmployeeGroupParentAccessLevel($structure);

        if (!$result) {
            $this->logger->critical($set->getLastError()->getMessage());
            throw new \Exception(current($set->getLastError())->getMessage());
        }

        return true;
    }
}