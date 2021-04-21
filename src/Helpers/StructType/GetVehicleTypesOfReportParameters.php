<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehicleTypesOfReportParameters StructType
 * @subpackage Structs
 */
class GetVehicleTypesOfReportParameters extends AbstractStructBase
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
     * Constructor method for GetVehicleTypesOfReportParameters
     * @uses GetVehicleTypesOfReportParameters::setReportId()
     * @param string $reportId
     */
    public function __construct(?string $reportId = null)
    {
        $this
            ->setReportId($reportId);
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
     * @return \StructType\GetVehicleTypesOfReportParameters
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
}
