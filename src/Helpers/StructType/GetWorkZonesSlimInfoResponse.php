<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkZonesSlimInfoResponse StructType
 * @subpackage Structs
 */
class GetWorkZonesSlimInfoResponse extends AbstractStructBase
{
    /**
     * The GetWorkZonesSlimInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkZoneSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkZoneSlimInfo $GetWorkZonesSlimInfoResult = null;
    /**
     * Constructor method for GetWorkZonesSlimInfoResponse
     * @uses GetWorkZonesSlimInfoResponse::setGetWorkZonesSlimInfoResult()
     * @param \ArrayType\ArrayOfWorkZoneSlimInfo $getWorkZonesSlimInfoResult
     */
    public function __construct(?\ArrayType\ArrayOfWorkZoneSlimInfo $getWorkZonesSlimInfoResult = null)
    {
        $this
            ->setGetWorkZonesSlimInfoResult($getWorkZonesSlimInfoResult);
    }
    /**
     * Get GetWorkZonesSlimInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkZoneSlimInfo|null
     */
    public function getGetWorkZonesSlimInfoResult(): ?\ArrayType\ArrayOfWorkZoneSlimInfo
    {
        return isset($this->GetWorkZonesSlimInfoResult) ? $this->GetWorkZonesSlimInfoResult : null;
    }
    /**
     * Set GetWorkZonesSlimInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkZoneSlimInfo $getWorkZonesSlimInfoResult
     * @return \StructType\GetWorkZonesSlimInfoResponse
     */
    public function setGetWorkZonesSlimInfoResult(?\ArrayType\ArrayOfWorkZoneSlimInfo $getWorkZonesSlimInfoResult = null): self
    {
        if (is_null($getWorkZonesSlimInfoResult) || (is_array($getWorkZonesSlimInfoResult) && empty($getWorkZonesSlimInfoResult))) {
            unset($this->GetWorkZonesSlimInfoResult);
        } else {
            $this->GetWorkZonesSlimInfoResult = $getWorkZonesSlimInfoResult;
        }
        
        return $this;
    }
}
