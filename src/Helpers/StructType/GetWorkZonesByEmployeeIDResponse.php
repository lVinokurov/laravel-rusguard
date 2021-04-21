<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkZonesByEmployeeIDResponse StructType
 * @subpackage Structs
 */
class GetWorkZonesByEmployeeIDResponse extends AbstractStructBase
{
    /**
     * The GetWorkZonesByEmployeeIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZonesData|null
     */
    protected ?\StructType\WorkZonesData $GetWorkZonesByEmployeeIDResult = null;
    /**
     * Constructor method for GetWorkZonesByEmployeeIDResponse
     * @uses GetWorkZonesByEmployeeIDResponse::setGetWorkZonesByEmployeeIDResult()
     * @param \StructType\WorkZonesData $getWorkZonesByEmployeeIDResult
     */
    public function __construct(?\StructType\WorkZonesData $getWorkZonesByEmployeeIDResult = null)
    {
        $this
            ->setGetWorkZonesByEmployeeIDResult($getWorkZonesByEmployeeIDResult);
    }
    /**
     * Get GetWorkZonesByEmployeeIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkZonesData|null
     */
    public function getGetWorkZonesByEmployeeIDResult(): ?\StructType\WorkZonesData
    {
        return isset($this->GetWorkZonesByEmployeeIDResult) ? $this->GetWorkZonesByEmployeeIDResult : null;
    }
    /**
     * Set GetWorkZonesByEmployeeIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkZonesData $getWorkZonesByEmployeeIDResult
     * @return \StructType\GetWorkZonesByEmployeeIDResponse
     */
    public function setGetWorkZonesByEmployeeIDResult(?\StructType\WorkZonesData $getWorkZonesByEmployeeIDResult = null): self
    {
        if (is_null($getWorkZonesByEmployeeIDResult) || (is_array($getWorkZonesByEmployeeIDResult) && empty($getWorkZonesByEmployeeIDResult))) {
            unset($this->GetWorkZonesByEmployeeIDResult);
        } else {
            $this->GetWorkZonesByEmployeeIDResult = $getWorkZonesByEmployeeIDResult;
        }
        
        return $this;
    }
}
