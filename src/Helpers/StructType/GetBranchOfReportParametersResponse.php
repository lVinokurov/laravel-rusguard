<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBranchOfReportParametersResponse StructType
 * @subpackage Structs
 */
class GetBranchOfReportParametersResponse extends AbstractStructBase
{
    /**
     * The GetBranchOfReportParametersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfBranchInfo|null
     */
    protected ?\ArrayType\ArrayOfBranchInfo $GetBranchOfReportParametersResult = null;
    /**
     * Constructor method for GetBranchOfReportParametersResponse
     * @uses GetBranchOfReportParametersResponse::setGetBranchOfReportParametersResult()
     * @param \ArrayType\ArrayOfBranchInfo $getBranchOfReportParametersResult
     */
    public function __construct(?\ArrayType\ArrayOfBranchInfo $getBranchOfReportParametersResult = null)
    {
        $this
            ->setGetBranchOfReportParametersResult($getBranchOfReportParametersResult);
    }
    /**
     * Get GetBranchOfReportParametersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfBranchInfo|null
     */
    public function getGetBranchOfReportParametersResult(): ?\ArrayType\ArrayOfBranchInfo
    {
        return isset($this->GetBranchOfReportParametersResult) ? $this->GetBranchOfReportParametersResult : null;
    }
    /**
     * Set GetBranchOfReportParametersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfBranchInfo $getBranchOfReportParametersResult
     * @return \StructType\GetBranchOfReportParametersResponse
     */
    public function setGetBranchOfReportParametersResult(?\ArrayType\ArrayOfBranchInfo $getBranchOfReportParametersResult = null): self
    {
        if (is_null($getBranchOfReportParametersResult) || (is_array($getBranchOfReportParametersResult) && empty($getBranchOfReportParametersResult))) {
            unset($this->GetBranchOfReportParametersResult);
        } else {
            $this->GetBranchOfReportParametersResult = $getBranchOfReportParametersResult;
        }
        
        return $this;
    }
}
