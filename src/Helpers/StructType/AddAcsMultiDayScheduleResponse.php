<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsMultiDayScheduleResponse StructType
 * @subpackage Structs
 */
class AddAcsMultiDayScheduleResponse extends AbstractStructBase
{
    /**
     * The AddAcsMultiDayScheduleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsMultiDaySchedule|null
     */
    protected ?\StructType\AcsMultiDaySchedule $AddAcsMultiDayScheduleResult = null;
    /**
     * Constructor method for AddAcsMultiDayScheduleResponse
     * @uses AddAcsMultiDayScheduleResponse::setAddAcsMultiDayScheduleResult()
     * @param \StructType\AcsMultiDaySchedule $addAcsMultiDayScheduleResult
     */
    public function __construct(?\StructType\AcsMultiDaySchedule $addAcsMultiDayScheduleResult = null)
    {
        $this
            ->setAddAcsMultiDayScheduleResult($addAcsMultiDayScheduleResult);
    }
    /**
     * Get AddAcsMultiDayScheduleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsMultiDaySchedule|null
     */
    public function getAddAcsMultiDayScheduleResult(): ?\StructType\AcsMultiDaySchedule
    {
        return isset($this->AddAcsMultiDayScheduleResult) ? $this->AddAcsMultiDayScheduleResult : null;
    }
    /**
     * Set AddAcsMultiDayScheduleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsMultiDaySchedule $addAcsMultiDayScheduleResult
     * @return \StructType\AddAcsMultiDayScheduleResponse
     */
    public function setAddAcsMultiDayScheduleResult(?\StructType\AcsMultiDaySchedule $addAcsMultiDayScheduleResult = null): self
    {
        if (is_null($addAcsMultiDayScheduleResult) || (is_array($addAcsMultiDayScheduleResult) && empty($addAcsMultiDayScheduleResult))) {
            unset($this->AddAcsMultiDayScheduleResult);
        } else {
            $this->AddAcsMultiDayScheduleResult = $addAcsMultiDayScheduleResult;
        }
        
        return $this;
    }
}
