<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResponse
 * StructType
 * @subpackage Structs
 */
class GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZonesData|null
     */
    protected ?\StructType\WorkZonesData $GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult = null;
    /**
     * Constructor method for GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResponse
     * @uses GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResponse::setGetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult()
     * @param \StructType\WorkZonesData $getWorkZonesByEmployeeIDIncludeRemovedEmployeesResult
     */
    public function __construct(?\StructType\WorkZonesData $getWorkZonesByEmployeeIDIncludeRemovedEmployeesResult = null)
    {
        $this
            ->setGetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult($getWorkZonesByEmployeeIDIncludeRemovedEmployeesResult);
    }
    /**
     * Get GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkZonesData|null
     */
    public function getGetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult(): ?\StructType\WorkZonesData
    {
        return isset($this->GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult) ? $this->GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult : null;
    }
    /**
     * Set GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkZonesData $getWorkZonesByEmployeeIDIncludeRemovedEmployeesResult
     * @return \StructType\GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResponse
     */
    public function setGetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult(?\StructType\WorkZonesData $getWorkZonesByEmployeeIDIncludeRemovedEmployeesResult = null): self
    {
        if (is_null($getWorkZonesByEmployeeIDIncludeRemovedEmployeesResult) || (is_array($getWorkZonesByEmployeeIDIncludeRemovedEmployeesResult) && empty($getWorkZonesByEmployeeIDIncludeRemovedEmployeesResult))) {
            unset($this->GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult);
        } else {
            $this->GetWorkZonesByEmployeeIDIncludeRemovedEmployeesResult = $getWorkZonesByEmployeeIDIncludeRemovedEmployeesResult;
        }
        
        return $this;
    }
}
