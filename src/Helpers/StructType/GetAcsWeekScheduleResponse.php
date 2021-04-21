<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsWeekScheduleResponse StructType
 * @subpackage Structs
 */
class GetAcsWeekScheduleResponse extends AbstractStructBase
{
    /**
     * The GetAcsWeekScheduleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsWeekScheduleFull|null
     */
    protected ?\StructType\AcsWeekScheduleFull $GetAcsWeekScheduleResult = null;
    /**
     * Constructor method for GetAcsWeekScheduleResponse
     * @uses GetAcsWeekScheduleResponse::setGetAcsWeekScheduleResult()
     * @param \StructType\AcsWeekScheduleFull $getAcsWeekScheduleResult
     */
    public function __construct(?\StructType\AcsWeekScheduleFull $getAcsWeekScheduleResult = null)
    {
        $this
            ->setGetAcsWeekScheduleResult($getAcsWeekScheduleResult);
    }
    /**
     * Get GetAcsWeekScheduleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsWeekScheduleFull|null
     */
    public function getGetAcsWeekScheduleResult(): ?\StructType\AcsWeekScheduleFull
    {
        return isset($this->GetAcsWeekScheduleResult) ? $this->GetAcsWeekScheduleResult : null;
    }
    /**
     * Set GetAcsWeekScheduleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsWeekScheduleFull $getAcsWeekScheduleResult
     * @return \StructType\GetAcsWeekScheduleResponse
     */
    public function setGetAcsWeekScheduleResult(?\StructType\AcsWeekScheduleFull $getAcsWeekScheduleResult = null): self
    {
        if (is_null($getAcsWeekScheduleResult) || (is_array($getAcsWeekScheduleResult) && empty($getAcsWeekScheduleResult))) {
            unset($this->GetAcsWeekScheduleResult);
        } else {
            $this->GetAcsWeekScheduleResult = $getAcsWeekScheduleResult;
        }
        
        return $this;
    }
}
