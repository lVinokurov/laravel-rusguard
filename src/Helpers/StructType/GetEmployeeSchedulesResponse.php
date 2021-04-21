<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeSchedulesResponse StructType
 * @subpackage Structs
 */
class GetEmployeeSchedulesResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeSchedulesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeSchedule|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeSchedule $GetEmployeeSchedulesResult = null;
    /**
     * Constructor method for GetEmployeeSchedulesResponse
     * @uses GetEmployeeSchedulesResponse::setGetEmployeeSchedulesResult()
     * @param \ArrayType\ArrayOfAcsEmployeeSchedule $getEmployeeSchedulesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeSchedule $getEmployeeSchedulesResult = null)
    {
        $this
            ->setGetEmployeeSchedulesResult($getEmployeeSchedulesResult);
    }
    /**
     * Get GetEmployeeSchedulesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeSchedule|null
     */
    public function getGetEmployeeSchedulesResult(): ?\ArrayType\ArrayOfAcsEmployeeSchedule
    {
        return isset($this->GetEmployeeSchedulesResult) ? $this->GetEmployeeSchedulesResult : null;
    }
    /**
     * Set GetEmployeeSchedulesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeSchedule $getEmployeeSchedulesResult
     * @return \StructType\GetEmployeeSchedulesResponse
     */
    public function setGetEmployeeSchedulesResult(?\ArrayType\ArrayOfAcsEmployeeSchedule $getEmployeeSchedulesResult = null): self
    {
        if (is_null($getEmployeeSchedulesResult) || (is_array($getEmployeeSchedulesResult) && empty($getEmployeeSchedulesResult))) {
            unset($this->GetEmployeeSchedulesResult);
        } else {
            $this->GetEmployeeSchedulesResult = $getEmployeeSchedulesResult;
        }
        
        return $this;
    }
}
