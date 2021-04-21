<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LEmployeePositionsData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LEmployeePositionsData
 * @subpackage Structs
 */
class LEmployeePositionsData extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The UserPositions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLEmployeePositionInfo|null
     */
    protected ?\ArrayType\ArrayOfLEmployeePositionInfo $UserPositions = null;
    /**
     * Constructor method for LEmployeePositionsData
     * @uses LEmployeePositionsData::setCount()
     * @uses LEmployeePositionsData::setUserPositions()
     * @param int $count
     * @param \ArrayType\ArrayOfLEmployeePositionInfo $userPositions
     */
    public function __construct(?int $count = null, ?\ArrayType\ArrayOfLEmployeePositionInfo $userPositions = null)
    {
        $this
            ->setCount($count)
            ->setUserPositions($userPositions);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\LEmployeePositionsData
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get UserPositions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLEmployeePositionInfo|null
     */
    public function getUserPositions(): ?\ArrayType\ArrayOfLEmployeePositionInfo
    {
        return isset($this->UserPositions) ? $this->UserPositions : null;
    }
    /**
     * Set UserPositions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLEmployeePositionInfo $userPositions
     * @return \StructType\LEmployeePositionsData
     */
    public function setUserPositions(?\ArrayType\ArrayOfLEmployeePositionInfo $userPositions = null): self
    {
        if (is_null($userPositions) || (is_array($userPositions) && empty($userPositions))) {
            unset($this->UserPositions);
        } else {
            $this->UserPositions = $userPositions;
        }
        
        return $this;
    }
}
