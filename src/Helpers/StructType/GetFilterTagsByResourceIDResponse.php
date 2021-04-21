<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilterTagsByResourceIDResponse StructType
 * @subpackage Structs
 */
class GetFilterTagsByResourceIDResponse extends AbstractStructBase
{
    /**
     * The GetFilterTagsByResourceIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfResourceFilterTagsData|null
     */
    protected ?\ArrayType\ArrayOfResourceFilterTagsData $GetFilterTagsByResourceIDResult = null;
    /**
     * Constructor method for GetFilterTagsByResourceIDResponse
     * @uses GetFilterTagsByResourceIDResponse::setGetFilterTagsByResourceIDResult()
     * @param \ArrayType\ArrayOfResourceFilterTagsData $getFilterTagsByResourceIDResult
     */
    public function __construct(?\ArrayType\ArrayOfResourceFilterTagsData $getFilterTagsByResourceIDResult = null)
    {
        $this
            ->setGetFilterTagsByResourceIDResult($getFilterTagsByResourceIDResult);
    }
    /**
     * Get GetFilterTagsByResourceIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfResourceFilterTagsData|null
     */
    public function getGetFilterTagsByResourceIDResult(): ?\ArrayType\ArrayOfResourceFilterTagsData
    {
        return isset($this->GetFilterTagsByResourceIDResult) ? $this->GetFilterTagsByResourceIDResult : null;
    }
    /**
     * Set GetFilterTagsByResourceIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfResourceFilterTagsData $getFilterTagsByResourceIDResult
     * @return \StructType\GetFilterTagsByResourceIDResponse
     */
    public function setGetFilterTagsByResourceIDResult(?\ArrayType\ArrayOfResourceFilterTagsData $getFilterTagsByResourceIDResult = null): self
    {
        if (is_null($getFilterTagsByResourceIDResult) || (is_array($getFilterTagsByResourceIDResult) && empty($getFilterTagsByResourceIDResult))) {
            unset($this->GetFilterTagsByResourceIDResult);
        } else {
            $this->GetFilterTagsByResourceIDResult = $getFilterTagsByResourceIDResult;
        }
        
        return $this;
    }
}
