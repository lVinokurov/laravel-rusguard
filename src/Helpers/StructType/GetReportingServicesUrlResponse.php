<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReportingServicesUrlResponse StructType
 * @subpackage Structs
 */
class GetReportingServicesUrlResponse extends AbstractStructBase
{
    /**
     * The GetReportingServicesUrlResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReportingServicesData|null
     */
    protected ?\StructType\ReportingServicesData $GetReportingServicesUrlResult = null;
    /**
     * Constructor method for GetReportingServicesUrlResponse
     * @uses GetReportingServicesUrlResponse::setGetReportingServicesUrlResult()
     * @param \StructType\ReportingServicesData $getReportingServicesUrlResult
     */
    public function __construct(?\StructType\ReportingServicesData $getReportingServicesUrlResult = null)
    {
        $this
            ->setGetReportingServicesUrlResult($getReportingServicesUrlResult);
    }
    /**
     * Get GetReportingServicesUrlResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReportingServicesData|null
     */
    public function getGetReportingServicesUrlResult(): ?\StructType\ReportingServicesData
    {
        return isset($this->GetReportingServicesUrlResult) ? $this->GetReportingServicesUrlResult : null;
    }
    /**
     * Set GetReportingServicesUrlResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReportingServicesData $getReportingServicesUrlResult
     * @return \StructType\GetReportingServicesUrlResponse
     */
    public function setGetReportingServicesUrlResult(?\StructType\ReportingServicesData $getReportingServicesUrlResult = null): self
    {
        if (is_null($getReportingServicesUrlResult) || (is_array($getReportingServicesUrlResult) && empty($getReportingServicesUrlResult))) {
            unset($this->GetReportingServicesUrlResult);
        } else {
            $this->GetReportingServicesUrlResult = $getReportingServicesUrlResult;
        }
        
        return $this;
    }
}
