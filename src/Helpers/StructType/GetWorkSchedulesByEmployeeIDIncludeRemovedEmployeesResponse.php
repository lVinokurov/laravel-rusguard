<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResponse StructType
 * @subpackage Structs
 */
class GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkSchedulesData|null
     */
    protected ?\StructType\WorkSchedulesData $GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult = null;
    /**
     * Constructor method for
     * GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResponse
     * @uses GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResponse::setGetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult()
     * @param \StructType\WorkSchedulesData $getWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult
     */
    public function __construct(?\StructType\WorkSchedulesData $getWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult = null)
    {
        $this
            ->setGetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult($getWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult);
    }
    /**
     * Get GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkSchedulesData|null
     */
    public function getGetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult(): ?\StructType\WorkSchedulesData
    {
        return isset($this->GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult) ? $this->GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult : null;
    }
    /**
     * Set GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkSchedulesData $getWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult
     * @return \StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResponse
     */
    public function setGetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult(?\StructType\WorkSchedulesData $getWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult = null): self
    {
        if (is_null($getWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult) || (is_array($getWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult) && empty($getWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult))) {
            unset($this->GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult);
        } else {
            $this->GetWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult = $getWorkSchedulesByEmployeeIDIncludeRemovedEmployeesResult;
        }
        
        return $this;
    }
}
