<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsDayScheduleByOwnerResponse StructType
 * @subpackage Structs
 */
class GetAcsDayScheduleByOwnerResponse extends AbstractStructBase
{
    /**
     * The GetAcsDayScheduleByOwnerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $GetAcsDayScheduleByOwnerResult = null;
    /**
     * Constructor method for GetAcsDayScheduleByOwnerResponse
     * @uses GetAcsDayScheduleByOwnerResponse::setGetAcsDayScheduleByOwnerResult()
     * @param \StructType\AcsDaySchedule $getAcsDayScheduleByOwnerResult
     */
    public function __construct(?\StructType\AcsDaySchedule $getAcsDayScheduleByOwnerResult = null)
    {
        $this
            ->setGetAcsDayScheduleByOwnerResult($getAcsDayScheduleByOwnerResult);
    }
    /**
     * Get GetAcsDayScheduleByOwnerResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getGetAcsDayScheduleByOwnerResult(): ?\StructType\AcsDaySchedule
    {
        return isset($this->GetAcsDayScheduleByOwnerResult) ? $this->GetAcsDayScheduleByOwnerResult : null;
    }
    /**
     * Set GetAcsDayScheduleByOwnerResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $getAcsDayScheduleByOwnerResult
     * @return \StructType\GetAcsDayScheduleByOwnerResponse
     */
    public function setGetAcsDayScheduleByOwnerResult(?\StructType\AcsDaySchedule $getAcsDayScheduleByOwnerResult = null): self
    {
        if (is_null($getAcsDayScheduleByOwnerResult) || (is_array($getAcsDayScheduleByOwnerResult) && empty($getAcsDayScheduleByOwnerResult))) {
            unset($this->GetAcsDayScheduleByOwnerResult);
        } else {
            $this->GetAcsDayScheduleByOwnerResult = $getAcsDayScheduleByOwnerResult;
        }
        
        return $this;
    }
}
