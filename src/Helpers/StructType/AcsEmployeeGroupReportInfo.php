<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeGroupReportInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeGroupReportInfo
 * @subpackage Structs
 */
class AcsEmployeeGroupReportInfo extends AcsEmployeeGroup
{
    /**
     * The EmployeeGroups2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeGroupReportInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeGroupReportInfo $EmployeeGroups2 = null;
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
     * Constructor method for AcsEmployeeGroupReportInfo
     * @uses AcsEmployeeGroupReportInfo::setEmployeeGroups2()
     * @uses AcsEmployeeGroupReportInfo::setEmployeesFromGroupsGuids()
     * @uses AcsEmployeeGroupReportInfo::setSelectedEmployeesGuids()
     * @param \ArrayType\ArrayOfAcsEmployeeGroupReportInfo $employeeGroups2
     * @param \ArrayType\ArrayOfguid $employeesFromGroupsGuids
     * @param \ArrayType\ArrayOfguid $selectedEmployeesGuids
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeGroupReportInfo $employeeGroups2 = null, ?\ArrayType\ArrayOfguid $employeesFromGroupsGuids = null, ?\ArrayType\ArrayOfguid $selectedEmployeesGuids = null)
    {
        $this
            ->setEmployeeGroups2($employeeGroups2)
            ->setEmployeesFromGroupsGuids($employeesFromGroupsGuids)
            ->setSelectedEmployeesGuids($selectedEmployeesGuids);
    }
    /**
     * Get EmployeeGroups2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeGroupReportInfo|null
     */
    public function getEmployeeGroups2(): ?\ArrayType\ArrayOfAcsEmployeeGroupReportInfo
    {
        return isset($this->EmployeeGroups2) ? $this->EmployeeGroups2 : null;
    }
    /**
     * Set EmployeeGroups2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeGroupReportInfo $employeeGroups2
     * @return \StructType\AcsEmployeeGroupReportInfo
     */
    public function setEmployeeGroups2(?\ArrayType\ArrayOfAcsEmployeeGroupReportInfo $employeeGroups2 = null): self
    {
        if (is_null($employeeGroups2) || (is_array($employeeGroups2) && empty($employeeGroups2))) {
            unset($this->EmployeeGroups2);
        } else {
            $this->EmployeeGroups2 = $employeeGroups2;
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
     * @return \StructType\AcsEmployeeGroupReportInfo
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
     * @return \StructType\AcsEmployeeGroupReportInfo
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
