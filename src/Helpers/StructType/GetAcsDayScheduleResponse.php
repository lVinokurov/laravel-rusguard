<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsDayScheduleResponse StructType
 * @subpackage Structs
 */
class GetAcsDayScheduleResponse extends AbstractStructBase
{
    /**
     * The GetAcsDayScheduleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $GetAcsDayScheduleResult = null;
    /**
     * Constructor method for GetAcsDayScheduleResponse
     * @uses GetAcsDayScheduleResponse::setGetAcsDayScheduleResult()
     * @param \StructType\AcsDaySchedule $getAcsDayScheduleResult
     */
    public function __construct(?\StructType\AcsDaySchedule $getAcsDayScheduleResult = null)
    {
        $this
            ->setGetAcsDayScheduleResult($getAcsDayScheduleResult);
    }
    /**
     * Get GetAcsDayScheduleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getGetAcsDayScheduleResult(): ?\StructType\AcsDaySchedule
    {
        return isset($this->GetAcsDayScheduleResult) ? $this->GetAcsDayScheduleResult : null;
    }
    /**
     * Set GetAcsDayScheduleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $getAcsDayScheduleResult
     * @return \StructType\GetAcsDayScheduleResponse
     */
    public function setGetAcsDayScheduleResult(?\StructType\AcsDaySchedule $getAcsDayScheduleResult = null): self
    {
        if (is_null($getAcsDayScheduleResult) || (is_array($getAcsDayScheduleResult) && empty($getAcsDayScheduleResult))) {
            unset($this->GetAcsDayScheduleResult);
        } else {
            $this->GetAcsDayScheduleResult = $getAcsDayScheduleResult;
        }
        
        return $this;
    }
}
