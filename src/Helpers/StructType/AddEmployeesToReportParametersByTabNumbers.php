<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmployeesToReportParametersByTabNumbers StructType
 * @subpackage Structs
 */
class AddEmployeesToReportParametersByTabNumbers extends AbstractStructBase
{
    /**
     * The reportId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $reportId = null;
    /**
     * The emplGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $emplGroupId = null;
    /**
     * The employeeTabNumersIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfint|null
     */
    protected ?\ArrayType\ArrayOfint $employeeTabNumersIds = null;
    /**
     * Constructor method for AddEmployeesToReportParametersByTabNumbers
     * @uses AddEmployeesToReportParametersByTabNumbers::setReportId()
     * @uses AddEmployeesToReportParametersByTabNumbers::setEmplGroupId()
     * @uses AddEmployeesToReportParametersByTabNumbers::setEmployeeTabNumersIds()
     * @param string $reportId
     * @param string $emplGroupId
     * @param \ArrayType\ArrayOfint $employeeTabNumersIds
     */
    public function __construct(?string $reportId = null, ?string $emplGroupId = null, ?\ArrayType\ArrayOfint $employeeTabNumersIds = null)
    {
        $this
            ->setReportId($reportId)
            ->setEmplGroupId($emplGroupId)
            ->setEmployeeTabNumersIds($employeeTabNumersIds);
    }
    /**
     * Get reportId value
     * @return string|null
     */
    public function getReportId(): ?string
    {
        return $this->reportId;
    }
    /**
     * Set reportId value
     * @param string $reportId
     * @return \StructType\AddEmployeesToReportParametersByTabNumbers
     */
    public function setReportId(?string $reportId = null): self
    {
        // validation for constraint: string
        if (!is_null($reportId) && !is_string($reportId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportId, true), gettype($reportId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($reportId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $reportId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($reportId, true)), __LINE__);
        }
        $this->reportId = $reportId;
        
        return $this;
    }
    /**
     * Get emplGroupId value
     * @return string|null
     */
    public function getEmplGroupId(): ?string
    {
        return $this->emplGroupId;
    }
    /**
     * Set emplGroupId value
     * @param string $emplGroupId
     * @return \StructType\AddEmployeesToReportParametersByTabNumbers
     */
    public function setEmplGroupId(?string $emplGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($emplGroupId) && !is_string($emplGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emplGroupId, true), gettype($emplGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($emplGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $emplGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($emplGroupId, true)), __LINE__);
        }
        $this->emplGroupId = $emplGroupId;
        
        return $this;
    }
    /**
     * Get employeeTabNumersIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfint|null
     */
    public function getEmployeeTabNumersIds(): ?\ArrayType\ArrayOfint
    {
        return isset($this->employeeTabNumersIds) ? $this->employeeTabNumersIds : null;
    }
    /**
     * Set employeeTabNumersIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfint $employeeTabNumersIds
     * @return \StructType\AddEmployeesToReportParametersByTabNumbers
     */
    public function setEmployeeTabNumersIds(?\ArrayType\ArrayOfint $employeeTabNumersIds = null): self
    {
        if (is_null($employeeTabNumersIds) || (is_array($employeeTabNumersIds) && empty($employeeTabNumersIds))) {
            unset($this->employeeTabNumersIds);
        } else {
            $this->employeeTabNumersIds = $employeeTabNumersIds;
        }
        
        return $this;
    }
}
