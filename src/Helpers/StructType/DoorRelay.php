<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoorRelay StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DoorRelay
 * @subpackage Structs
 */
class DoorRelay extends AbstractStructBase
{
    /**
     * The Access
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Access = null;
    /**
     * The Position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Position = null;
    /**
     * Constructor method for DoorRelay
     * @uses DoorRelay::setAccess()
     * @uses DoorRelay::setPosition()
     * @param bool $access
     * @param int $position
     */
    public function __construct(?bool $access = null, ?int $position = null)
    {
        $this
            ->setAccess($access)
            ->setPosition($position);
    }
    /**
     * Get Access value
     * @return bool|null
     */
    public function getAccess(): ?bool
    {
        return $this->Access;
    }
    /**
     * Set Access value
     * @param bool $access
     * @return \StructType\DoorRelay
     */
    public function setAccess(?bool $access = null): self
    {
        // validation for constraint: boolean
        if (!is_null($access) && !is_bool($access)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($access, true), gettype($access)), __LINE__);
        }
        $this->Access = $access;
        
        return $this;
    }
    /**
     * Get Position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param int $position
     * @return \StructType\DoorRelay
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->Position = $position;
        
        return $this;
    }
}
