<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeTimeTableResponse StructType
 * @subpackage Structs
 */
class GetEmployeeTimeTableResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeTimeTableResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkTimetableSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkTimetableSlimInfo $GetEmployeeTimeTableResult = null;
    /**
     * Constructor method for GetEmployeeTimeTableResponse
     * @uses GetEmployeeTimeTableResponse::setGetEmployeeTimeTableResult()
     * @param \ArrayType\ArrayOfWorkTimetableSlimInfo $getEmployeeTimeTableResult
     */
    public function __construct(?\ArrayType\ArrayOfWorkTimetableSlimInfo $getEmployeeTimeTableResult = null)
    {
        $this
            ->setGetEmployeeTimeTableResult($getEmployeeTimeTableResult);
    }
    /**
     * Get GetEmployeeTimeTableResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkTimetableSlimInfo|null
     */
    public function getGetEmployeeTimeTableResult(): ?\ArrayType\ArrayOfWorkTimetableSlimInfo
    {
        return isset($this->GetEmployeeTimeTableResult) ? $this->GetEmployeeTimeTableResult : null;
    }
    /**
     * Set GetEmployeeTimeTableResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkTimetableSlimInfo $getEmployeeTimeTableResult
     * @return \StructType\GetEmployeeTimeTableResponse
     */
    public function setGetEmployeeTimeTableResult(?\ArrayType\ArrayOfWorkTimetableSlimInfo $getEmployeeTimeTableResult = null): self
    {
        if (is_null($getEmployeeTimeTableResult) || (is_array($getEmployeeTimeTableResult) && empty($getEmployeeTimeTableResult))) {
            unset($this->GetEmployeeTimeTableResult);
        } else {
            $this->GetEmployeeTimeTableResult = $getEmployeeTimeTableResult;
        }
        
        return $this;
    }
}
