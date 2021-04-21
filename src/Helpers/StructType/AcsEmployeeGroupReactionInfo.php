<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeGroupReactionInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeGroupReactionInfo
 * @subpackage Structs
 */
class AcsEmployeeGroupReactionInfo extends AcsEmployeeGroup
{
    /**
     * The EmployeeGroups1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $EmployeeGroups1 = null;
    /**
     * The EmployeesFromGroupsGuids
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $EmployeesFromGroupsGuids = null;
    /**
     * The SelectedEmployeesGuids
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $SelectedEmployeesGuids = null;
    /**
     * Constructor method for AcsEmployeeGroupReactionInfo
     * @uses AcsEmployeeGroupReactionInfo::setEmployeeGroups1()
     * @uses AcsEmployeeGroupReactionInfo::setEmployeesFromGroupsGuids()
     * @uses AcsEmployeeGroupReactionInfo::setSelectedEmployeesGuids()
     * @param \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $employeeGroups1
     * @param \ArrayType\ArrayOfguid $employeesFromGroupsGuids
     * @param \ArrayType\ArrayOfguid $selectedEmployeesGuids
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $employeeGroups1 = null, ?\ArrayType\ArrayOfguid $employeesFromGroupsGuids = null, ?\ArrayType\ArrayOfguid $selectedEmployeesGuids = null)
    {
        $this
            ->setEmployeeGroups1($employeeGroups1)
            ->setEmployeesFromGroupsGuids($employeesFromGroupsGuids)
            ->setSelectedEmployeesGuids($selectedEmployeesGuids);
    }
    /**
     * Get EmployeeGroups1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo|null
     */
    public function getEmployeeGroups1(): ?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo
    {
        return isset($this->EmployeeGroups1) ? $this->EmployeeGroups1 : null;
    }
    /**
     * Set EmployeeGroups1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $employeeGroups1
     * @return \StructType\AcsEmployeeGroupReactionInfo
     */
    public function setEmployeeGroups1(?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $employeeGroups1 = null): self
    {
        if (is_null($employeeGroups1) || (is_array($employeeGroups1) && empty($employeeGroups1))) {
            unset($this->EmployeeGroups1);
        } else {
            $this->EmployeeGroups1 = $employeeGroups1;
        }
        
        return $this;
    }
    /**
     * Get EmployeesFromGroupsGuids value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getEmployeesFromGroupsGuids(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->EmployeesFromGroupsGuids) ? $this->EmployeesFromGroupsGuids : null;
    }
    /**
     * Set EmployeesFromGroupsGuids value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $employeesFromGroupsGuids
     * @return \StructType\AcsEmployeeGroupReactionInfo
     */
    public function setEmployeesFromGroupsGuids(?\ArrayType\ArrayOfguid $employeesFromGroupsGuids = null): self
    {
        if (is_null($employeesFromGroupsGuids) || (is_array($employeesFromGroupsGuids) && empty($employeesFromGroupsGuids))) {
            unset($this->EmployeesFromGroupsGuids);
        } else {
            $this->EmployeesFromGroupsGuids = $employeesFromGroupsGuids;
        }
        
        return $this;
    }
    /**
     * Get SelectedEmployeesGuids value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getSelectedEmployeesGuids(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->SelectedEmployeesGuids) ? $this->SelectedEmployeesGuids : null;
    }
    /**
     * Set SelectedEmployeesGuids value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $selectedEmployeesGuids
     * @return \StructType\AcsEmployeeGroupReactionInfo
     */
    public function setSelectedEmployeesGuids(?\ArrayType\ArrayOfguid $selectedEmployeesGuids = null): self
    {
        if (is_null($selectedEmployeesGuids) || (is_array($selectedEmployeesGuids) && empty($selectedEmployeesGuids))) {
            unset($this->SelectedEmployeesGuids);
        } else {
            $this->SelectedEmployeesGuids = $selectedEmployeesGuids;
        }
        
        return $this;
    }
}
