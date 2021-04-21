<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsAlcoGroupSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsAlcoGroupSaveData
 * @subpackage Structs
 */
class AcsAlcoGroupSaveData extends AbstractStructBase
{
    /**
     * The AssignmentFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AssignmentFilter = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The EmployeeAssignmentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EmployeeAssignmentType = null;
    /**
     * The MaxCheckPerDay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $MaxCheckPerDay = null;
    /**
     * The MaxCheckPerPeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxCheckPerPeriod = null;
    /**
     * The MinCheckPerDay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MinCheckPerDay = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The PeriodAlcoTesting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PeriodAlcoTesting = null;
    /**
     * The StartAlcoTesting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartAlcoTesting = null;
    /**
     * Constructor method for AcsAlcoGroupSaveData
     * @uses AcsAlcoGroupSaveData::setAssignmentFilter()
     * @uses AcsAlcoGroupSaveData::setDescription()
     * @uses AcsAlcoGroupSaveData::setEmployeeAssignmentType()
     * @uses AcsAlcoGroupSaveData::setMaxCheckPerDay()
     * @uses AcsAlcoGroupSaveData::setMaxCheckPerPeriod()
     * @uses AcsAlcoGroupSaveData::setMinCheckPerDay()
     * @uses AcsAlcoGroupSaveData::setName()
     * @uses AcsAlcoGroupSaveData::setPeriodAlcoTesting()
     * @uses AcsAlcoGroupSaveData::setStartAlcoTesting()
     * @param string $assignmentFilter
     * @param string $description
     * @param string $employeeAssignmentType
     * @param int $maxCheckPerDay
     * @param int $maxCheckPerPeriod
     * @param int $minCheckPerDay
     * @param string $name
     * @param int $periodAlcoTesting
     * @param string $startAlcoTesting
     */
    public function __construct(?string $assignmentFilter = null, ?string $description = null, ?string $employeeAssignmentType = null, ?int $maxCheckPerDay = null, ?int $maxCheckPerPeriod = null, ?int $minCheckPerDay = null, ?string $name = null, ?int $periodAlcoTesting = null, ?string $startAlcoTesting = null)
    {
        $this
            ->setAssignmentFilter($assignmentFilter)
            ->setDescription($description)
            ->setEmployeeAssignmentType($employeeAssignmentType)
            ->setMaxCheckPerDay($maxCheckPerDay)
            ->setMaxCheckPerPeriod($maxCheckPerPeriod)
            ->setMinCheckPerDay($minCheckPerDay)
            ->setName($name)
            ->setPeriodAlcoTesting($periodAlcoTesting)
            ->setStartAlcoTesting($startAlcoTesting);
    }
    /**
     * Get AssignmentFilter value
     * @return string|null
     */
    public function getAssignmentFilter(): ?string
    {
        return $this->AssignmentFilter;
    }
    /**
     * Set AssignmentFilter value
     * @uses \EnumType\AssignmentFilter::valueIsValid()
     * @uses \EnumType\AssignmentFilter::getValidValues()
     * @throws InvalidArgumentException
     * @param string $assignmentFilter
     * @return \StructType\AcsAlcoGroupSaveData
     */
    public function setAssignmentFilter(?string $assignmentFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AssignmentFilter::valueIsValid($assignmentFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AssignmentFilter', is_array($assignmentFilter) ? implode(', ', $assignmentFilter) : var_export($assignmentFilter, true), implode(', ', \EnumType\AssignmentFilter::getValidValues())), __LINE__);
        }
        $this->AssignmentFilter = $assignmentFilter;
        
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\AcsAlcoGroupSaveData
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get EmployeeAssignmentType value
     * @return string|null
     */
    public function getEmployeeAssignmentType(): ?string
    {
        return $this->EmployeeAssignmentType;
    }
    /**
     * Set EmployeeAssignmentType value
     * @uses \EnumType\EmployeeAssignmentType::valueIsValid()
     * @uses \EnumType\EmployeeAssignmentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $employeeAssignmentType
     * @return \StructType\AcsAlcoGroupSaveData
     */
    public function setEmployeeAssignmentType(?string $employeeAssignmentType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EmployeeAssignmentType::valueIsValid($employeeAssignmentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EmployeeAssignmentType', is_array($employeeAssignmentType) ? implode(', ', $employeeAssignmentType) : var_export($employeeAssignmentType, true), implode(', ', \EnumType\EmployeeAssignmentType::getValidValues())), __LINE__);
        }
        $this->EmployeeAssignmentType = $employeeAssignmentType;
        
        return $this;
    }
    /**
     * Get MaxCheckPerDay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMaxCheckPerDay(): ?int
    {
        return isset($this->MaxCheckPerDay) ? $this->MaxCheckPerDay : null;
    }
    /**
     * Set MaxCheckPerDay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $maxCheckPerDay
     * @return \StructType\AcsAlcoGroupSaveData
     */
    public function setMaxCheckPerDay(?int $maxCheckPerDay = null): self
    {
        // validation for constraint: int
        if (!is_null($maxCheckPerDay) && !(is_int($maxCheckPerDay) || ctype_digit($maxCheckPerDay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCheckPerDay, true), gettype($maxCheckPerDay)), __LINE__);
        }
        if (is_null($maxCheckPerDay) || (is_array($maxCheckPerDay) && empty($maxCheckPerDay))) {
            unset($this->MaxCheckPerDay);
        } else {
            $this->MaxCheckPerDay = $maxCheckPerDay;
        }
        
        return $this;
    }
    /**
     * Get MaxCheckPerPeriod value
     * @return int|null
     */
    public function getMaxCheckPerPeriod(): ?int
    {
        return $this->MaxCheckPerPeriod;
    }
    /**
     * Set MaxCheckPerPeriod value
     * @param int $maxCheckPerPeriod
     * @return \StructType\AcsAlcoGroupSaveData
     */
    public function setMaxCheckPerPeriod(?int $maxCheckPerPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($maxCheckPerPeriod) && !(is_int($maxCheckPerPeriod) || ctype_digit($maxCheckPerPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCheckPerPeriod, true), gettype($maxCheckPerPeriod)), __LINE__);
        }
        $this->MaxCheckPerPeriod = $maxCheckPerPeriod;
        
        return $this;
    }
    /**
     * Get MinCheckPerDay value
     * @return int|null
     */
    public function getMinCheckPerDay(): ?int
    {
        return $this->MinCheckPerDay;
    }
    /**
     * Set MinCheckPerDay value
     * @param int $minCheckPerDay
     * @return \StructType\AcsAlcoGroupSaveData
     */
    public function setMinCheckPerDay(?int $minCheckPerDay = null): self
    {
        // validation for constraint: int
        if (!is_null($minCheckPerDay) && !(is_int($minCheckPerDay) || ctype_digit($minCheckPerDay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minCheckPerDay, true), gettype($minCheckPerDay)), __LINE__);
        }
        $this->MinCheckPerDay = $minCheckPerDay;
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\AcsAlcoGroupSaveData
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get PeriodAlcoTesting value
     * @return int|null
     */
    public function getPeriodAlcoTesting(): ?int
    {
        return $this->PeriodAlcoTesting;
    }
    /**
     * Set PeriodAlcoTesting value
     * @param int $periodAlcoTesting
     * @return \StructType\AcsAlcoGroupSaveData
     */
    public function setPeriodAlcoTesting(?int $periodAlcoTesting = null): self
    {
        // validation for constraint: int
        if (!is_null($periodAlcoTesting) && !(is_int($periodAlcoTesting) || ctype_digit($periodAlcoTesting))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($periodAlcoTesting, true), gettype($periodAlcoTesting)), __LINE__);
        }
        $this->PeriodAlcoTesting = $periodAlcoTesting;
        
        return $this;
    }
    /**
     * Get StartAlcoTesting value
     * @return string|null
     */
    public function getStartAlcoTesting(): ?string
    {
        return $this->StartAlcoTesting;
    }
    /**
     * Set StartAlcoTesting value
     * @param string $startAlcoTesting
     * @return \StructType\AcsAlcoGroupSaveData
     */
    public function setStartAlcoTesting(?string $startAlcoTesting = null): self
    {
        // validation for constraint: string
        if (!is_null($startAlcoTesting) && !is_string($startAlcoTesting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startAlcoTesting, true), gettype($startAlcoTesting)), __LINE__);
        }
        $this->StartAlcoTesting = $startAlcoTesting;
        
        return $this;
    }
}
