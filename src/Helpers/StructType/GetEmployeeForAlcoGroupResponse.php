<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeForAlcoGroupResponse StructType
 * @subpackage Structs
 */
class GetEmployeeForAlcoGroupResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeForAlcoGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeesInfoData|null
     */
    protected ?\StructType\EmployeesInfoData $GetEmployeeForAlcoGroupResult = null;
    /**
     * Constructor method for GetEmployeeForAlcoGroupResponse
     * @uses GetEmployeeForAlcoGroupResponse::setGetEmployeeForAlcoGroupResult()
     * @param \StructType\EmployeesInfoData $getEmployeeForAlcoGroupResult
     */
    public function __construct(?\StructType\EmployeesInfoData $getEmployeeForAlcoGroupResult = null)
    {
        $this
            ->setGetEmployeeForAlcoGroupResult($getEmployeeForAlcoGroupResult);
    }
    /**
     * Get GetEmployeeForAlcoGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeesInfoData|null
     */
    public function getGetEmployeeForAlcoGroupResult(): ?\StructType\EmployeesInfoData
    {
        return isset($this->GetEmployeeForAlcoGroupResult) ? $this->GetEmployeeForAlcoGroupResult : null;
    }
    /**
     * Set GetEmployeeForAlcoGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmployeesInfoData $getEmployeeForAlcoGroupResult
     * @return \StructType\GetEmployeeForAlcoGroupResponse
     */
    public function setGetEmployeeForAlcoGroupResult(?\StructType\EmployeesInfoData $getEmployeeForAlcoGroupResult = null): self
    {
        if (is_null($getEmployeeForAlcoGroupResult) || (is_array($getEmployeeForAlcoGroupResult) && empty($getEmployeeForAlcoGroupResult))) {
            unset($this->GetEmployeeForAlcoGroupResult);
        } else {
            $this->GetEmployeeForAlcoGroupResult = $getEmployeeForAlcoGroupResult;
        }
        
        return $this;
    }
}
