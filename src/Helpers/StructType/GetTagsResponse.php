<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsResponse StructType
 * @subpackage Structs
 */
class GetTagsResponse extends AbstractStructBase
{
    /**
     * The GetTagsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTagFullInfo|null
     */
    protected ?\ArrayType\ArrayOfTagFullInfo $GetTagsResult = null;
    /**
     * Constructor method for GetTagsResponse
     * @uses GetTagsResponse::setGetTagsResult()
     * @param \ArrayType\ArrayOfTagFullInfo $getTagsResult
     */
    public function __construct(?\ArrayType\ArrayOfTagFullInfo $getTagsResult = null)
    {
        $this
            ->setGetTagsResult($getTagsResult);
    }
    /**
     * Get GetTagsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTagFullInfo|null
     */
    public function getGetTagsResult(): ?\ArrayType\ArrayOfTagFullInfo
    {
        return isset($this->GetTagsResult) ? $this->GetTagsResult : null;
    }
    /**
     * Set GetTagsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTagFullInfo $getTagsResult
     * @return \StructType\GetTagsResponse
     */
    public function setGetTagsResult(?\ArrayType\ArrayOfTagFullInfo $getTagsResult = null): self
    {
        if (is_null($getTagsResult) || (is_array($getTagsResult) && empty($getTagsResult))) {
            unset($this->GetTagsResult);
        } else {
            $this->GetTagsResult = $getTagsResult;
        }
        
        return $this;
    }
}
