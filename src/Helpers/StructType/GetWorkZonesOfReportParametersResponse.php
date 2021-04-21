<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkZonesOfReportParametersResponse StructType
 * @subpackage Structs
 */
class GetWorkZonesOfReportParametersResponse extends AbstractStructBase
{
    /**
     * The GetWorkZonesOfReportParametersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetWorkZonesOfReportParametersResult = null;
    /**
     * Constructor method for GetWorkZonesOfReportParametersResponse
     * @uses GetWorkZonesOfReportParametersResponse::setGetWorkZonesOfReportParametersResult()
     * @param \ArrayType\ArrayOfguid $getWorkZonesOfReportParametersResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getWorkZonesOfReportParametersResult = null)
    {
        $this
            ->setGetWorkZonesOfReportParametersResult($getWorkZonesOfReportParametersResult);
    }
    /**
     * Get GetWorkZonesOfReportParametersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetWorkZonesOfReportParametersResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetWorkZonesOfReportParametersResult) ? $this->GetWorkZonesOfReportParametersResult : null;
    }
    /**
     * Set GetWorkZonesOfReportParametersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getWorkZonesOfReportParametersResult
     * @return \StructType\GetWorkZonesOfReportParametersResponse
     */
    public function setGetWorkZonesOfReportParametersResult(?\ArrayType\ArrayOfguid $getWorkZonesOfReportParametersResult = null): self
    {
        if (is_null($getWorkZonesOfReportParametersResult) || (is_array($getWorkZonesOfReportParametersResult) && empty($getWorkZonesOfReportParametersResult))) {
            unset($this->GetWorkZonesOfReportParametersResult);
        } else {
            $this->GetWorkZonesOfReportParametersResult = $getWorkZonesOfReportParametersResult;
        }
        
        return $this;
    }
}
