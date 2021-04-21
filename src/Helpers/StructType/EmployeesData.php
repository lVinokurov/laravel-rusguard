<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeesData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeesData
 * @subpackage Structs
 */
class EmployeesData extends AbstractStructBase
{
    /**
     * The Employees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployeeCurentInfo|null
     */
    protected ?\ArrayType\ArrayOfEmployeeCurentInfo $Employees = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * The TotalCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalCount = null;
    /**
     * Constructor method for EmployeesData
     * @uses EmployeesData::setEmployees()
     * @uses EmployeesData::setPageNumber()
     * @uses EmployeesData::setPageSize()
     * @uses EmployeesData::setTotalCount()
     * @param \ArrayType\ArrayOfEmployeeCurentInfo $employees
     * @param int $pageNumber
     * @param int $pageSize
     * @param int $totalCount
     */
    public function __construct(?\ArrayType\ArrayOfEmployeeCurentInfo $employees = null, ?int $pageNumber = null, ?int $pageSize = null, ?int $totalCount = null)
    {
        $this
            ->setEmployees($employees)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setTotalCount($totalCount);
    }
    /**
     * Get Employees value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployeeCurentInfo|null
     */
    public function getEmployees(): ?\ArrayType\ArrayOfEmployeeCurentInfo
    {
        return isset($this->Employees) ? $this->Employees : null;
    }
    /**
     * Set Employees value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployeeCurentInfo $employees
     * @return \StructType\EmployeesData
     */
    public function setEmployees(?\ArrayType\ArrayOfEmployeeCurentInfo $employees = null): self
    {
        if (is_null($employees) || (is_array($employees) && empty($employees))) {
            unset($this->Employees);
        } else {
            $this->Employees = $employees;
        }
        
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
     * @return \StructType\EmployeesData
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
    /**
     * Get PageSize value
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize;
    }
    /**
     * Set PageSize value
     * @param int $pageSize
     * @return \StructType\EmployeesData
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;
        
        return $this;
    }
    /**
     * Get TotalCount value
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->TotalCount;
    }
    /**
     * Set TotalCount value
     * @param int $totalCount
     * @return \StructType\EmployeesData
     */
    public function setTotalCount(?int $totalCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalCount) && !(is_int($totalCount) || ctype_digit($totalCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalCount, true), gettype($totalCount)), __LINE__);
        }
        $this->TotalCount = $totalCount;
        
        return $this;
    }
}
