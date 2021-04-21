<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSubdivisionsForVehicleResponse StructType
 * @subpackage Structs
 */
class GetSubdivisionsForVehicleResponse extends AbstractStructBase
{
    /**
     * The GetSubdivisionsForVehicleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDictionaryElementInfo|null
     */
    protected ?\ArrayType\ArrayOfDictionaryElementInfo $GetSubdivisionsForVehicleResult = null;
    /**
     * Constructor method for GetSubdivisionsForVehicleResponse
     * @uses GetSubdivisionsForVehicleResponse::setGetSubdivisionsForVehicleResult()
     * @param \ArrayType\ArrayOfDictionaryElementInfo $getSubdivisionsForVehicleResult
     */
    public function __construct(?\ArrayType\ArrayOfDictionaryElementInfo $getSubdivisionsForVehicleResult = null)
    {
        $this
            ->setGetSubdivisionsForVehicleResult($getSubdivisionsForVehicleResult);
    }
    /**
     * Get GetSubdivisionsForVehicleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDictionaryElementInfo|null
     */
    public function getGetSubdivisionsForVehicleResult(): ?\ArrayType\ArrayOfDictionaryElementInfo
    {
        return isset($this->GetSubdivisionsForVehicleResult) ? $this->GetSubdivisionsForVehicleResult : null;
    }
    /**
     * Set GetSubdivisionsForVehicleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDictionaryElementInfo $getSubdivisionsForVehicleResult
     * @return \StructType\GetSubdivisionsForVehicleResponse
     */
    public function setGetSubdivisionsForVehicleResult(?\ArrayType\ArrayOfDictionaryElementInfo $getSubdivisionsForVehicleResult = null): self
    {
        if (is_null($getSubdivisionsForVehicleResult) || (is_array($getSubdivisionsForVehicleResult) && empty($getSubdivisionsForVehicleResult))) {
            unset($this->GetSubdivisionsForVehicleResult);
        } else {
            $this->GetSubdivisionsForVehicleResult = $getSubdivisionsForVehicleResult;
        }
        
        return $this;
    }
}
