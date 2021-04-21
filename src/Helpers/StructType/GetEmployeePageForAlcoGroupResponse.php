<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeePageForAlcoGroupResponse StructType
 * @subpackage Structs
 */
class GetEmployeePageForAlcoGroupResponse extends AbstractStructBase
{
    /**
     * The GetEmployeePageForAlcoGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeesInfoData|null
     */
    protected ?\StructType\EmployeesInfoData $GetEmployeePageForAlcoGroupResult = null;
    /**
     * Constructor method for GetEmployeePageForAlcoGroupResponse
     * @uses GetEmployeePageForAlcoGroupResponse::setGetEmployeePageForAlcoGroupResult()
     * @param \StructType\EmployeesInfoData $getEmployeePageForAlcoGroupResult
     */
    public function __construct(?\StructType\EmployeesInfoData $getEmployeePageForAlcoGroupResult = null)
    {
        $this
            ->setGetEmployeePageForAlcoGroupResult($getEmployeePageForAlcoGroupResult);
    }
    /**
     * Get GetEmployeePageForAlcoGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeesInfoData|null
     */
    public function getGetEmployeePageForAlcoGroupResult(): ?\StructType\EmployeesInfoData
    {
        return isset($this->GetEmployeePageForAlcoGroupResult) ? $this->GetEmployeePageForAlcoGroupResult : null;
    }
    /**
     * Set GetEmployeePageForAlcoGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmployeesInfoData $getEmployeePageForAlcoGroupResult
     * @return \StructType\GetEmployeePageForAlcoGroupResponse
     */
    public function setGetEmployeePageForAlcoGroupResult(?\StructType\EmployeesInfoData $getEmployeePageForAlcoGroupResult = null): self
    {
        if (is_null($getEmployeePageForAlcoGroupResult) || (is_array($getEmployeePageForAlcoGroupResult) && empty($getEmployeePageForAlcoGroupResult))) {
            unset($this->GetEmployeePageForAlcoGroupResult);
        } else {
            $this->GetEmployeePageForAlcoGroupResult = $getEmployeePageForAlcoGroupResult;
        }
        
        return $this;
    }
}
