<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncidentStatisticReportResponse StructType
 * @subpackage Structs
 */
class GetIncidentStatisticReportResponse extends AbstractStructBase
{
    /**
     * The GetIncidentStatisticReportResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GetIncidentStatisticReportResult = null;
    /**
     * Constructor method for GetIncidentStatisticReportResponse
     * @uses GetIncidentStatisticReportResponse::setGetIncidentStatisticReportResult()
     * @param string $getIncidentStatisticReportResult
     */
    public function __construct(?string $getIncidentStatisticReportResult = null)
    {
        $this
            ->setGetIncidentStatisticReportResult($getIncidentStatisticReportResult);
    }
    /**
     * Get GetIncidentStatisticReportResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetIncidentStatisticReportResult(): ?string
    {
        return isset($this->GetIncidentStatisticReportResult) ? $this->GetIncidentStatisticReportResult : null;
    }
    /**
     * Set GetIncidentStatisticReportResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getIncidentStatisticReportResult
     * @return \StructType\GetIncidentStatisticReportResponse
     */
    public function setGetIncidentStatisticReportResult(?string $getIncidentStatisticReportResult = null): self
    {
        // validation for constraint: string
        if (!is_null($getIncidentStatisticReportResult) && !is_string($getIncidentStatisticReportResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getIncidentStatisticReportResult, true), gettype($getIncidentStatisticReportResult)), __LINE__);
        }
        if (is_null($getIncidentStatisticReportResult) || (is_array($getIncidentStatisticReportResult) && empty($getIncidentStatisticReportResult))) {
            unset($this->GetIncidentStatisticReportResult);
        } else {
            $this->GetIncidentStatisticReportResult = $getIncidentStatisticReportResult;
        }
        
        return $this;
    }
}
