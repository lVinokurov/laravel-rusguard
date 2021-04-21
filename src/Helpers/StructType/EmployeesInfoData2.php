<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeesInfoData2 StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeesInfoData2
 * @subpackage Structs
 */
class EmployeesInfoData2 extends AbstractStructBase
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
     * @var \ArrayType\ArrayOfAcsEmployeeInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeInfo $Employees = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * Constructor method for EmployeesInfoData2
     * @uses EmployeesInfoData2::setCount()
     * @uses EmployeesInfoData2::setEmployees()
     * @uses EmployeesInfoData2::setPageNumber()
     * @param int $count
     * @param \ArrayType\ArrayOfAcsEmployeeInfo $employees
     * @param int $pageNumber
     */
    public function __construct(?int $count = null, ?\ArrayType\ArrayOfAcsEmployeeInfo $employees = null, ?int $pageNumber = null)
    {
        $this
            ->setCount($count)
            ->setEmployees($employees)
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
     * @return \StructType\EmployeesInfoData2
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
     * @return \ArrayType\ArrayOfAcsEmployeeInfo|null
     */
    public function getEmployees(): ?\ArrayType\ArrayOfAcsEmployeeInfo
    {
        return isset($this->Employees) ? $this->Employees : null;
    }
    /**
     * Set Employees value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeInfo $employees
     * @return \StructType\EmployeesInfoData2
     */
    public function setEmployees(?\ArrayType\ArrayOfAcsEmployeeInfo $employees = null): self
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
     * @return \StructType\EmployeesInfoData2
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
