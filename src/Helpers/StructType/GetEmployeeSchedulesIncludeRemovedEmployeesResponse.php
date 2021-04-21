<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeSchedulesIncludeRemovedEmployeesResponse
 * StructType
 * @subpackage Structs
 */
class GetEmployeeSchedulesIncludeRemovedEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeSchedulesIncludeRemovedEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeSchedule|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeSchedule $GetEmployeeSchedulesIncludeRemovedEmployeesResult = null;
    /**
     * Constructor method for GetEmployeeSchedulesIncludeRemovedEmployeesResponse
     * @uses GetEmployeeSchedulesIncludeRemovedEmployeesResponse::setGetEmployeeSchedulesIncludeRemovedEmployeesResult()
     * @param \ArrayType\ArrayOfAcsEmployeeSchedule $getEmployeeSchedulesIncludeRemovedEmployeesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeSchedule $getEmployeeSchedulesIncludeRemovedEmployeesResult = null)
    {
        $this
            ->setGetEmployeeSchedulesIncludeRemovedEmployeesResult($getEmployeeSchedulesIncludeRemovedEmployeesResult);
    }
    /**
     * Get GetEmployeeSchedulesIncludeRemovedEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeSchedule|null
     */
    public function getGetEmployeeSchedulesIncludeRemovedEmployeesResult(): ?\ArrayType\ArrayOfAcsEmployeeSchedule
    {
        return isset($this->GetEmployeeSchedulesIncludeRemovedEmployeesResult) ? $this->GetEmployeeSchedulesIncludeRemovedEmployeesResult : null;
    }
    /**
     * Set GetEmployeeSchedulesIncludeRemovedEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeSchedule $getEmployeeSchedulesIncludeRemovedEmployeesResult
     * @return \StructType\GetEmployeeSchedulesIncludeRemovedEmployeesResponse
     */
    public function setGetEmployeeSchedulesIncludeRemovedEmployeesResult(?\ArrayType\ArrayOfAcsEmployeeSchedule $getEmployeeSchedulesIncludeRemovedEmployeesResult = null): self
    {
        if (is_null($getEmployeeSchedulesIncludeRemovedEmployeesResult) || (is_array($getEmployeeSchedulesIncludeRemovedEmployeesResult) && empty($getEmployeeSchedulesIncludeRemovedEmployeesResult))) {
            unset($this->GetEmployeeSchedulesIncludeRemovedEmployeesResult);
        } else {
            $this->GetEmployeeSchedulesIncludeRemovedEmployeesResult = $getEmployeeSchedulesIncludeRemovedEmployeesResult;
        }
        
        return $this;
    }
}
