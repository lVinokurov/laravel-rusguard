<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkZoneVisitorsCountResponse StructType
 * @subpackage Structs
 */
class GetWorkZoneVisitorsCountResponse extends AbstractStructBase
{
    /**
     * The GetWorkZoneVisitorsCountResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZoneVisitorsCountDTO|null
     */
    protected ?\StructType\WorkZoneVisitorsCountDTO $GetWorkZoneVisitorsCountResult = null;
    /**
     * Constructor method for GetWorkZoneVisitorsCountResponse
     * @uses GetWorkZoneVisitorsCountResponse::setGetWorkZoneVisitorsCountResult()
     * @param \StructType\WorkZoneVisitorsCountDTO $getWorkZoneVisitorsCountResult
     */
    public function __construct(?\StructType\WorkZoneVisitorsCountDTO $getWorkZoneVisitorsCountResult = null)
    {
        $this
            ->setGetWorkZoneVisitorsCountResult($getWorkZoneVisitorsCountResult);
    }
    /**
     * Get GetWorkZoneVisitorsCountResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkZoneVisitorsCountDTO|null
     */
    public function getGetWorkZoneVisitorsCountResult(): ?\StructType\WorkZoneVisitorsCountDTO
    {
        return isset($this->GetWorkZoneVisitorsCountResult) ? $this->GetWorkZoneVisitorsCountResult : null;
    }
    /**
     * Set GetWorkZoneVisitorsCountResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkZoneVisitorsCountDTO $getWorkZoneVisitorsCountResult
     * @return \StructType\GetWorkZoneVisitorsCountResponse
     */
    public function setGetWorkZoneVisitorsCountResult(?\StructType\WorkZoneVisitorsCountDTO $getWorkZoneVisitorsCountResult = null): self
    {
        if (is_null($getWorkZoneVisitorsCountResult) || (is_array($getWorkZoneVisitorsCountResult) && empty($getWorkZoneVisitorsCountResult))) {
            unset($this->GetWorkZoneVisitorsCountResult);
        } else {
            $this->GetWorkZoneVisitorsCountResult = $getWorkZoneVisitorsCountResult;
        }
        
        return $this;
    }
}
