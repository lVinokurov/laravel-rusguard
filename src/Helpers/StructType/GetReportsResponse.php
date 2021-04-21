<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReportsResponse StructType
 * @subpackage Structs
 */
class GetReportsResponse extends AbstractStructBase
{
    /**
     * The GetReportsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfReportSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfReportSlimInfo $GetReportsResult = null;
    /**
     * Constructor method for GetReportsResponse
     * @uses GetReportsResponse::setGetReportsResult()
     * @param \ArrayType\ArrayOfReportSlimInfo $getReportsResult
     */
    public function __construct(?\ArrayType\ArrayOfReportSlimInfo $getReportsResult = null)
    {
        $this
            ->setGetReportsResult($getReportsResult);
    }
    /**
     * Get GetReportsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfReportSlimInfo|null
     */
    public function getGetReportsResult(): ?\ArrayType\ArrayOfReportSlimInfo
    {
        return isset($this->GetReportsResult) ? $this->GetReportsResult : null;
    }
    /**
     * Set GetReportsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfReportSlimInfo $getReportsResult
     * @return \StructType\GetReportsResponse
     */
    public function setGetReportsResult(?\ArrayType\ArrayOfReportSlimInfo $getReportsResult = null): self
    {
        if (is_null($getReportsResult) || (is_array($getReportsResult) && empty($getReportsResult))) {
            unset($this->GetReportsResult);
        } else {
            $this->GetReportsResult = $getReportsResult;
        }
        
        return $this;
    }
}
