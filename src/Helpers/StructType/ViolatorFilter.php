<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViolatorFilter StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ViolatorFilter
 * @subpackage Structs
 */
class ViolatorFilter extends AbstractStructBase
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
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The SecondName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SecondName = null;
    /**
     * The TableNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $TableNumber = null;
    /**
     * Constructor method for ViolatorFilter
     * @uses ViolatorFilter::setDateOfBirth()
     * @uses ViolatorFilter::setFirstName()
     * @uses ViolatorFilter::setID()
     * @uses ViolatorFilter::setLastName()
     * @uses ViolatorFilter::setSecondName()
     * @uses ViolatorFilter::setTableNumber()
     * @param string $dateOfBirth
     * @param string $firstName
     * @param string $iD
     * @param string $lastName
     * @param string $secondName
     * @param int $tableNumber
     */
    public function __construct(?string $dateOfBirth = null, ?string $firstName = null, ?string $iD = null, ?string $lastName = null, ?string $secondName = null, ?int $tableNumber = null)
    {
        $this
            ->setDateOfBirth($dateOfBirth)
            ->setFirstName($firstName)
            ->setID($iD)
            ->setLastName($lastName)
            ->setSecondName($secondName)
            ->setTableNumber($tableNumber);
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
     * @return \StructType\ViolatorFilter
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
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \StructType\ViolatorFilter
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
        
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\ViolatorFilter
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return isset($this->LastName) ? $this->LastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \StructType\ViolatorFilter
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }
        
        return $this;
    }
    /**
     * Get SecondName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecondName(): ?string
    {
        return isset($this->SecondName) ? $this->SecondName : null;
    }
    /**
     * Set SecondName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $secondName
     * @return \StructType\ViolatorFilter
     */
    public function setSecondName(?string $secondName = null): self
    {
        // validation for constraint: string
        if (!is_null($secondName) && !is_string($secondName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondName, true), gettype($secondName)), __LINE__);
        }
        if (is_null($secondName) || (is_array($secondName) && empty($secondName))) {
            unset($this->SecondName);
        } else {
            $this->SecondName = $secondName;
        }
        
        return $this;
    }
    /**
     * Get TableNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTableNumber(): ?int
    {
        return isset($this->TableNumber) ? $this->TableNumber : null;
    }
    /**
     * Set TableNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $tableNumber
     * @return \StructType\ViolatorFilter
     */
    public function setTableNumber(?int $tableNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($tableNumber) && !(is_int($tableNumber) || ctype_digit($tableNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tableNumber, true), gettype($tableNumber)), __LINE__);
        }
        if (is_null($tableNumber) || (is_array($tableNumber) && empty($tableNumber))) {
            unset($this->TableNumber);
        } else {
            $this->TableNumber = $tableNumber;
        }
        
        return $this;
    }
}
