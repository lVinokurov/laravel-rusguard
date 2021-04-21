<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDriversOfReportParametersResponse StructType
 * @subpackage Structs
 */
class GetDriversOfReportParametersResponse extends AbstractStructBase
{
    /**
     * The GetDriversOfReportParametersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetDriversOfReportParametersResult = null;
    /**
     * Constructor method for GetDriversOfReportParametersResponse
     * @uses GetDriversOfReportParametersResponse::setGetDriversOfReportParametersResult()
     * @param \ArrayType\ArrayOfguid $getDriversOfReportParametersResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getDriversOfReportParametersResult = null)
    {
        $this
            ->setGetDriversOfReportParametersResult($getDriversOfReportParametersResult);
    }
    /**
     * Get GetDriversOfReportParametersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetDriversOfReportParametersResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetDriversOfReportParametersResult) ? $this->GetDriversOfReportParametersResult : null;
    }
    /**
     * Set GetDriversOfReportParametersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getDriversOfReportParametersResult
     * @return \StructType\GetDriversOfReportParametersResponse
     */
    public function setGetDriversOfReportParametersResult(?\ArrayType\ArrayOfguid $getDriversOfReportParametersResult = null): self
    {
        if (is_null($getDriversOfReportParametersResult) || (is_array($getDriversOfReportParametersResult) && empty($getDriversOfReportParametersResult))) {
            unset($this->GetDriversOfReportParametersResult);
        } else {
            $this->GetDriversOfReportParametersResult = $getDriversOfReportParametersResult;
        }
        
        return $this;
    }
}
