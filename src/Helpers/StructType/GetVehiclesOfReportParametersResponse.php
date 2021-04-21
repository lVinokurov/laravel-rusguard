<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehiclesOfReportParametersResponse StructType
 * @subpackage Structs
 */
class GetVehiclesOfReportParametersResponse extends AbstractStructBase
{
    /**
     * The GetVehiclesOfReportParametersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetVehiclesOfReportParametersResult = null;
    /**
     * Constructor method for GetVehiclesOfReportParametersResponse
     * @uses GetVehiclesOfReportParametersResponse::setGetVehiclesOfReportParametersResult()
     * @param \ArrayType\ArrayOfguid $getVehiclesOfReportParametersResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getVehiclesOfReportParametersResult = null)
    {
        $this
            ->setGetVehiclesOfReportParametersResult($getVehiclesOfReportParametersResult);
    }
    /**
     * Get GetVehiclesOfReportParametersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetVehiclesOfReportParametersResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetVehiclesOfReportParametersResult) ? $this->GetVehiclesOfReportParametersResult : null;
    }
    /**
     * Set GetVehiclesOfReportParametersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getVehiclesOfReportParametersResult
     * @return \StructType\GetVehiclesOfReportParametersResponse
     */
    public function setGetVehiclesOfReportParametersResult(?\ArrayType\ArrayOfguid $getVehiclesOfReportParametersResult = null): self
    {
        if (is_null($getVehiclesOfReportParametersResult) || (is_array($getVehiclesOfReportParametersResult) && empty($getVehiclesOfReportParametersResult))) {
            unset($this->GetVehiclesOfReportParametersResult);
        } else {
            $this->GetVehiclesOfReportParametersResult = $getVehiclesOfReportParametersResult;
        }
        
        return $this;
    }
}
