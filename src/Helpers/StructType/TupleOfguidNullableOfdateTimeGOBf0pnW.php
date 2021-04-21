<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TupleOfguidNullableOfdateTimeGOBf0pnW StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TupleOfguidNullableOfdateTimeGOBf0pnW
 * @subpackage Structs
 */
class TupleOfguidNullableOfdateTimeGOBf0pnW extends AbstractStructBase
{
    /**
     * The m_Item1
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $m_Item1 = null;
    /**
     * The m_Item2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $m_Item2 = null;
    /**
     * Constructor method for TupleOfguidNullableOfdateTimeGOBf0pnW
     * @uses TupleOfguidNullableOfdateTimeGOBf0pnW::setM_Item1()
     * @uses TupleOfguidNullableOfdateTimeGOBf0pnW::setM_Item2()
     * @param string $m_Item1
     * @param string $m_Item2
     */
    public function __construct(?string $m_Item1 = null, ?string $m_Item2 = null)
    {
        $this
            ->setM_Item1($m_Item1)
            ->setM_Item2($m_Item2);
    }
    /**
     * Get m_Item1 value
     * @return string|null
     */
    public function getM_Item1(): ?string
    {
        return $this->m_Item1;
    }
    /**
     * Set m_Item1 value
     * @param string $m_Item1
     * @return \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW
     */
    public function setM_Item1(?string $m_Item1 = null): self
    {
        // validation for constraint: string
        if (!is_null($m_Item1) && !is_string($m_Item1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($m_Item1, true), gettype($m_Item1)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($m_Item1) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $m_Item1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($m_Item1, true)), __LINE__);
        }
        $this->m_Item1 = $m_Item1;
        
        return $this;
    }
    /**
     * Get m_Item2 value
     * @return string|null
     */
    public function getM_Item2(): ?string
    {
        return $this->m_Item2;
    }
    /**
     * Set m_Item2 value
     * @param string $m_Item2
     * @return \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW
     */
    public function setM_Item2(?string $m_Item2 = null): self
    {
        // validation for constraint: string
        if (!is_null($m_Item2) && !is_string($m_Item2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($m_Item2, true), gettype($m_Item2)), __LINE__);
        }
        $this->m_Item2 = $m_Item2;
        
        return $this;
    }
}
