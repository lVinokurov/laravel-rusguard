<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilterTagsResponse StructType
 * @subpackage Structs
 */
class GetFilterTagsResponse extends AbstractStructBase
{
    /**
     * The GetFilterTagsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfFilterTagFullInfo|null
     */
    protected ?\ArrayType\ArrayOfFilterTagFullInfo $GetFilterTagsResult = null;
    /**
     * Constructor method for GetFilterTagsResponse
     * @uses GetFilterTagsResponse::setGetFilterTagsResult()
     * @param \ArrayType\ArrayOfFilterTagFullInfo $getFilterTagsResult
     */
    public function __construct(?\ArrayType\ArrayOfFilterTagFullInfo $getFilterTagsResult = null)
    {
        $this
            ->setGetFilterTagsResult($getFilterTagsResult);
    }
    /**
     * Get GetFilterTagsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfFilterTagFullInfo|null
     */
    public function getGetFilterTagsResult(): ?\ArrayType\ArrayOfFilterTagFullInfo
    {
        return isset($this->GetFilterTagsResult) ? $this->GetFilterTagsResult : null;
    }
    /**
     * Set GetFilterTagsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfFilterTagFullInfo $getFilterTagsResult
     * @return \StructType\GetFilterTagsResponse
     */
    public function setGetFilterTagsResult(?\ArrayType\ArrayOfFilterTagFullInfo $getFilterTagsResult = null): self
    {
        if (is_null($getFilterTagsResult) || (is_array($getFilterTagsResult) && empty($getFilterTagsResult))) {
            unset($this->GetFilterTagsResult);
        } else {
            $this->GetFilterTagsResult = $getFilterTagsResult;
        }
        
        return $this;
    }
}
