<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDayTypeResponse StructType
 * @subpackage Structs
 */
class AddDayTypeResponse extends AbstractStructBase
{
    /**
     * The AddDayTypeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DayTypeSlimInfo|null
     */
    protected ?\StructType\DayTypeSlimInfo $AddDayTypeResult = null;
    /**
     * Constructor method for AddDayTypeResponse
     * @uses AddDayTypeResponse::setAddDayTypeResult()
     * @param \StructType\DayTypeSlimInfo $addDayTypeResult
     */
    public function __construct(?\StructType\DayTypeSlimInfo $addDayTypeResult = null)
    {
        $this
            ->setAddDayTypeResult($addDayTypeResult);
    }
    /**
     * Get AddDayTypeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DayTypeSlimInfo|null
     */
    public function getAddDayTypeResult(): ?\StructType\DayTypeSlimInfo
    {
        return isset($this->AddDayTypeResult) ? $this->AddDayTypeResult : null;
    }
    /**
     * Set AddDayTypeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DayTypeSlimInfo $addDayTypeResult
     * @return \StructType\AddDayTypeResponse
     */
    public function setAddDayTypeResult(?\StructType\DayTypeSlimInfo $addDayTypeResult = null): self
    {
        if (is_null($addDayTypeResult) || (is_array($addDayTypeResult) && empty($addDayTypeResult))) {
            unset($this->AddDayTypeResult);
        } else {
            $this->AddDayTypeResult = $addDayTypeResult;
        }
        
        return $this;
    }
}
