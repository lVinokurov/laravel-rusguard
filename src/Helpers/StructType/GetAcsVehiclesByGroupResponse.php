<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsVehiclesByGroupResponse StructType
 * @subpackage Structs
 */
class GetAcsVehiclesByGroupResponse extends AbstractStructBase
{
    /**
     * The GetAcsVehiclesByGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsVehicle|null
     */
    protected ?\ArrayType\ArrayOfAcsVehicle $GetAcsVehiclesByGroupResult = null;
    /**
     * Constructor method for GetAcsVehiclesByGroupResponse
     * @uses GetAcsVehiclesByGroupResponse::setGetAcsVehiclesByGroupResult()
     * @param \ArrayType\ArrayOfAcsVehicle $getAcsVehiclesByGroupResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsVehicle $getAcsVehiclesByGroupResult = null)
    {
        $this
            ->setGetAcsVehiclesByGroupResult($getAcsVehiclesByGroupResult);
    }
    /**
     * Get GetAcsVehiclesByGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsVehicle|null
     */
    public function getGetAcsVehiclesByGroupResult(): ?\ArrayType\ArrayOfAcsVehicle
    {
        return isset($this->GetAcsVehiclesByGroupResult) ? $this->GetAcsVehiclesByGroupResult : null;
    }
    /**
     * Set GetAcsVehiclesByGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsVehicle $getAcsVehiclesByGroupResult
     * @return \StructType\GetAcsVehiclesByGroupResponse
     */
    public function setGetAcsVehiclesByGroupResult(?\ArrayType\ArrayOfAcsVehicle $getAcsVehiclesByGroupResult = null): self
    {
        if (is_null($getAcsVehiclesByGroupResult) || (is_array($getAcsVehiclesByGroupResult) && empty($getAcsVehiclesByGroupResult))) {
            unset($this->GetAcsVehiclesByGroupResult);
        } else {
            $this->GetAcsVehiclesByGroupResult = $getAcsVehiclesByGroupResult;
        }
        
        return $this;
    }
}
