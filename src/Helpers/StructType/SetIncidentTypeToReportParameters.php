<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetIncidentTypeToReportParameters StructType
 * @subpackage Structs
 */
class SetIncidentTypeToReportParameters extends AbstractStructBase
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
     * The incidentTypeIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $incidentTypeIds = null;
    /**
     * The isImportant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isImportant = null;
    /**
     * Constructor method for SetIncidentTypeToReportParameters
     * @uses SetIncidentTypeToReportParameters::setReportId()
     * @uses SetIncidentTypeToReportParameters::setIncidentTypeIds()
     * @uses SetIncidentTypeToReportParameters::setIsImportant()
     * @param string $reportId
     * @param \ArrayType\ArrayOfguid $incidentTypeIds
     * @param bool $isImportant
     */
    public function __construct(?string $reportId = null, ?\ArrayType\ArrayOfguid $incidentTypeIds = null, ?bool $isImportant = null)
    {
        $this
            ->setReportId($reportId)
            ->setIncidentTypeIds($incidentTypeIds)
            ->setIsImportant($isImportant);
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
     * @return \StructType\SetIncidentTypeToReportParameters
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
     * Get incidentTypeIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getIncidentTypeIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->incidentTypeIds) ? $this->incidentTypeIds : null;
    }
    /**
     * Set incidentTypeIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $incidentTypeIds
     * @return \StructType\SetIncidentTypeToReportParameters
     */
    public function setIncidentTypeIds(?\ArrayType\ArrayOfguid $incidentTypeIds = null): self
    {
        if (is_null($incidentTypeIds) || (is_array($incidentTypeIds) && empty($incidentTypeIds))) {
            unset($this->incidentTypeIds);
        } else {
            $this->incidentTypeIds = $incidentTypeIds;
        }
        
        return $this;
    }
    /**
     * Get isImportant value
     * @return bool|null
     */
    public function getIsImportant(): ?bool
    {
        return $this->isImportant;
    }
    /**
     * Set isImportant value
     * @param bool $isImportant
     * @return \StructType\SetIncidentTypeToReportParameters
     */
    public function setIsImportant(?bool $isImportant = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImportant) && !is_bool($isImportant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImportant, true), gettype($isImportant)), __LINE__);
        }
        $this->isImportant = $isImportant;
        
        return $this;
    }
}
