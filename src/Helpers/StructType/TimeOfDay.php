<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeOfDay StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TimeOfDay
 * @subpackage Structs
 */
class TimeOfDay extends AbstractStructBase
{
    /**
     * The _hours
     * @var int|null
     */
    protected ?int $_hours = null;
    /**
     * The _minutes
     * @var int|null
     */
    protected ?int $_minutes = null;
    /**
     * The _seconds
     * @var int|null
     */
    protected ?int $_seconds = null;
    /**
     * Constructor method for TimeOfDay
     * @uses TimeOfDay::set_hours()
     * @uses TimeOfDay::set_minutes()
     * @uses TimeOfDay::set_seconds()
     * @param int $_hours
     * @param int $_minutes
     * @param int $_seconds
     */
    public function __construct(?int $_hours = null, ?int $_minutes = null, ?int $_seconds = null)
    {
        $this
            ->set_hours($_hours)
            ->set_minutes($_minutes)
            ->set_seconds($_seconds);
    }
    /**
     * Get _hours value
     * @return int|null
     */
    public function get_hours(): ?int
    {
        return $this->_hours;
    }
    /**
     * Set _hours value
     * @param int $_hours
     * @return \StructType\TimeOfDay
     */
    public function set_hours(?int $_hours = null): self
    {
        // validation for constraint: int
        if (!is_null($_hours) && !(is_int($_hours) || ctype_digit($_hours))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($_hours, true), gettype($_hours)), __LINE__);
        }
        $this->_hours = $_hours;
        
        return $this;
    }
    /**
     * Get _minutes value
     * @return int|null
     */
    public function get_minutes(): ?int
    {
        return $this->_minutes;
    }
    /**
     * Set _minutes value
     * @param int $_minutes
     * @return \StructType\TimeOfDay
     */
    public function set_minutes(?int $_minutes = null): self
    {
        // validation for constraint: int
        if (!is_null($_minutes) && !(is_int($_minutes) || ctype_digit($_minutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($_minutes, true), gettype($_minutes)), __LINE__);
        }
        $this->_minutes = $_minutes;
        
        return $this;
    }
    /**
     * Get _seconds value
     * @return int|null
     */
    public function get_seconds(): ?int
    {
        return $this->_seconds;
    }
    /**
     * Set _seconds value
     * @param int $_seconds
     * @return \StructType\TimeOfDay
     */
    public function set_seconds(?int $_seconds = null): self
    {
        // validation for constraint: int
        if (!is_null($_seconds) && !(is_int($_seconds) || ctype_digit($_seconds))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($_seconds, true), gettype($_seconds)), __LINE__);
        }
        $this->_seconds = $_seconds;
        
        return $this;
    }
}
