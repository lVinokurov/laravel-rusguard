<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccessBits StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AccessBits
 * @subpackage Structs
 */
class AccessBits extends AbstractStructBase
{
    /**
     * The C1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $C1 = null;
    /**
     * The C2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $C2 = null;
    /**
     * The C3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $C3 = null;
    /**
     * Constructor method for AccessBits
     * @uses AccessBits::setC1()
     * @uses AccessBits::setC2()
     * @uses AccessBits::setC3()
     * @param bool $c1
     * @param bool $c2
     * @param bool $c3
     */
    public function __construct(?bool $c1 = null, ?bool $c2 = null, ?bool $c3 = null)
    {
        $this
            ->setC1($c1)
            ->setC2($c2)
            ->setC3($c3);
    }
    /**
     * Get C1 value
     * @return bool|null
     */
    public function getC1(): ?bool
    {
        return $this->C1;
    }
    /**
     * Set C1 value
     * @param bool $c1
     * @return \StructType\AccessBits
     */
    public function setC1(?bool $c1 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($c1) && !is_bool($c1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($c1, true), gettype($c1)), __LINE__);
        }
        $this->C1 = $c1;
        
        return $this;
    }
    /**
     * Get C2 value
     * @return bool|null
     */
    public function getC2(): ?bool
    {
        return $this->C2;
    }
    /**
     * Set C2 value
     * @param bool $c2
     * @return \StructType\AccessBits
     */
    public function setC2(?bool $c2 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($c2) && !is_bool($c2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($c2, true), gettype($c2)), __LINE__);
        }
        $this->C2 = $c2;
        
        return $this;
    }
    /**
     * Get C3 value
     * @return bool|null
     */
    public function getC3(): ?bool
    {
        return $this->C3;
    }
    /**
     * Set C3 value
     * @param bool $c3
     * @return \StructType\AccessBits
     */
    public function setC3(?bool $c3 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($c3) && !is_bool($c3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($c3, true), gettype($c3)), __LINE__);
        }
        $this->C3 = $c3;
        
        return $this;
    }
}
