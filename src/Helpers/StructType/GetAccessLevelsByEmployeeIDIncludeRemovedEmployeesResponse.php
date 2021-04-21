<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResponse
 * StructType
 * @subpackage Structs
 */
class GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LAccessLevelsData|null
     */
    protected ?\StructType\LAccessLevelsData $GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult = null;
    /**
     * Constructor method for
     * GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResponse
     * @uses GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResponse::setGetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult()
     * @param \StructType\LAccessLevelsData $getAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult
     */
    public function __construct(?\StructType\LAccessLevelsData $getAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult = null)
    {
        $this
            ->setGetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult($getAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult);
    }
    /**
     * Get GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LAccessLevelsData|null
     */
    public function getGetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult(): ?\StructType\LAccessLevelsData
    {
        return isset($this->GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult) ? $this->GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult : null;
    }
    /**
     * Set GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LAccessLevelsData $getAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult
     * @return \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResponse
     */
    public function setGetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult(?\StructType\LAccessLevelsData $getAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult = null): self
    {
        if (is_null($getAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult) || (is_array($getAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult) && empty($getAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult))) {
            unset($this->GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult);
        } else {
            $this->GetAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult = $getAccessLevelsByEmployeeIDIncludeRemovedEmployeesResult;
        }
        
        return $this;
    }
}
