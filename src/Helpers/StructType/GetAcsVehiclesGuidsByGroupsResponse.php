<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsVehiclesGuidsByGroupsResponse StructType
 * @subpackage Structs
 */
class GetAcsVehiclesGuidsByGroupsResponse extends AbstractStructBase
{
    /**
     * The GetAcsVehiclesGuidsByGroupsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetAcsVehiclesGuidsByGroupsResult = null;
    /**
     * Constructor method for GetAcsVehiclesGuidsByGroupsResponse
     * @uses GetAcsVehiclesGuidsByGroupsResponse::setGetAcsVehiclesGuidsByGroupsResult()
     * @param \ArrayType\ArrayOfguid $getAcsVehiclesGuidsByGroupsResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getAcsVehiclesGuidsByGroupsResult = null)
    {
        $this
            ->setGetAcsVehiclesGuidsByGroupsResult($getAcsVehiclesGuidsByGroupsResult);
    }
    /**
     * Get GetAcsVehiclesGuidsByGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetAcsVehiclesGuidsByGroupsResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetAcsVehiclesGuidsByGroupsResult) ? $this->GetAcsVehiclesGuidsByGroupsResult : null;
    }
    /**
     * Set GetAcsVehiclesGuidsByGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getAcsVehiclesGuidsByGroupsResult
     * @return \StructType\GetAcsVehiclesGuidsByGroupsResponse
     */
    public function setGetAcsVehiclesGuidsByGroupsResult(?\ArrayType\ArrayOfguid $getAcsVehiclesGuidsByGroupsResult = null): self
    {
        if (is_null($getAcsVehiclesGuidsByGroupsResult) || (is_array($getAcsVehiclesGuidsByGroupsResult) && empty($getAcsVehiclesGuidsByGroupsResult))) {
            unset($this->GetAcsVehiclesGuidsByGroupsResult);
        } else {
            $this->GetAcsVehiclesGuidsByGroupsResult = $getAcsVehiclesGuidsByGroupsResult;
        }
        
        return $this;
    }
}
