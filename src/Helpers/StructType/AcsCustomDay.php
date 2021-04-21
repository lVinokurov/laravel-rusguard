<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsCustomDay StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsCustomDay
 * @subpackage Structs
 */
class AcsCustomDay extends AcsCustomizableDayBase
{
    /**
     * The DayType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DayType = null;
    /**
     * Constructor method for AcsCustomDay
     * @uses AcsCustomDay::setDayType()
     * @param string $dayType
     */
    public function __construct(?string $dayType = null)
    {
        $this
            ->setDayType($dayType);
    }
    /**
     * Get DayType value
     * @return string|null
     */
    public function getDayType(): ?string
    {
        return $this->DayType;
    }
    /**
     * Set DayType value
     * @uses \EnumType\AcsCustomizableDayType::valueIsValid()
     * @uses \EnumType\AcsCustomizableDayType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dayType
     * @return \StructType\AcsCustomDay
     */
    public function setDayType(?string $dayType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AcsCustomizableDayType::valueIsValid($dayType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AcsCustomizableDayType', is_array($dayType) ? implode(', ', $dayType) : var_export($dayType, true), implode(', ', \EnumType\AcsCustomizableDayType::getValidValues())), __LINE__);
        }
        $this->DayType = $dayType;
        
        return $this;
    }
}
