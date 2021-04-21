<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncidentArchiveReportResponse StructType
 * @subpackage Structs
 */
class GetIncidentArchiveReportResponse extends AbstractStructBase
{
    /**
     * The GetIncidentArchiveReportResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GetIncidentArchiveReportResult = null;
    /**
     * Constructor method for GetIncidentArchiveReportResponse
     * @uses GetIncidentArchiveReportResponse::setGetIncidentArchiveReportResult()
     * @param string $getIncidentArchiveReportResult
     */
    public function __construct(?string $getIncidentArchiveReportResult = null)
    {
        $this
            ->setGetIncidentArchiveReportResult($getIncidentArchiveReportResult);
    }
    /**
     * Get GetIncidentArchiveReportResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetIncidentArchiveReportResult(): ?string
    {
        return isset($this->GetIncidentArchiveReportResult) ? $this->GetIncidentArchiveReportResult : null;
    }
    /**
     * Set GetIncidentArchiveReportResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getIncidentArchiveReportResult
     * @return \StructType\GetIncidentArchiveReportResponse
     */
    public function setGetIncidentArchiveReportResult(?string $getIncidentArchiveReportResult = null): self
    {
        // validation for constraint: string
        if (!is_null($getIncidentArchiveReportResult) && !is_string($getIncidentArchiveReportResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getIncidentArchiveReportResult, true), gettype($getIncidentArchiveReportResult)), __LINE__);
        }
        if (is_null($getIncidentArchiveReportResult) || (is_array($getIncidentArchiveReportResult) && empty($getIncidentArchiveReportResult))) {
            unset($this->GetIncidentArchiveReportResult);
        } else {
            $this->GetIncidentArchiveReportResult = $getIncidentArchiveReportResult;
        }
        
        return $this;
    }
}
