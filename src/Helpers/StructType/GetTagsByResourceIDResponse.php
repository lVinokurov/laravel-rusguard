<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByResourceIDResponse StructType
 * @subpackage Structs
 */
class GetTagsByResourceIDResponse extends AbstractStructBase
{
    /**
     * The GetTagsByResourceIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfResourceTagsData|null
     */
    protected ?\ArrayType\ArrayOfResourceTagsData $GetTagsByResourceIDResult = null;
    /**
     * Constructor method for GetTagsByResourceIDResponse
     * @uses GetTagsByResourceIDResponse::setGetTagsByResourceIDResult()
     * @param \ArrayType\ArrayOfResourceTagsData $getTagsByResourceIDResult
     */
    public function __construct(?\ArrayType\ArrayOfResourceTagsData $getTagsByResourceIDResult = null)
    {
        $this
            ->setGetTagsByResourceIDResult($getTagsByResourceIDResult);
    }
    /**
     * Get GetTagsByResourceIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfResourceTagsData|null
     */
    public function getGetTagsByResourceIDResult(): ?\ArrayType\ArrayOfResourceTagsData
    {
        return isset($this->GetTagsByResourceIDResult) ? $this->GetTagsByResourceIDResult : null;
    }
    /**
     * Set GetTagsByResourceIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfResourceTagsData $getTagsByResourceIDResult
     * @return \StructType\GetTagsByResourceIDResponse
     */
    public function setGetTagsByResourceIDResult(?\ArrayType\ArrayOfResourceTagsData $getTagsByResourceIDResult = null): self
    {
        if (is_null($getTagsByResourceIDResult) || (is_array($getTagsByResourceIDResult) && empty($getTagsByResourceIDResult))) {
            unset($this->GetTagsByResourceIDResult);
        } else {
            $this->GetTagsByResourceIDResult = $getTagsByResourceIDResult;
        }
        
        return $this;
    }
}
