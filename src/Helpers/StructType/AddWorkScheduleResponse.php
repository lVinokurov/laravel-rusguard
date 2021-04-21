<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWorkScheduleResponse StructType
 * @subpackage Structs
 */
class AddWorkScheduleResponse extends AbstractStructBase
{
    /**
     * The AddWorkScheduleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkScheduleSlimInfo|null
     */
    protected ?\StructType\WorkScheduleSlimInfo $AddWorkScheduleResult = null;
    /**
     * Constructor method for AddWorkScheduleResponse
     * @uses AddWorkScheduleResponse::setAddWorkScheduleResult()
     * @param \StructType\WorkScheduleSlimInfo $addWorkScheduleResult
     */
    public function __construct(?\StructType\WorkScheduleSlimInfo $addWorkScheduleResult = null)
    {
        $this
            ->setAddWorkScheduleResult($addWorkScheduleResult);
    }
    /**
     * Get AddWorkScheduleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkScheduleSlimInfo|null
     */
    public function getAddWorkScheduleResult(): ?\StructType\WorkScheduleSlimInfo
    {
        return isset($this->AddWorkScheduleResult) ? $this->AddWorkScheduleResult : null;
    }
    /**
     * Set AddWorkScheduleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkScheduleSlimInfo $addWorkScheduleResult
     * @return \StructType\AddWorkScheduleResponse
     */
    public function setAddWorkScheduleResult(?\StructType\WorkScheduleSlimInfo $addWorkScheduleResult = null): self
    {
        if (is_null($addWorkScheduleResult) || (is_array($addWorkScheduleResult) && empty($addWorkScheduleResult))) {
            unset($this->AddWorkScheduleResult);
        } else {
            $this->AddWorkScheduleResult = $addWorkScheduleResult;
        }
        
        return $this;
    }
}
