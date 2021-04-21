<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkZonesByEmployeeGroupIDResponse StructType
 * @subpackage Structs
 */
class GetWorkZonesByEmployeeGroupIDResponse extends AbstractStructBase
{
    /**
     * The GetWorkZonesByEmployeeGroupIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZonesData|null
     */
    protected ?\StructType\WorkZonesData $GetWorkZonesByEmployeeGroupIDResult = null;
    /**
     * Constructor method for GetWorkZonesByEmployeeGroupIDResponse
     * @uses GetWorkZonesByEmployeeGroupIDResponse::setGetWorkZonesByEmployeeGroupIDResult()
     * @param \StructType\WorkZonesData $getWorkZonesByEmployeeGroupIDResult
     */
    public function __construct(?\StructType\WorkZonesData $getWorkZonesByEmployeeGroupIDResult = null)
    {
        $this
            ->setGetWorkZonesByEmployeeGroupIDResult($getWorkZonesByEmployeeGroupIDResult);
    }
    /**
     * Get GetWorkZonesByEmployeeGroupIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkZonesData|null
     */
    public function getGetWorkZonesByEmployeeGroupIDResult(): ?\StructType\WorkZonesData
    {
        return isset($this->GetWorkZonesByEmployeeGroupIDResult) ? $this->GetWorkZonesByEmployeeGroupIDResult : null;
    }
    /**
     * Set GetWorkZonesByEmployeeGroupIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkZonesData $getWorkZonesByEmployeeGroupIDResult
     * @return \StructType\GetWorkZonesByEmployeeGroupIDResponse
     */
    public function setGetWorkZonesByEmployeeGroupIDResult(?\StructType\WorkZonesData $getWorkZonesByEmployeeGroupIDResult = null): self
    {
        if (is_null($getWorkZonesByEmployeeGroupIDResult) || (is_array($getWorkZonesByEmployeeGroupIDResult) && empty($getWorkZonesByEmployeeGroupIDResult))) {
            unset($this->GetWorkZonesByEmployeeGroupIDResult);
        } else {
            $this->GetWorkZonesByEmployeeGroupIDResult = $getWorkZonesByEmployeeGroupIDResult;
        }
        
        return $this;
    }
}
