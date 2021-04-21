<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBranchToReportParameters StructType
 * @subpackage Structs
 */
class SetBranchToReportParameters extends AbstractStructBase
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
     * The branchesIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $branchesIds = null;
    /**
     * Constructor method for SetBranchToReportParameters
     * @uses SetBranchToReportParameters::setReportId()
     * @uses SetBranchToReportParameters::setBranchesIds()
     * @param string $reportId
     * @param \ArrayType\ArrayOfguid $branchesIds
     */
    public function __construct(?string $reportId = null, ?\ArrayType\ArrayOfguid $branchesIds = null)
    {
        $this
            ->setReportId($reportId)
            ->setBranchesIds($branchesIds);
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
     * @return \StructType\SetBranchToReportParameters
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
     * Get branchesIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getBranchesIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->branchesIds) ? $this->branchesIds : null;
    }
    /**
     * Set branchesIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $branchesIds
     * @return \StructType\SetBranchToReportParameters
     */
    public function setBranchesIds(?\ArrayType\ArrayOfguid $branchesIds = null): self
    {
        if (is_null($branchesIds) || (is_array($branchesIds) && empty($branchesIds))) {
            unset($this->branchesIds);
        } else {
            $this->branchesIds = $branchesIds;
        }
        
        return $this;
    }
}
