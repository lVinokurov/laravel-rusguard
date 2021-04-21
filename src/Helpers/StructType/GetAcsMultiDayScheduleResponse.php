<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsMultiDayScheduleResponse StructType
 * @subpackage Structs
 */
class GetAcsMultiDayScheduleResponse extends AbstractStructBase
{
    /**
     * The GetAcsMultiDayScheduleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsMultiDaySchedule|null
     */
    protected ?\StructType\AcsMultiDaySchedule $GetAcsMultiDayScheduleResult = null;
    /**
     * Constructor method for GetAcsMultiDayScheduleResponse
     * @uses GetAcsMultiDayScheduleResponse::setGetAcsMultiDayScheduleResult()
     * @param \StructType\AcsMultiDaySchedule $getAcsMultiDayScheduleResult
     */
    public function __construct(?\StructType\AcsMultiDaySchedule $getAcsMultiDayScheduleResult = null)
    {
        $this
            ->setGetAcsMultiDayScheduleResult($getAcsMultiDayScheduleResult);
    }
    /**
     * Get GetAcsMultiDayScheduleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsMultiDaySchedule|null
     */
    public function getGetAcsMultiDayScheduleResult(): ?\StructType\AcsMultiDaySchedule
    {
        return isset($this->GetAcsMultiDayScheduleResult) ? $this->GetAcsMultiDayScheduleResult : null;
    }
    /**
     * Set GetAcsMultiDayScheduleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsMultiDaySchedule $getAcsMultiDayScheduleResult
     * @return \StructType\GetAcsMultiDayScheduleResponse
     */
    public function setGetAcsMultiDayScheduleResult(?\StructType\AcsMultiDaySchedule $getAcsMultiDayScheduleResult = null): self
    {
        if (is_null($getAcsMultiDayScheduleResult) || (is_array($getAcsMultiDayScheduleResult) && empty($getAcsMultiDayScheduleResult))) {
            unset($this->GetAcsMultiDayScheduleResult);
        } else {
            $this->GetAcsMultiDayScheduleResult = $getAcsMultiDayScheduleResult;
        }
        
        return $this;
    }
}
