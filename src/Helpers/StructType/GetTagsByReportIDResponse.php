<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByReportIDResponse StructType
 * @subpackage Structs
 */
class GetTagsByReportIDResponse extends AbstractStructBase
{
    /**
     * The GetTagsByReportIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfReportTagsData|null
     */
    protected ?\ArrayType\ArrayOfReportTagsData $GetTagsByReportIDResult = null;
    /**
     * Constructor method for GetTagsByReportIDResponse
     * @uses GetTagsByReportIDResponse::setGetTagsByReportIDResult()
     * @param \ArrayType\ArrayOfReportTagsData $getTagsByReportIDResult
     */
    public function __construct(?\ArrayType\ArrayOfReportTagsData $getTagsByReportIDResult = null)
    {
        $this
            ->setGetTagsByReportIDResult($getTagsByReportIDResult);
    }
    /**
     * Get GetTagsByReportIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfReportTagsData|null
     */
    public function getGetTagsByReportIDResult(): ?\ArrayType\ArrayOfReportTagsData
    {
        return isset($this->GetTagsByReportIDResult) ? $this->GetTagsByReportIDResult : null;
    }
    /**
     * Set GetTagsByReportIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfReportTagsData $getTagsByReportIDResult
     * @return \StructType\GetTagsByReportIDResponse
     */
    public function setGetTagsByReportIDResult(?\ArrayType\ArrayOfReportTagsData $getTagsByReportIDResult = null): self
    {
        if (is_null($getTagsByReportIDResult) || (is_array($getTagsByReportIDResult) && empty($getTagsByReportIDResult))) {
            unset($this->GetTagsByReportIDResult);
        } else {
            $this->GetTagsByReportIDResult = $getTagsByReportIDResult;
        }
        
        return $this;
    }
}
