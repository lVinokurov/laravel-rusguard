<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupsForReportParametersResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupsForReportParametersResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeeGroupsForReportParametersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeGroupReportInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeGroupReportInfo $GetAcsEmployeeGroupsForReportParametersResult = null;
    /**
     * Constructor method for GetAcsEmployeeGroupsForReportParametersResponse
     * @uses GetAcsEmployeeGroupsForReportParametersResponse::setGetAcsEmployeeGroupsForReportParametersResult()
     * @param \ArrayType\ArrayOfAcsEmployeeGroupReportInfo $getAcsEmployeeGroupsForReportParametersResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeGroupReportInfo $getAcsEmployeeGroupsForReportParametersResult = null)
    {
        $this
            ->setGetAcsEmployeeGroupsForReportParametersResult($getAcsEmployeeGroupsForReportParametersResult);
    }
    /**
     * Get GetAcsEmployeeGroupsForReportParametersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeGroupReportInfo|null
     */
    public function getGetAcsEmployeeGroupsForReportParametersResult(): ?\ArrayType\ArrayOfAcsEmployeeGroupReportInfo
    {
        return isset($this->GetAcsEmployeeGroupsForReportParametersResult) ? $this->GetAcsEmployeeGroupsForReportParametersResult : null;
    }
    /**
     * Set GetAcsEmployeeGroupsForReportParametersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeGroupReportInfo $getAcsEmployeeGroupsForReportParametersResult
     * @return \StructType\GetAcsEmployeeGroupsForReportParametersResponse
     */
    public function setGetAcsEmployeeGroupsForReportParametersResult(?\ArrayType\ArrayOfAcsEmployeeGroupReportInfo $getAcsEmployeeGroupsForReportParametersResult = null): self
    {
        if (is_null($getAcsEmployeeGroupsForReportParametersResult) || (is_array($getAcsEmployeeGroupsForReportParametersResult) && empty($getAcsEmployeeGroupsForReportParametersResult))) {
            unset($this->GetAcsEmployeeGroupsForReportParametersResult);
        } else {
            $this->GetAcsEmployeeGroupsForReportParametersResult = $getAcsEmployeeGroupsForReportParametersResult;
        }
        
        return $this;
    }
}
