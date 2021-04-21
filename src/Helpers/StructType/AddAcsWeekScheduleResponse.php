<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsWeekScheduleResponse StructType
 * @subpackage Structs
 */
class AddAcsWeekScheduleResponse extends AbstractStructBase
{
    /**
     * The AddAcsWeekScheduleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsWeekScheduleFull|null
     */
    protected ?\StructType\AcsWeekScheduleFull $AddAcsWeekScheduleResult = null;
    /**
     * Constructor method for AddAcsWeekScheduleResponse
     * @uses AddAcsWeekScheduleResponse::setAddAcsWeekScheduleResult()
     * @param \StructType\AcsWeekScheduleFull $addAcsWeekScheduleResult
     */
    public function __construct(?\StructType\AcsWeekScheduleFull $addAcsWeekScheduleResult = null)
    {
        $this
            ->setAddAcsWeekScheduleResult($addAcsWeekScheduleResult);
    }
    /**
     * Get AddAcsWeekScheduleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsWeekScheduleFull|null
     */
    public function getAddAcsWeekScheduleResult(): ?\StructType\AcsWeekScheduleFull
    {
        return isset($this->AddAcsWeekScheduleResult) ? $this->AddAcsWeekScheduleResult : null;
    }
    /**
     * Set AddAcsWeekScheduleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsWeekScheduleFull $addAcsWeekScheduleResult
     * @return \StructType\AddAcsWeekScheduleResponse
     */
    public function setAddAcsWeekScheduleResult(?\StructType\AcsWeekScheduleFull $addAcsWeekScheduleResult = null): self
    {
        if (is_null($addAcsWeekScheduleResult) || (is_array($addAcsWeekScheduleResult) && empty($addAcsWeekScheduleResult))) {
            unset($this->AddAcsWeekScheduleResult);
        } else {
            $this->AddAcsWeekScheduleResult = $addAcsWeekScheduleResult;
        }
        
        return $this;
    }
}
