<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeesForVehicleResponse StructType
 * @subpackage Structs
 */
class GetEmployeesForVehicleResponse extends AbstractStructBase
{
    /**
     * The GetEmployeesForVehicleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeFull|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeFull $GetEmployeesForVehicleResult = null;
    /**
     * Constructor method for GetEmployeesForVehicleResponse
     * @uses GetEmployeesForVehicleResponse::setGetEmployeesForVehicleResult()
     * @param \ArrayType\ArrayOfAcsEmployeeFull $getEmployeesForVehicleResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeFull $getEmployeesForVehicleResult = null)
    {
        $this
            ->setGetEmployeesForVehicleResult($getEmployeesForVehicleResult);
    }
    /**
     * Get GetEmployeesForVehicleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeFull|null
     */
    public function getGetEmployeesForVehicleResult(): ?\ArrayType\ArrayOfAcsEmployeeFull
    {
        return isset($this->GetEmployeesForVehicleResult) ? $this->GetEmployeesForVehicleResult : null;
    }
    /**
     * Set GetEmployeesForVehicleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeFull $getEmployeesForVehicleResult
     * @return \StructType\GetEmployeesForVehicleResponse
     */
    public function setGetEmployeesForVehicleResult(?\ArrayType\ArrayOfAcsEmployeeFull $getEmployeesForVehicleResult = null): self
    {
        if (is_null($getEmployeesForVehicleResult) || (is_array($getEmployeesForVehicleResult) && empty($getEmployeesForVehicleResult))) {
            unset($this->GetEmployeesForVehicleResult);
        } else {
            $this->GetEmployeesForVehicleResult = $getEmployeesForVehicleResult;
        }
        
        return $this;
    }
}
