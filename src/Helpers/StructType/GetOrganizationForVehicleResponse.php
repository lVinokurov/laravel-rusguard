<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrganizationForVehicleResponse StructType
 * @subpackage Structs
 */
class GetOrganizationForVehicleResponse extends AbstractStructBase
{
    /**
     * The GetOrganizationForVehicleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDictionaryElementInfo|null
     */
    protected ?\ArrayType\ArrayOfDictionaryElementInfo $GetOrganizationForVehicleResult = null;
    /**
     * Constructor method for GetOrganizationForVehicleResponse
     * @uses GetOrganizationForVehicleResponse::setGetOrganizationForVehicleResult()
     * @param \ArrayType\ArrayOfDictionaryElementInfo $getOrganizationForVehicleResult
     */
    public function __construct(?\ArrayType\ArrayOfDictionaryElementInfo $getOrganizationForVehicleResult = null)
    {
        $this
            ->setGetOrganizationForVehicleResult($getOrganizationForVehicleResult);
    }
    /**
     * Get GetOrganizationForVehicleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDictionaryElementInfo|null
     */
    public function getGetOrganizationForVehicleResult(): ?\ArrayType\ArrayOfDictionaryElementInfo
    {
        return isset($this->GetOrganizationForVehicleResult) ? $this->GetOrganizationForVehicleResult : null;
    }
    /**
     * Set GetOrganizationForVehicleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDictionaryElementInfo $getOrganizationForVehicleResult
     * @return \StructType\GetOrganizationForVehicleResponse
     */
    public function setGetOrganizationForVehicleResult(?\ArrayType\ArrayOfDictionaryElementInfo $getOrganizationForVehicleResult = null): self
    {
        if (is_null($getOrganizationForVehicleResult) || (is_array($getOrganizationForVehicleResult) && empty($getOrganizationForVehicleResult))) {
            unset($this->GetOrganizationForVehicleResult);
        } else {
            $this->GetOrganizationForVehicleResult = $getOrganizationForVehicleResult;
        }
        
        return $this;
    }
}
