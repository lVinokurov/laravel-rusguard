<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeGroupsOfReportParametersResponse StructType
 * @subpackage Structs
 */
class GetEmployeeGroupsOfReportParametersResponse extends AbstractStructBase
{
    /**
     * The GetEmployeeGroupsOfReportParametersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetEmployeeGroupsOfReportParametersResult = null;
    /**
     * Constructor method for GetEmployeeGroupsOfReportParametersResponse
     * @uses GetEmployeeGroupsOfReportParametersResponse::setGetEmployeeGroupsOfReportParametersResult()
     * @param \ArrayType\ArrayOfguid $getEmployeeGroupsOfReportParametersResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getEmployeeGroupsOfReportParametersResult = null)
    {
        $this
            ->setGetEmployeeGroupsOfReportParametersResult($getEmployeeGroupsOfReportParametersResult);
    }
    /**
     * Get GetEmployeeGroupsOfReportParametersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetEmployeeGroupsOfReportParametersResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetEmployeeGroupsOfReportParametersResult) ? $this->GetEmployeeGroupsOfReportParametersResult : null;
    }
    /**
     * Set GetEmployeeGroupsOfReportParametersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getEmployeeGroupsOfReportParametersResult
     * @return \StructType\GetEmployeeGroupsOfReportParametersResponse
     */
    public function setGetEmployeeGroupsOfReportParametersResult(?\ArrayType\ArrayOfguid $getEmployeeGroupsOfReportParametersResult = null): self
    {
        if (is_null($getEmployeeGroupsOfReportParametersResult) || (is_array($getEmployeeGroupsOfReportParametersResult) && empty($getEmployeeGroupsOfReportParametersResult))) {
            unset($this->GetEmployeeGroupsOfReportParametersResult);
        } else {
            $this->GetEmployeeGroupsOfReportParametersResult = $getEmployeeGroupsOfReportParametersResult;
        }
        
        return $this;
    }
}
