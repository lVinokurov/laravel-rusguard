<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehicleForEmployeeResponse StructType
 * @subpackage Structs
 */
class GetVehicleForEmployeeResponse extends AbstractStructBase
{
    /**
     * The GetVehicleForEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsVehicle|null
     */
    protected ?\ArrayType\ArrayOfAcsVehicle $GetVehicleForEmployeeResult = null;
    /**
     * Constructor method for GetVehicleForEmployeeResponse
     * @uses GetVehicleForEmployeeResponse::setGetVehicleForEmployeeResult()
     * @param \ArrayType\ArrayOfAcsVehicle $getVehicleForEmployeeResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsVehicle $getVehicleForEmployeeResult = null)
    {
        $this
            ->setGetVehicleForEmployeeResult($getVehicleForEmployeeResult);
    }
    /**
     * Get GetVehicleForEmployeeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsVehicle|null
     */
    public function getGetVehicleForEmployeeResult(): ?\ArrayType\ArrayOfAcsVehicle
    {
        return isset($this->GetVehicleForEmployeeResult) ? $this->GetVehicleForEmployeeResult : null;
    }
    /**
     * Set GetVehicleForEmployeeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsVehicle $getVehicleForEmployeeResult
     * @return \StructType\GetVehicleForEmployeeResponse
     */
    public function setGetVehicleForEmployeeResult(?\ArrayType\ArrayOfAcsVehicle $getVehicleForEmployeeResult = null): self
    {
        if (is_null($getVehicleForEmployeeResult) || (is_array($getVehicleForEmployeeResult) && empty($getVehicleForEmployeeResult))) {
            unset($this->GetVehicleForEmployeeResult);
        } else {
            $this->GetVehicleForEmployeeResult = $getVehicleForEmployeeResult;
        }
        
        return $this;
    }
}
