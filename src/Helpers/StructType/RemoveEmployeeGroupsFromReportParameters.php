<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveEmployeeGroupsFromReportParameters StructType
 * @subpackage Structs
 */
class RemoveEmployeeGroupsFromReportParameters extends AbstractStructBase
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
     * The employeeGroupIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $employeeGroupIds = null;
    /**
     * Constructor method for RemoveEmployeeGroupsFromReportParameters
     * @uses RemoveEmployeeGroupsFromReportParameters::setReportId()
     * @uses RemoveEmployeeGroupsFromReportParameters::setEmployeeGroupIds()
     * @param string $reportId
     * @param \ArrayType\ArrayOfguid $employeeGroupIds
     */
    public function __construct(?string $reportId = null, ?\ArrayType\ArrayOfguid $employeeGroupIds = null)
    {
        $this
            ->setReportId($reportId)
            ->setEmployeeGroupIds($employeeGroupIds);
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
     * @return \StructType\RemoveEmployeeGroupsFromReportParameters
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
     * Get employeeGroupIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getEmployeeGroupIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->employeeGroupIds) ? $this->employeeGroupIds : null;
    }
    /**
     * Set employeeGroupIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $employeeGroupIds
     * @return \StructType\RemoveEmployeeGroupsFromReportParameters
     */
    public function setEmployeeGroupIds(?\ArrayType\ArrayOfguid $employeeGroupIds = null): self
    {
        if (is_null($employeeGroupIds) || (is_array($employeeGroupIds) && empty($employeeGroupIds))) {
            unset($this->employeeGroupIds);
        } else {
            $this->employeeGroupIds = $employeeGroupIds;
        }
        
        return $this;
    }
}
