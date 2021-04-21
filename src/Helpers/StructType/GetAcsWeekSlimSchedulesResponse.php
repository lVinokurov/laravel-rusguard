<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsWeekSlimSchedulesResponse StructType
 * @subpackage Structs
 */
class GetAcsWeekSlimSchedulesResponse extends AbstractStructBase
{
    /**
     * The GetAcsWeekSlimSchedulesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsWeekScheduleSlim|null
     */
    protected ?\ArrayType\ArrayOfAcsWeekScheduleSlim $GetAcsWeekSlimSchedulesResult = null;
    /**
     * Constructor method for GetAcsWeekSlimSchedulesResponse
     * @uses GetAcsWeekSlimSchedulesResponse::setGetAcsWeekSlimSchedulesResult()
     * @param \ArrayType\ArrayOfAcsWeekScheduleSlim $getAcsWeekSlimSchedulesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsWeekScheduleSlim $getAcsWeekSlimSchedulesResult = null)
    {
        $this
            ->setGetAcsWeekSlimSchedulesResult($getAcsWeekSlimSchedulesResult);
    }
    /**
     * Get GetAcsWeekSlimSchedulesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsWeekScheduleSlim|null
     */
    public function getGetAcsWeekSlimSchedulesResult(): ?\ArrayType\ArrayOfAcsWeekScheduleSlim
    {
        return isset($this->GetAcsWeekSlimSchedulesResult) ? $this->GetAcsWeekSlimSchedulesResult : null;
    }
    /**
     * Set GetAcsWeekSlimSchedulesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsWeekScheduleSlim $getAcsWeekSlimSchedulesResult
     * @return \StructType\GetAcsWeekSlimSchedulesResponse
     */
    public function setGetAcsWeekSlimSchedulesResult(?\ArrayType\ArrayOfAcsWeekScheduleSlim $getAcsWeekSlimSchedulesResult = null): self
    {
        if (is_null($getAcsWeekSlimSchedulesResult) || (is_array($getAcsWeekSlimSchedulesResult) && empty($getAcsWeekSlimSchedulesResult))) {
            unset($this->GetAcsWeekSlimSchedulesResult);
        } else {
            $this->GetAcsWeekSlimSchedulesResult = $getAcsWeekSlimSchedulesResult;
        }
        
        return $this;
    }
}
