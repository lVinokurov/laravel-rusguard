<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsDayScheduleForOwnerResponse StructType
 * @subpackage Structs
 */
class AddAcsDayScheduleForOwnerResponse extends AbstractStructBase
{
    /**
     * The AddAcsDayScheduleForOwnerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $AddAcsDayScheduleForOwnerResult = null;
    /**
     * Constructor method for AddAcsDayScheduleForOwnerResponse
     * @uses AddAcsDayScheduleForOwnerResponse::setAddAcsDayScheduleForOwnerResult()
     * @param \StructType\AcsDaySchedule $addAcsDayScheduleForOwnerResult
     */
    public function __construct(?\StructType\AcsDaySchedule $addAcsDayScheduleForOwnerResult = null)
    {
        $this
            ->setAddAcsDayScheduleForOwnerResult($addAcsDayScheduleForOwnerResult);
    }
    /**
     * Get AddAcsDayScheduleForOwnerResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getAddAcsDayScheduleForOwnerResult(): ?\StructType\AcsDaySchedule
    {
        return isset($this->AddAcsDayScheduleForOwnerResult) ? $this->AddAcsDayScheduleForOwnerResult : null;
    }
    /**
     * Set AddAcsDayScheduleForOwnerResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $addAcsDayScheduleForOwnerResult
     * @return \StructType\AddAcsDayScheduleForOwnerResponse
     */
    public function setAddAcsDayScheduleForOwnerResult(?\StructType\AcsDaySchedule $addAcsDayScheduleForOwnerResult = null): self
    {
        if (is_null($addAcsDayScheduleForOwnerResult) || (is_array($addAcsDayScheduleForOwnerResult) && empty($addAcsDayScheduleForOwnerResult))) {
            unset($this->AddAcsDayScheduleForOwnerResult);
        } else {
            $this->AddAcsDayScheduleForOwnerResult = $addAcsDayScheduleForOwnerResult;
        }
        
        return $this;
    }
}
