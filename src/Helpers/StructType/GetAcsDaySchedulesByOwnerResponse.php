<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsDaySchedulesByOwnerResponse StructType
 * @subpackage Structs
 */
class GetAcsDaySchedulesByOwnerResponse extends AbstractStructBase
{
    /**
     * The GetAcsDaySchedulesByOwnerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsDaySchedule|null
     */
    protected ?\ArrayType\ArrayOfAcsDaySchedule $GetAcsDaySchedulesByOwnerResult = null;
    /**
     * Constructor method for GetAcsDaySchedulesByOwnerResponse
     * @uses GetAcsDaySchedulesByOwnerResponse::setGetAcsDaySchedulesByOwnerResult()
     * @param \ArrayType\ArrayOfAcsDaySchedule $getAcsDaySchedulesByOwnerResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsDaySchedule $getAcsDaySchedulesByOwnerResult = null)
    {
        $this
            ->setGetAcsDaySchedulesByOwnerResult($getAcsDaySchedulesByOwnerResult);
    }
    /**
     * Get GetAcsDaySchedulesByOwnerResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsDaySchedule|null
     */
    public function getGetAcsDaySchedulesByOwnerResult(): ?\ArrayType\ArrayOfAcsDaySchedule
    {
        return isset($this->GetAcsDaySchedulesByOwnerResult) ? $this->GetAcsDaySchedulesByOwnerResult : null;
    }
    /**
     * Set GetAcsDaySchedulesByOwnerResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsDaySchedule $getAcsDaySchedulesByOwnerResult
     * @return \StructType\GetAcsDaySchedulesByOwnerResponse
     */
    public function setGetAcsDaySchedulesByOwnerResult(?\ArrayType\ArrayOfAcsDaySchedule $getAcsDaySchedulesByOwnerResult = null): self
    {
        if (is_null($getAcsDaySchedulesByOwnerResult) || (is_array($getAcsDaySchedulesByOwnerResult) && empty($getAcsDaySchedulesByOwnerResult))) {
            unset($this->GetAcsDaySchedulesByOwnerResult);
        } else {
            $this->GetAcsDaySchedulesByOwnerResult = $getAcsDaySchedulesByOwnerResult;
        }
        
        return $this;
    }
}
