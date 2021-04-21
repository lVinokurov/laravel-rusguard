<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeCurentInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeCurentInfo
 * @subpackage Structs
 */
class EmployeeCurentInfo extends AbstractStructBase
{
    /**
     * The EmployeeGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeGroup = null;
    /**
     * The FIO
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FIO = null;
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
     * The Position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Position = null;
    /**
     * The TabNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $TabNumber = null;
    /**
     * Constructor method for EmployeeCurentInfo
     * @uses EmployeeCurentInfo::setEmployeeGroup()
     * @uses EmployeeCurentInfo::setFIO()
     * @uses EmployeeCurentInfo::setID()
     * @uses EmployeeCurentInfo::setPosition()
     * @uses EmployeeCurentInfo::setTabNumber()
     * @param string $employeeGroup
     * @param string $fIO
     * @param string $iD
     * @param string $position
     * @param int $tabNumber
     */
    public function __construct(?string $employeeGroup = null, ?string $fIO = null, ?string $iD = null, ?string $position = null, ?int $tabNumber = null)
    {
        $this
            ->setEmployeeGroup($employeeGroup)
            ->setFIO($fIO)
            ->setID($iD)
            ->setPosition($position)
            ->setTabNumber($tabNumber);
    }
    /**
     * Get EmployeeGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeGroup(): ?string
    {
        return isset($this->EmployeeGroup) ? $this->EmployeeGroup : null;
    }
    /**
     * Set EmployeeGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeGroup
     * @return \StructType\EmployeeCurentInfo
     */
    public function setEmployeeGroup(?string $employeeGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroup) && !is_string($employeeGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroup, true), gettype($employeeGroup)), __LINE__);
        }
        if (is_null($employeeGroup) || (is_array($employeeGroup) && empty($employeeGroup))) {
            unset($this->EmployeeGroup);
        } else {
            $this->EmployeeGroup = $employeeGroup;
        }
        
        return $this;
    }
    /**
     * Get FIO value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFIO(): ?string
    {
        return isset($this->FIO) ? $this->FIO : null;
    }
    /**
     * Set FIO value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fIO
     * @return \StructType\EmployeeCurentInfo
     */
    public function setFIO(?string $fIO = null): self
    {
        // validation for constraint: string
        if (!is_null($fIO) && !is_string($fIO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fIO, true), gettype($fIO)), __LINE__);
        }
        if (is_null($fIO) || (is_array($fIO) && empty($fIO))) {
            unset($this->FIO);
        } else {
            $this->FIO = $fIO;
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
     * @return \StructType\EmployeeCurentInfo
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
     * @return \StructType\EmployeeCurentInfo
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
     * Get TabNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTabNumber(): ?int
    {
        return isset($this->TabNumber) ? $this->TabNumber : null;
    }
    /**
     * Set TabNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $tabNumber
     * @return \StructType\EmployeeCurentInfo
     */
    public function setTabNumber(?int $tabNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($tabNumber) && !(is_int($tabNumber) || ctype_digit($tabNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tabNumber, true), gettype($tabNumber)), __LINE__);
        }
        if (is_null($tabNumber) || (is_array($tabNumber) && empty($tabNumber))) {
            unset($this->TabNumber);
        } else {
            $this->TabNumber = $tabNumber;
        }
        
        return $this;
    }
}
