<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncidentStatisticReportByWeekResponse StructType
 * @subpackage Structs
 */
class GetIncidentStatisticReportByWeekResponse extends AbstractStructBase
{
    /**
     * The GetIncidentStatisticReportByWeekResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GetIncidentStatisticReportByWeekResult = null;
    /**
     * Constructor method for GetIncidentStatisticReportByWeekResponse
     * @uses GetIncidentStatisticReportByWeekResponse::setGetIncidentStatisticReportByWeekResult()
     * @param string $getIncidentStatisticReportByWeekResult
     */
    public function __construct(?string $getIncidentStatisticReportByWeekResult = null)
    {
        $this
            ->setGetIncidentStatisticReportByWeekResult($getIncidentStatisticReportByWeekResult);
    }
    /**
     * Get GetIncidentStatisticReportByWeekResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetIncidentStatisticReportByWeekResult(): ?string
    {
        return isset($this->GetIncidentStatisticReportByWeekResult) ? $this->GetIncidentStatisticReportByWeekResult : null;
    }
    /**
     * Set GetIncidentStatisticReportByWeekResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getIncidentStatisticReportByWeekResult
     * @return \StructType\GetIncidentStatisticReportByWeekResponse
     */
    public function setGetIncidentStatisticReportByWeekResult(?string $getIncidentStatisticReportByWeekResult = null): self
    {
        // validation for constraint: string
        if (!is_null($getIncidentStatisticReportByWeekResult) && !is_string($getIncidentStatisticReportByWeekResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getIncidentStatisticReportByWeekResult, true), gettype($getIncidentStatisticReportByWeekResult)), __LINE__);
        }
        if (is_null($getIncidentStatisticReportByWeekResult) || (is_array($getIncidentStatisticReportByWeekResult) && empty($getIncidentStatisticReportByWeekResult))) {
            unset($this->GetIncidentStatisticReportByWeekResult);
        } else {
            $this->GetIncidentStatisticReportByWeekResult = $getIncidentStatisticReportByWeekResult;
        }
        
        return $this;
    }
}
