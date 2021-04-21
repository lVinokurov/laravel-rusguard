<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RGTimeInterval StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RGTimeInterval
 * @subpackage Structs
 */
class RGTimeInterval extends AbstractStructBase
{
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TimeOfDay|null
     */
    protected ?\StructType\TimeOfDay $EndTime = null;
    /**
     * The IntervalType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IntervalType = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TimeOfDay|null
     */
    protected ?\StructType\TimeOfDay $StartTime = null;
    /**
     * Constructor method for RGTimeInterval
     * @uses RGTimeInterval::setEndTime()
     * @uses RGTimeInterval::setIntervalType()
     * @uses RGTimeInterval::setStartTime()
     * @param \StructType\TimeOfDay $endTime
     * @param string $intervalType
     * @param \StructType\TimeOfDay $startTime
     */
    public function __construct(?\StructType\TimeOfDay $endTime = null, ?string $intervalType = null, ?\StructType\TimeOfDay $startTime = null)
    {
        $this
            ->setEndTime($endTime)
            ->setIntervalType($intervalType)
            ->setStartTime($startTime);
    }
    /**
     * Get EndTime value
     * @return \StructType\TimeOfDay|null
     */
    public function getEndTime(): ?\StructType\TimeOfDay
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param \StructType\TimeOfDay $endTime
     * @return \StructType\RGTimeInterval
     */
    public function setEndTime(?\StructType\TimeOfDay $endTime = null): self
    {
        $this->EndTime = $endTime;
        
        return $this;
    }
    /**
     * Get IntervalType value
     * @return string|null
     */
    public function getIntervalType(): ?string
    {
        return $this->IntervalType;
    }
    /**
     * Set IntervalType value
     * @uses \EnumType\AcsTimeIntervalType::valueIsValid()
     * @uses \EnumType\AcsTimeIntervalType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $intervalType
     * @return \StructType\RGTimeInterval
     */
    public function setIntervalType(?string $intervalType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AcsTimeIntervalType::valueIsValid($intervalType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AcsTimeIntervalType', is_array($intervalType) ? implode(', ', $intervalType) : var_export($intervalType, true), implode(', ', \EnumType\AcsTimeIntervalType::getValidValues())), __LINE__);
        }
        $this->IntervalType = $intervalType;
        
        return $this;
    }
    /**
     * Get StartTime value
     * @return \StructType\TimeOfDay|null
     */
    public function getStartTime(): ?\StructType\TimeOfDay
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param \StructType\TimeOfDay $startTime
     * @return \StructType\RGTimeInterval
     */
    public function setStartTime(?\StructType\TimeOfDay $startTime = null): self
    {
        $this->StartTime = $startTime;
        
        return $this;
    }
}
