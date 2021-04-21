<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsMultiDaySchedulesResponse StructType
 * @subpackage Structs
 */
class GetAcsMultiDaySchedulesResponse extends AbstractStructBase
{
    /**
     * The GetAcsMultiDaySchedulesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsMultiDaySchedule|null
     */
    protected ?\ArrayType\ArrayOfAcsMultiDaySchedule $GetAcsMultiDaySchedulesResult = null;
    /**
     * Constructor method for GetAcsMultiDaySchedulesResponse
     * @uses GetAcsMultiDaySchedulesResponse::setGetAcsMultiDaySchedulesResult()
     * @param \ArrayType\ArrayOfAcsMultiDaySchedule $getAcsMultiDaySchedulesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsMultiDaySchedule $getAcsMultiDaySchedulesResult = null)
    {
        $this
            ->setGetAcsMultiDaySchedulesResult($getAcsMultiDaySchedulesResult);
    }
    /**
     * Get GetAcsMultiDaySchedulesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsMultiDaySchedule|null
     */
    public function getGetAcsMultiDaySchedulesResult(): ?\ArrayType\ArrayOfAcsMultiDaySchedule
    {
        return isset($this->GetAcsMultiDaySchedulesResult) ? $this->GetAcsMultiDaySchedulesResult : null;
    }
    /**
     * Set GetAcsMultiDaySchedulesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsMultiDaySchedule $getAcsMultiDaySchedulesResult
     * @return \StructType\GetAcsMultiDaySchedulesResponse
     */
    public function setGetAcsMultiDaySchedulesResult(?\ArrayType\ArrayOfAcsMultiDaySchedule $getAcsMultiDaySchedulesResult = null): self
    {
        if (is_null($getAcsMultiDaySchedulesResult) || (is_array($getAcsMultiDaySchedulesResult) && empty($getAcsMultiDaySchedulesResult))) {
            unset($this->GetAcsMultiDaySchedulesResult);
        } else {
            $this->GetAcsMultiDaySchedulesResult = $getAcsMultiDaySchedulesResult;
        }
        
        return $this;
    }
}
