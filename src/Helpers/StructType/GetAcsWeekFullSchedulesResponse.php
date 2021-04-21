<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsWeekFullSchedulesResponse StructType
 * @subpackage Structs
 */
class GetAcsWeekFullSchedulesResponse extends AbstractStructBase
{
    /**
     * The GetAcsWeekFullSchedulesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsWeekScheduleFull|null
     */
    protected ?\ArrayType\ArrayOfAcsWeekScheduleFull $GetAcsWeekFullSchedulesResult = null;
    /**
     * Constructor method for GetAcsWeekFullSchedulesResponse
     * @uses GetAcsWeekFullSchedulesResponse::setGetAcsWeekFullSchedulesResult()
     * @param \ArrayType\ArrayOfAcsWeekScheduleFull $getAcsWeekFullSchedulesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsWeekScheduleFull $getAcsWeekFullSchedulesResult = null)
    {
        $this
            ->setGetAcsWeekFullSchedulesResult($getAcsWeekFullSchedulesResult);
    }
    /**
     * Get GetAcsWeekFullSchedulesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsWeekScheduleFull|null
     */
    public function getGetAcsWeekFullSchedulesResult(): ?\ArrayType\ArrayOfAcsWeekScheduleFull
    {
        return isset($this->GetAcsWeekFullSchedulesResult) ? $this->GetAcsWeekFullSchedulesResult : null;
    }
    /**
     * Set GetAcsWeekFullSchedulesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsWeekScheduleFull $getAcsWeekFullSchedulesResult
     * @return \StructType\GetAcsWeekFullSchedulesResponse
     */
    public function setGetAcsWeekFullSchedulesResult(?\ArrayType\ArrayOfAcsWeekScheduleFull $getAcsWeekFullSchedulesResult = null): self
    {
        if (is_null($getAcsWeekFullSchedulesResult) || (is_array($getAcsWeekFullSchedulesResult) && empty($getAcsWeekFullSchedulesResult))) {
            unset($this->GetAcsWeekFullSchedulesResult);
        } else {
            $this->GetAcsWeekFullSchedulesResult = $getAcsWeekFullSchedulesResult;
        }
        
        return $this;
    }
}
