<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkSchedulesByEmployeeIDResponse StructType
 * @subpackage Structs
 */
class GetWorkSchedulesByEmployeeIDResponse extends AbstractStructBase
{
    /**
     * The GetWorkSchedulesByEmployeeIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkSchedulesData|null
     */
    protected ?\StructType\WorkSchedulesData $GetWorkSchedulesByEmployeeIDResult = null;
    /**
     * Constructor method for GetWorkSchedulesByEmployeeIDResponse
     * @uses GetWorkSchedulesByEmployeeIDResponse::setGetWorkSchedulesByEmployeeIDResult()
     * @param \StructType\WorkSchedulesData $getWorkSchedulesByEmployeeIDResult
     */
    public function __construct(?\StructType\WorkSchedulesData $getWorkSchedulesByEmployeeIDResult = null)
    {
        $this
            ->setGetWorkSchedulesByEmployeeIDResult($getWorkSchedulesByEmployeeIDResult);
    }
    /**
     * Get GetWorkSchedulesByEmployeeIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkSchedulesData|null
     */
    public function getGetWorkSchedulesByEmployeeIDResult(): ?\StructType\WorkSchedulesData
    {
        return isset($this->GetWorkSchedulesByEmployeeIDResult) ? $this->GetWorkSchedulesByEmployeeIDResult : null;
    }
    /**
     * Set GetWorkSchedulesByEmployeeIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkSchedulesData $getWorkSchedulesByEmployeeIDResult
     * @return \StructType\GetWorkSchedulesByEmployeeIDResponse
     */
    public function setGetWorkSchedulesByEmployeeIDResult(?\StructType\WorkSchedulesData $getWorkSchedulesByEmployeeIDResult = null): self
    {
        if (is_null($getWorkSchedulesByEmployeeIDResult) || (is_array($getWorkSchedulesByEmployeeIDResult) && empty($getWorkSchedulesByEmployeeIDResult))) {
            unset($this->GetWorkSchedulesByEmployeeIDResult);
        } else {
            $this->GetWorkSchedulesByEmployeeIDResult = $getWorkSchedulesByEmployeeIDResult;
        }
        
        return $this;
    }
}
