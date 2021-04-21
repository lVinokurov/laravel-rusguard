<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IPAddress StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IPAddress
 * @subpackage Structs
 */
class IPAddress extends AbstractStructBase
{
    /**
     * The m_Address
     * @var int|null
     */
    protected ?int $m_Address = null;
    /**
     * The m_Family
     * @var string|null
     */
    protected ?string $m_Family = null;
    /**
     * The m_HashCode
     * @var int|null
     */
    protected ?int $m_HashCode = null;
    /**
     * The m_Numbers
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfunsignedShort|null
     */
    protected ?\ArrayType\ArrayOfunsignedShort $m_Numbers = null;
    /**
     * The m_ScopeId
     * @var int|null
     */
    protected ?int $m_ScopeId = null;
    /**
     * Constructor method for IPAddress
     * @uses IPAddress::setM_Address()
     * @uses IPAddress::setM_Family()
     * @uses IPAddress::setM_HashCode()
     * @uses IPAddress::setM_Numbers()
     * @uses IPAddress::setM_ScopeId()
     * @param int $m_Address
     * @param string $m_Family
     * @param int $m_HashCode
     * @param \ArrayType\ArrayOfunsignedShort $m_Numbers
     * @param int $m_ScopeId
     */
    public function __construct(?int $m_Address = null, ?string $m_Family = null, ?int $m_HashCode = null, ?\ArrayType\ArrayOfunsignedShort $m_Numbers = null, ?int $m_ScopeId = null)
    {
        $this
            ->setM_Address($m_Address)
            ->setM_Family($m_Family)
            ->setM_HashCode($m_HashCode)
            ->setM_Numbers($m_Numbers)
            ->setM_ScopeId($m_ScopeId);
    }
    /**
     * Get m_Address value
     * @return int|null
     */
    public function getM_Address(): ?int
    {
        return $this->m_Address;
    }
    /**
     * Set m_Address value
     * @param int $m_Address
     * @return \StructType\IPAddress
     */
    public function setM_Address(?int $m_Address = null): self
    {
        // validation for constraint: int
        if (!is_null($m_Address) && !(is_int($m_Address) || ctype_digit($m_Address))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($m_Address, true), gettype($m_Address)), __LINE__);
        }
        $this->m_Address = $m_Address;
        
        return $this;
    }
    /**
     * Get m_Family value
     * @return string|null
     */
    public function getM_Family(): ?string
    {
        return $this->m_Family;
    }
    /**
     * Set m_Family value
     * @uses \EnumType\AddressFamily::valueIsValid()
     * @uses \EnumType\AddressFamily::getValidValues()
     * @throws InvalidArgumentException
     * @param string $m_Family
     * @return \StructType\IPAddress
     */
    public function setM_Family(?string $m_Family = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AddressFamily::valueIsValid($m_Family)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AddressFamily', is_array($m_Family) ? implode(', ', $m_Family) : var_export($m_Family, true), implode(', ', \EnumType\AddressFamily::getValidValues())), __LINE__);
        }
        $this->m_Family = $m_Family;
        
        return $this;
    }
    /**
     * Get m_HashCode value
     * @return int|null
     */
    public function getM_HashCode(): ?int
    {
        return $this->m_HashCode;
    }
    /**
     * Set m_HashCode value
     * @param int $m_HashCode
     * @return \StructType\IPAddress
     */
    public function setM_HashCode(?int $m_HashCode = null): self
    {
        // validation for constraint: int
        if (!is_null($m_HashCode) && !(is_int($m_HashCode) || ctype_digit($m_HashCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($m_HashCode, true), gettype($m_HashCode)), __LINE__);
        }
        $this->m_HashCode = $m_HashCode;
        
        return $this;
    }
    /**
     * Get m_Numbers value
     * @return \ArrayType\ArrayOfunsignedShort|null
     */
    public function getM_Numbers(): ?\ArrayType\ArrayOfunsignedShort
    {
        return $this->m_Numbers;
    }
    /**
     * Set m_Numbers value
     * @param \ArrayType\ArrayOfunsignedShort $m_Numbers
     * @return \StructType\IPAddress
     */
    public function setM_Numbers(?\ArrayType\ArrayOfunsignedShort $m_Numbers = null): self
    {
        $this->m_Numbers = $m_Numbers;
        
        return $this;
    }
    /**
     * Get m_ScopeId value
     * @return int|null
     */
    public function getM_ScopeId(): ?int
    {
        return $this->m_ScopeId;
    }
    /**
     * Set m_ScopeId value
     * @param int $m_ScopeId
     * @return \StructType\IPAddress
     */
    public function setM_ScopeId(?int $m_ScopeId = null): self
    {
        // validation for constraint: int
        if (!is_null($m_ScopeId) && !(is_int($m_ScopeId) || ctype_digit($m_ScopeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($m_ScopeId, true), gettype($m_ScopeId)), __LINE__);
        }
        $this->m_ScopeId = $m_ScopeId;
        
        return $this;
    }
}
