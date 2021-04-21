<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeesOfReportParametersResponse StructType
 * @subpackage Structs
 */
class GetEmployeesOfReportParametersResponse extends AbstractStructBase
{
    /**
     * The GetEmployeesOfReportParametersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetEmployeesOfReportParametersResult = null;
    /**
     * Constructor method for GetEmployeesOfReportParametersResponse
     * @uses GetEmployeesOfReportParametersResponse::setGetEmployeesOfReportParametersResult()
     * @param \ArrayType\ArrayOfguid $getEmployeesOfReportParametersResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getEmployeesOfReportParametersResult = null)
    {
        $this
            ->setGetEmployeesOfReportParametersResult($getEmployeesOfReportParametersResult);
    }
    /**
     * Get GetEmployeesOfReportParametersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetEmployeesOfReportParametersResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetEmployeesOfReportParametersResult) ? $this->GetEmployeesOfReportParametersResult : null;
    }
    /**
     * Set GetEmployeesOfReportParametersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getEmployeesOfReportParametersResult
     * @return \StructType\GetEmployeesOfReportParametersResponse
     */
    public function setGetEmployeesOfReportParametersResult(?\ArrayType\ArrayOfguid $getEmployeesOfReportParametersResult = null): self
    {
        if (is_null($getEmployeesOfReportParametersResult) || (is_array($getEmployeesOfReportParametersResult) && empty($getEmployeesOfReportParametersResult))) {
            unset($this->GetEmployeesOfReportParametersResult);
        } else {
            $this->GetEmployeesOfReportParametersResult = $getEmployeesOfReportParametersResult;
        }
        
        return $this;
    }
}
