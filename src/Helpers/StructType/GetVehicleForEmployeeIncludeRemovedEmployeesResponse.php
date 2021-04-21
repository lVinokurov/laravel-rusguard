<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehicleForEmployeeIncludeRemovedEmployeesResponse
 * StructType
 * @subpackage Structs
 */
class GetVehicleForEmployeeIncludeRemovedEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetVehicleForEmployeeIncludeRemovedEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsVehicle|null
     */
    protected ?\ArrayType\ArrayOfAcsVehicle $GetVehicleForEmployeeIncludeRemovedEmployeesResult = null;
    /**
     * Constructor method for GetVehicleForEmployeeIncludeRemovedEmployeesResponse
     * @uses GetVehicleForEmployeeIncludeRemovedEmployeesResponse::setGetVehicleForEmployeeIncludeRemovedEmployeesResult()
     * @param \ArrayType\ArrayOfAcsVehicle $getVehicleForEmployeeIncludeRemovedEmployeesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsVehicle $getVehicleForEmployeeIncludeRemovedEmployeesResult = null)
    {
        $this
            ->setGetVehicleForEmployeeIncludeRemovedEmployeesResult($getVehicleForEmployeeIncludeRemovedEmployeesResult);
    }
    /**
     * Get GetVehicleForEmployeeIncludeRemovedEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsVehicle|null
     */
    public function getGetVehicleForEmployeeIncludeRemovedEmployeesResult(): ?\ArrayType\ArrayOfAcsVehicle
    {
        return isset($this->GetVehicleForEmployeeIncludeRemovedEmployeesResult) ? $this->GetVehicleForEmployeeIncludeRemovedEmployeesResult : null;
    }
    /**
     * Set GetVehicleForEmployeeIncludeRemovedEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsVehicle $getVehicleForEmployeeIncludeRemovedEmployeesResult
     * @return \StructType\GetVehicleForEmployeeIncludeRemovedEmployeesResponse
     */
    public function setGetVehicleForEmployeeIncludeRemovedEmployeesResult(?\ArrayType\ArrayOfAcsVehicle $getVehicleForEmployeeIncludeRemovedEmployeesResult = null): self
    {
        if (is_null($getVehicleForEmployeeIncludeRemovedEmployeesResult) || (is_array($getVehicleForEmployeeIncludeRemovedEmployeesResult) && empty($getVehicleForEmployeeIncludeRemovedEmployeesResult))) {
            unset($this->GetVehicleForEmployeeIncludeRemovedEmployeesResult);
        } else {
            $this->GetVehicleForEmployeeIncludeRemovedEmployeesResult = $getVehicleForEmployeeIncludeRemovedEmployeesResult;
        }
        
        return $this;
    }
}
