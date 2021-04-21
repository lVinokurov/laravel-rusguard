<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehicleTypesOfReportParametersResponse StructType
 * @subpackage Structs
 */
class GetVehicleTypesOfReportParametersResponse extends AbstractStructBase
{
    /**
     * The GetVehicleTypesOfReportParametersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetVehicleTypesOfReportParametersResult = null;
    /**
     * Constructor method for GetVehicleTypesOfReportParametersResponse
     * @uses GetVehicleTypesOfReportParametersResponse::setGetVehicleTypesOfReportParametersResult()
     * @param \ArrayType\ArrayOfguid $getVehicleTypesOfReportParametersResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getVehicleTypesOfReportParametersResult = null)
    {
        $this
            ->setGetVehicleTypesOfReportParametersResult($getVehicleTypesOfReportParametersResult);
    }
    /**
     * Get GetVehicleTypesOfReportParametersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetVehicleTypesOfReportParametersResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetVehicleTypesOfReportParametersResult) ? $this->GetVehicleTypesOfReportParametersResult : null;
    }
    /**
     * Set GetVehicleTypesOfReportParametersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getVehicleTypesOfReportParametersResult
     * @return \StructType\GetVehicleTypesOfReportParametersResponse
     */
    public function setGetVehicleTypesOfReportParametersResult(?\ArrayType\ArrayOfguid $getVehicleTypesOfReportParametersResult = null): self
    {
        if (is_null($getVehicleTypesOfReportParametersResult) || (is_array($getVehicleTypesOfReportParametersResult) && empty($getVehicleTypesOfReportParametersResult))) {
            unset($this->GetVehicleTypesOfReportParametersResult);
        } else {
            $this->GetVehicleTypesOfReportParametersResult = $getVehicleTypesOfReportParametersResult;
        }
        
        return $this;
    }
}
