<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkTimeTableResponse StructType
 * @subpackage Structs
 */
class GetWorkTimeTableResponse extends AbstractStructBase
{
    /**
     * The GetWorkTimeTableResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkTimetableSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkTimetableSlimInfo $GetWorkTimeTableResult = null;
    /**
     * Constructor method for GetWorkTimeTableResponse
     * @uses GetWorkTimeTableResponse::setGetWorkTimeTableResult()
     * @param \ArrayType\ArrayOfWorkTimetableSlimInfo $getWorkTimeTableResult
     */
    public function __construct(?\ArrayType\ArrayOfWorkTimetableSlimInfo $getWorkTimeTableResult = null)
    {
        $this
            ->setGetWorkTimeTableResult($getWorkTimeTableResult);
    }
    /**
     * Get GetWorkTimeTableResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkTimetableSlimInfo|null
     */
    public function getGetWorkTimeTableResult(): ?\ArrayType\ArrayOfWorkTimetableSlimInfo
    {
        return isset($this->GetWorkTimeTableResult) ? $this->GetWorkTimeTableResult : null;
    }
    /**
     * Set GetWorkTimeTableResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkTimetableSlimInfo $getWorkTimeTableResult
     * @return \StructType\GetWorkTimeTableResponse
     */
    public function setGetWorkTimeTableResult(?\ArrayType\ArrayOfWorkTimetableSlimInfo $getWorkTimeTableResult = null): self
    {
        if (is_null($getWorkTimeTableResult) || (is_array($getWorkTimeTableResult) && empty($getWorkTimeTableResult))) {
            unset($this->GetWorkTimeTableResult);
        } else {
            $this->GetWorkTimeTableResult = $getWorkTimeTableResult;
        }
        
        return $this;
    }
}
