<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncidentTypeOfReportParametersResponse StructType
 * @subpackage Structs
 */
class GetIncidentTypeOfReportParametersResponse extends AbstractStructBase
{
    /**
     * The GetIncidentTypeOfReportParametersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfIncidentTypeInfo|null
     */
    protected ?\ArrayType\ArrayOfIncidentTypeInfo $GetIncidentTypeOfReportParametersResult = null;
    /**
     * Constructor method for GetIncidentTypeOfReportParametersResponse
     * @uses GetIncidentTypeOfReportParametersResponse::setGetIncidentTypeOfReportParametersResult()
     * @param \ArrayType\ArrayOfIncidentTypeInfo $getIncidentTypeOfReportParametersResult
     */
    public function __construct(?\ArrayType\ArrayOfIncidentTypeInfo $getIncidentTypeOfReportParametersResult = null)
    {
        $this
            ->setGetIncidentTypeOfReportParametersResult($getIncidentTypeOfReportParametersResult);
    }
    /**
     * Get GetIncidentTypeOfReportParametersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfIncidentTypeInfo|null
     */
    public function getGetIncidentTypeOfReportParametersResult(): ?\ArrayType\ArrayOfIncidentTypeInfo
    {
        return isset($this->GetIncidentTypeOfReportParametersResult) ? $this->GetIncidentTypeOfReportParametersResult : null;
    }
    /**
     * Set GetIncidentTypeOfReportParametersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfIncidentTypeInfo $getIncidentTypeOfReportParametersResult
     * @return \StructType\GetIncidentTypeOfReportParametersResponse
     */
    public function setGetIncidentTypeOfReportParametersResult(?\ArrayType\ArrayOfIncidentTypeInfo $getIncidentTypeOfReportParametersResult = null): self
    {
        if (is_null($getIncidentTypeOfReportParametersResult) || (is_array($getIncidentTypeOfReportParametersResult) && empty($getIncidentTypeOfReportParametersResult))) {
            unset($this->GetIncidentTypeOfReportParametersResult);
        } else {
            $this->GetIncidentTypeOfReportParametersResult = $getIncidentTypeOfReportParametersResult;
        }
        
        return $this;
    }
}
