<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkSchedulesByEmployeeGroupIDResponse StructType
 * @subpackage Structs
 */
class GetWorkSchedulesByEmployeeGroupIDResponse extends AbstractStructBase
{
    /**
     * The GetWorkSchedulesByEmployeeGroupIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkSchedulesData|null
     */
    protected ?\StructType\WorkSchedulesData $GetWorkSchedulesByEmployeeGroupIDResult = null;
    /**
     * Constructor method for GetWorkSchedulesByEmployeeGroupIDResponse
     * @uses GetWorkSchedulesByEmployeeGroupIDResponse::setGetWorkSchedulesByEmployeeGroupIDResult()
     * @param \StructType\WorkSchedulesData $getWorkSchedulesByEmployeeGroupIDResult
     */
    public function __construct(?\StructType\WorkSchedulesData $getWorkSchedulesByEmployeeGroupIDResult = null)
    {
        $this
            ->setGetWorkSchedulesByEmployeeGroupIDResult($getWorkSchedulesByEmployeeGroupIDResult);
    }
    /**
     * Get GetWorkSchedulesByEmployeeGroupIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkSchedulesData|null
     */
    public function getGetWorkSchedulesByEmployeeGroupIDResult(): ?\StructType\WorkSchedulesData
    {
        return isset($this->GetWorkSchedulesByEmployeeGroupIDResult) ? $this->GetWorkSchedulesByEmployeeGroupIDResult : null;
    }
    /**
     * Set GetWorkSchedulesByEmployeeGroupIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkSchedulesData $getWorkSchedulesByEmployeeGroupIDResult
     * @return \StructType\GetWorkSchedulesByEmployeeGroupIDResponse
     */
    public function setGetWorkSchedulesByEmployeeGroupIDResult(?\StructType\WorkSchedulesData $getWorkSchedulesByEmployeeGroupIDResult = null): self
    {
        if (is_null($getWorkSchedulesByEmployeeGroupIDResult) || (is_array($getWorkSchedulesByEmployeeGroupIDResult) && empty($getWorkSchedulesByEmployeeGroupIDResult))) {
            unset($this->GetWorkSchedulesByEmployeeGroupIDResult);
        } else {
            $this->GetWorkSchedulesByEmployeeGroupIDResult = $getWorkSchedulesByEmployeeGroupIDResult;
        }
        
        return $this;
    }
}
