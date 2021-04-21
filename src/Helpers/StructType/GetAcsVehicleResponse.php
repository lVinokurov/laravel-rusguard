<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsVehicleResponse StructType
 * @subpackage Structs
 */
class GetAcsVehicleResponse extends AbstractStructBase
{
    /**
     * The GetAcsVehicleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsVehicle|null
     */
    protected ?\StructType\AcsVehicle $GetAcsVehicleResult = null;
    /**
     * Constructor method for GetAcsVehicleResponse
     * @uses GetAcsVehicleResponse::setGetAcsVehicleResult()
     * @param \StructType\AcsVehicle $getAcsVehicleResult
     */
    public function __construct(?\StructType\AcsVehicle $getAcsVehicleResult = null)
    {
        $this
            ->setGetAcsVehicleResult($getAcsVehicleResult);
    }
    /**
     * Get GetAcsVehicleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsVehicle|null
     */
    public function getGetAcsVehicleResult(): ?\StructType\AcsVehicle
    {
        return isset($this->GetAcsVehicleResult) ? $this->GetAcsVehicleResult : null;
    }
    /**
     * Set GetAcsVehicleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsVehicle $getAcsVehicleResult
     * @return \StructType\GetAcsVehicleResponse
     */
    public function setGetAcsVehicleResult(?\StructType\AcsVehicle $getAcsVehicleResult = null): self
    {
        if (is_null($getAcsVehicleResult) || (is_array($getAcsVehicleResult) && empty($getAcsVehicleResult))) {
            unset($this->GetAcsVehicleResult);
        } else {
            $this->GetAcsVehicleResult = $getAcsVehicleResult;
        }
        
        return $this;
    }
}
