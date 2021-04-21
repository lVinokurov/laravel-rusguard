<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsVehicleResponse StructType
 * @subpackage Structs
 */
class AddAcsVehicleResponse extends AbstractStructBase
{
    /**
     * The AddAcsVehicleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsVehicle|null
     */
    protected ?\StructType\AcsVehicle $AddAcsVehicleResult = null;
    /**
     * Constructor method for AddAcsVehicleResponse
     * @uses AddAcsVehicleResponse::setAddAcsVehicleResult()
     * @param \StructType\AcsVehicle $addAcsVehicleResult
     */
    public function __construct(?\StructType\AcsVehicle $addAcsVehicleResult = null)
    {
        $this
            ->setAddAcsVehicleResult($addAcsVehicleResult);
    }
    /**
     * Get AddAcsVehicleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsVehicle|null
     */
    public function getAddAcsVehicleResult(): ?\StructType\AcsVehicle
    {
        return isset($this->AddAcsVehicleResult) ? $this->AddAcsVehicleResult : null;
    }
    /**
     * Set AddAcsVehicleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsVehicle $addAcsVehicleResult
     * @return \StructType\AddAcsVehicleResponse
     */
    public function setAddAcsVehicleResult(?\StructType\AcsVehicle $addAcsVehicleResult = null): self
    {
        if (is_null($addAcsVehicleResult) || (is_array($addAcsVehicleResult) && empty($addAcsVehicleResult))) {
            unset($this->AddAcsVehicleResult);
        } else {
            $this->AddAcsVehicleResult = $addAcsVehicleResult;
        }
        
        return $this;
    }
}
