<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhotoBankShort StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PhotoBankShort
 * @subpackage Structs
 */
class PhotoBankShort extends AbstractStructBase
{
    /**
     * The DateOfBirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DateOfBirth = null;
    /**
     * The FullName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FullName = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Id = null;
    /**
     * The PersonNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PersonNumber = null;
    /**
     * Constructor method for PhotoBankShort
     * @uses PhotoBankShort::setDateOfBirth()
     * @uses PhotoBankShort::setFullName()
     * @uses PhotoBankShort::setId()
     * @uses PhotoBankShort::setPersonNumber()
     * @param string $dateOfBirth
     * @param string $fullName
     * @param int $id
     * @param int $personNumber
     */
    public function __construct(?string $dateOfBirth = null, ?string $fullName = null, ?int $id = null, ?int $personNumber = null)
    {
        $this
            ->setDateOfBirth($dateOfBirth)
            ->setFullName($fullName)
            ->setId($id)
            ->setPersonNumber($personNumber);
    }
    /**
     * Get DateOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return isset($this->DateOfBirth) ? $this->DateOfBirth : null;
    }
    /**
     * Set DateOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateOfBirth
     * @return \StructType\PhotoBankShort
     */
    public function setDateOfBirth(?string $dateOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfBirth, true), gettype($dateOfBirth)), __LINE__);
        }
        if (is_null($dateOfBirth) || (is_array($dateOfBirth) && empty($dateOfBirth))) {
            unset($this->DateOfBirth);
        } else {
            $this->DateOfBirth = $dateOfBirth;
        }
        
        return $this;
    }
    /**
     * Get FullName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return isset($this->FullName) ? $this->FullName : null;
    }
    /**
     * Set FullName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fullName
     * @return \StructType\PhotoBankShort
     */
    public function setFullName(?string $fullName = null): self
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        if (is_null($fullName) || (is_array($fullName) && empty($fullName))) {
            unset($this->FullName);
        } else {
            $this->FullName = $fullName;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \StructType\PhotoBankShort
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get PersonNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPersonNumber(): ?int
    {
        return isset($this->PersonNumber) ? $this->PersonNumber : null;
    }
    /**
     * Set PersonNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $personNumber
     * @return \StructType\PhotoBankShort
     */
    public function setPersonNumber(?int $personNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($personNumber) && !(is_int($personNumber) || ctype_digit($personNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personNumber, true), gettype($personNumber)), __LINE__);
        }
        if (is_null($personNumber) || (is_array($personNumber) && empty($personNumber))) {
            unset($this->PersonNumber);
        } else {
            $this->PersonNumber = $personNumber;
        }
        
        return $this;
    }
}
