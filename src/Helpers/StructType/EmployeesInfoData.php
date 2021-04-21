<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeesInfoData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeesInfoData
 * @subpackage Structs
 */
class EmployeesInfoData extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The Employees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeSlim|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeSlim $Employees = null;
    /**
     * The FoundIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FoundIndex = null;
    /**
     * The IsFound
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsFound = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * Constructor method for EmployeesInfoData
     * @uses EmployeesInfoData::setCount()
     * @uses EmployeesInfoData::setEmployees()
     * @uses EmployeesInfoData::setFoundIndex()
     * @uses EmployeesInfoData::setIsFound()
     * @uses EmployeesInfoData::setPageNumber()
     * @param int $count
     * @param \ArrayType\ArrayOfAcsEmployeeSlim $employees
     * @param int $foundIndex
     * @param bool $isFound
     * @param int $pageNumber
     */
    public function __construct(?int $count = null, ?\ArrayType\ArrayOfAcsEmployeeSlim $employees = null, ?int $foundIndex = null, ?bool $isFound = null, ?int $pageNumber = null)
    {
        $this
            ->setCount($count)
            ->setEmployees($employees)
            ->setFoundIndex($foundIndex)
            ->setIsFound($isFound)
            ->setPageNumber($pageNumber);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\EmployeesInfoData
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get Employees value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeSlim|null
     */
    public function getEmployees(): ?\ArrayType\ArrayOfAcsEmployeeSlim
    {
        return isset($this->Employees) ? $this->Employees : null;
    }
    /**
     * Set Employees value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeSlim $employees
     * @return \StructType\EmployeesInfoData
     */
    public function setEmployees(?\ArrayType\ArrayOfAcsEmployeeSlim $employees = null): self
    {
        if (is_null($employees) || (is_array($employees) && empty($employees))) {
            unset($this->Employees);
        } else {
            $this->Employees = $employees;
        }
        
        return $this;
    }
    /**
     * Get FoundIndex value
     * @return int|null
     */
    public function getFoundIndex(): ?int
    {
        return $this->FoundIndex;
    }
    /**
     * Set FoundIndex value
     * @param int $foundIndex
     * @return \StructType\EmployeesInfoData
     */
    public function setFoundIndex(?int $foundIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($foundIndex) && !(is_int($foundIndex) || ctype_digit($foundIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($foundIndex, true), gettype($foundIndex)), __LINE__);
        }
        $this->FoundIndex = $foundIndex;
        
        return $this;
    }
    /**
     * Get IsFound value
     * @return bool|null
     */
    public function getIsFound(): ?bool
    {
        return $this->IsFound;
    }
    /**
     * Set IsFound value
     * @param bool $isFound
     * @return \StructType\EmployeesInfoData
     */
    public function setIsFound(?bool $isFound = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFound) && !is_bool($isFound)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFound, true), gettype($isFound)), __LINE__);
        }
        $this->IsFound = $isFound;
        
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \StructType\EmployeesInfoData
     */
    public function setPageNumber(?int $pageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        
        return $this;
    }
}
