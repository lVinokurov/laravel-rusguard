<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsDaySchedulesResponse StructType
 * @subpackage Structs
 */
class GetAcsDaySchedulesResponse extends AbstractStructBase
{
    /**
     * The GetAcsDaySchedulesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsDaySchedule|null
     */
    protected ?\ArrayType\ArrayOfAcsDaySchedule $GetAcsDaySchedulesResult = null;
    /**
     * Constructor method for GetAcsDaySchedulesResponse
     * @uses GetAcsDaySchedulesResponse::setGetAcsDaySchedulesResult()
     * @param \ArrayType\ArrayOfAcsDaySchedule $getAcsDaySchedulesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsDaySchedule $getAcsDaySchedulesResult = null)
    {
        $this
            ->setGetAcsDaySchedulesResult($getAcsDaySchedulesResult);
    }
    /**
     * Get GetAcsDaySchedulesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsDaySchedule|null
     */
    public function getGetAcsDaySchedulesResult(): ?\ArrayType\ArrayOfAcsDaySchedule
    {
        return isset($this->GetAcsDaySchedulesResult) ? $this->GetAcsDaySchedulesResult : null;
    }
    /**
     * Set GetAcsDaySchedulesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsDaySchedule $getAcsDaySchedulesResult
     * @return \StructType\GetAcsDaySchedulesResponse
     */
    public function setGetAcsDaySchedulesResult(?\ArrayType\ArrayOfAcsDaySchedule $getAcsDaySchedulesResult = null): self
    {
        if (is_null($getAcsDaySchedulesResult) || (is_array($getAcsDaySchedulesResult) && empty($getAcsDaySchedulesResult))) {
            unset($this->GetAcsDaySchedulesResult);
        } else {
            $this->GetAcsDaySchedulesResult = $getAcsDaySchedulesResult;
        }
        
        return $this;
    }
}
