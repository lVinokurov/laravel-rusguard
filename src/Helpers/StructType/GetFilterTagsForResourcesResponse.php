<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilterTagsForResourcesResponse StructType
 * @subpackage Structs
 */
class GetFilterTagsForResourcesResponse extends AbstractStructBase
{
    /**
     * The GetFilterTagsForResourcesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfResourceFilterTagsData|null
     */
    protected ?\ArrayType\ArrayOfResourceFilterTagsData $GetFilterTagsForResourcesResult = null;
    /**
     * Constructor method for GetFilterTagsForResourcesResponse
     * @uses GetFilterTagsForResourcesResponse::setGetFilterTagsForResourcesResult()
     * @param \ArrayType\ArrayOfResourceFilterTagsData $getFilterTagsForResourcesResult
     */
    public function __construct(?\ArrayType\ArrayOfResourceFilterTagsData $getFilterTagsForResourcesResult = null)
    {
        $this
            ->setGetFilterTagsForResourcesResult($getFilterTagsForResourcesResult);
    }
    /**
     * Get GetFilterTagsForResourcesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfResourceFilterTagsData|null
     */
    public function getGetFilterTagsForResourcesResult(): ?\ArrayType\ArrayOfResourceFilterTagsData
    {
        return isset($this->GetFilterTagsForResourcesResult) ? $this->GetFilterTagsForResourcesResult : null;
    }
    /**
     * Set GetFilterTagsForResourcesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfResourceFilterTagsData $getFilterTagsForResourcesResult
     * @return \StructType\GetFilterTagsForResourcesResponse
     */
    public function setGetFilterTagsForResourcesResult(?\ArrayType\ArrayOfResourceFilterTagsData $getFilterTagsForResourcesResult = null): self
    {
        if (is_null($getFilterTagsForResourcesResult) || (is_array($getFilterTagsForResourcesResult) && empty($getFilterTagsForResourcesResult))) {
            unset($this->GetFilterTagsForResourcesResult);
        } else {
            $this->GetFilterTagsForResourcesResult = $getFilterTagsForResourcesResult;
        }
        
        return $this;
    }
}
