<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmployeeScheduleResponse StructType
 * @subpackage Structs
 */
class AddEmployeeScheduleResponse extends AbstractStructBase
{
    /**
     * The AddEmployeeScheduleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeSchedule|null
     */
    protected ?\StructType\AcsEmployeeSchedule $AddEmployeeScheduleResult = null;
    /**
     * Constructor method for AddEmployeeScheduleResponse
     * @uses AddEmployeeScheduleResponse::setAddEmployeeScheduleResult()
     * @param \StructType\AcsEmployeeSchedule $addEmployeeScheduleResult
     */
    public function __construct(?\StructType\AcsEmployeeSchedule $addEmployeeScheduleResult = null)
    {
        $this
            ->setAddEmployeeScheduleResult($addEmployeeScheduleResult);
    }
    /**
     * Get AddEmployeeScheduleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeSchedule|null
     */
    public function getAddEmployeeScheduleResult(): ?\StructType\AcsEmployeeSchedule
    {
        return isset($this->AddEmployeeScheduleResult) ? $this->AddEmployeeScheduleResult : null;
    }
    /**
     * Set AddEmployeeScheduleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeSchedule $addEmployeeScheduleResult
     * @return \StructType\AddEmployeeScheduleResponse
     */
    public function setAddEmployeeScheduleResult(?\StructType\AcsEmployeeSchedule $addEmployeeScheduleResult = null): self
    {
        if (is_null($addEmployeeScheduleResult) || (is_array($addEmployeeScheduleResult) && empty($addEmployeeScheduleResult))) {
            unset($this->AddEmployeeScheduleResult);
        } else {
            $this->AddEmployeeScheduleResult = $addEmployeeScheduleResult;
        }
        
        return $this;
    }
}
