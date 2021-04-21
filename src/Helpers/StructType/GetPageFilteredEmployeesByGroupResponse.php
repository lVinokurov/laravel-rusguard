<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPageFilteredEmployeesByGroupResponse StructType
 * @subpackage Structs
 */
class GetPageFilteredEmployeesByGroupResponse extends AbstractStructBase
{
    /**
     * The GetPageFilteredEmployeesByGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeesInfoData|null
     */
    protected ?\StructType\EmployeesInfoData $GetPageFilteredEmployeesByGroupResult = null;
    /**
     * Constructor method for GetPageFilteredEmployeesByGroupResponse
     * @uses GetPageFilteredEmployeesByGroupResponse::setGetPageFilteredEmployeesByGroupResult()
     * @param \StructType\EmployeesInfoData $getPageFilteredEmployeesByGroupResult
     */
    public function __construct(?\StructType\EmployeesInfoData $getPageFilteredEmployeesByGroupResult = null)
    {
        $this
            ->setGetPageFilteredEmployeesByGroupResult($getPageFilteredEmployeesByGroupResult);
    }
    /**
     * Get GetPageFilteredEmployeesByGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeesInfoData|null
     */
    public function getGetPageFilteredEmployeesByGroupResult(): ?\StructType\EmployeesInfoData
    {
        return isset($this->GetPageFilteredEmployeesByGroupResult) ? $this->GetPageFilteredEmployeesByGroupResult : null;
    }
    /**
     * Set GetPageFilteredEmployeesByGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmployeesInfoData $getPageFilteredEmployeesByGroupResult
     * @return \StructType\GetPageFilteredEmployeesByGroupResponse
     */
    public function setGetPageFilteredEmployeesByGroupResult(?\StructType\EmployeesInfoData $getPageFilteredEmployeesByGroupResult = null): self
    {
        if (is_null($getPageFilteredEmployeesByGroupResult) || (is_array($getPageFilteredEmployeesByGroupResult) && empty($getPageFilteredEmployeesByGroupResult))) {
            unset($this->GetPageFilteredEmployeesByGroupResult);
        } else {
            $this->GetPageFilteredEmployeesByGroupResult = $getPageFilteredEmployeesByGroupResult;
        }
        
        return $this;
    }
}
