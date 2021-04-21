<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Absent StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Absent
 * @subpackage Structs
 */
class Absent extends AbstractStructBase
{
    /**
     * The DeparmentGuid
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DeparmentGuid = null;
    /**
     * The DepartmentName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DepartmentName = null;
    /**
     * The EmployeeGuid
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeGuid = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PhoneNumber = null;
    /**
     * The Position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Position = null;
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
     * Constructor method for Absent
     * @uses Absent::setDeparmentGuid()
     * @uses Absent::setDepartmentName()
     * @uses Absent::setEmployeeGuid()
     * @uses Absent::setFirstName()
     * @uses Absent::setLastName()
     * @uses Absent::setPhoneNumber()
     * @uses Absent::setPosition()
     * @uses Absent::setSecondName()
     * @uses Absent::setTableNumber()
     * @param string $deparmentGuid
     * @param string $departmentName
     * @param string $employeeGuid
     * @param string $firstName
     * @param string $lastName
     * @param string $phoneNumber
     * @param string $position
     * @param string $secondName
     * @param int $tableNumber
     */
    public function __construct(?string $deparmentGuid = null, ?string $departmentName = null, ?string $employeeGuid = null, ?string $firstName = null, ?string $lastName = null, ?string $phoneNumber = null, ?string $position = null, ?string $secondName = null, ?int $tableNumber = null)
    {
        $this
            ->setDeparmentGuid($deparmentGuid)
            ->setDepartmentName($departmentName)
            ->setEmployeeGuid($employeeGuid)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPhoneNumber($phoneNumber)
            ->setPosition($position)
            ->setSecondName($secondName)
            ->setTableNumber($tableNumber);
    }
    /**
     * Get DeparmentGuid value
     * @return string|null
     */
    public function getDeparmentGuid(): ?string
    {
        return $this->DeparmentGuid;
    }
    /**
     * Set DeparmentGuid value
     * @param string $deparmentGuid
     * @return \StructType\Absent
     */
    public function setDeparmentGuid(?string $deparmentGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($deparmentGuid) && !is_string($deparmentGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deparmentGuid, true), gettype($deparmentGuid)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($deparmentGuid) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $deparmentGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($deparmentGuid, true)), __LINE__);
        }
        $this->DeparmentGuid = $deparmentGuid;
        
        return $this;
    }
    /**
     * Get DepartmentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartmentName(): ?string
    {
        return isset($this->DepartmentName) ? $this->DepartmentName : null;
    }
    /**
     * Set DepartmentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departmentName
     * @return \StructType\Absent
     */
    public function setDepartmentName(?string $departmentName = null): self
    {
        // validation for constraint: string
        if (!is_null($departmentName) && !is_string($departmentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departmentName, true), gettype($departmentName)), __LINE__);
        }
        if (is_null($departmentName) || (is_array($departmentName) && empty($departmentName))) {
            unset($this->DepartmentName);
        } else {
            $this->DepartmentName = $departmentName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeGuid value
     * @return string|null
     */
    public function getEmployeeGuid(): ?string
    {
        return $this->EmployeeGuid;
    }
    /**
     * Set EmployeeGuid value
     * @param string $employeeGuid
     * @return \StructType\Absent
     */
    public function setEmployeeGuid(?string $employeeGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGuid) && !is_string($employeeGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGuid, true), gettype($employeeGuid)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeGuid) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeGuid, true)), __LINE__);
        }
        $this->EmployeeGuid = $employeeGuid;
        
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
     * @return \StructType\Absent
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
     * @return \StructType\Absent
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
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return isset($this->PhoneNumber) ? $this->PhoneNumber : null;
    }
    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneNumber
     * @return \StructType\Absent
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
        }
        
        return $this;
    }
    /**
     * Get Position value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return isset($this->Position) ? $this->Position : null;
    }
    /**
     * Set Position value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $position
     * @return \StructType\Absent
     */
    public function setPosition(?string $position = null): self
    {
        // validation for constraint: string
        if (!is_null($position) && !is_string($position)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        if (is_null($position) || (is_array($position) && empty($position))) {
            unset($this->Position);
        } else {
            $this->Position = $position;
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
     * @return \StructType\Absent
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
     * @return \StructType\Absent
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
