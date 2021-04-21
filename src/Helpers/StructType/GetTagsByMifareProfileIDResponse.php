<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByMifareProfileIDResponse StructType
 * @subpackage Structs
 */
class GetTagsByMifareProfileIDResponse extends AbstractStructBase
{
    /**
     * The GetTagsByMifareProfileIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfMifareProfileTagsData|null
     */
    protected ?\ArrayType\ArrayOfMifareProfileTagsData $GetTagsByMifareProfileIDResult = null;
    /**
     * Constructor method for GetTagsByMifareProfileIDResponse
     * @uses GetTagsByMifareProfileIDResponse::setGetTagsByMifareProfileIDResult()
     * @param \ArrayType\ArrayOfMifareProfileTagsData $getTagsByMifareProfileIDResult
     */
    public function __construct(?\ArrayType\ArrayOfMifareProfileTagsData $getTagsByMifareProfileIDResult = null)
    {
        $this
            ->setGetTagsByMifareProfileIDResult($getTagsByMifareProfileIDResult);
    }
    /**
     * Get GetTagsByMifareProfileIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfMifareProfileTagsData|null
     */
    public function getGetTagsByMifareProfileIDResult(): ?\ArrayType\ArrayOfMifareProfileTagsData
    {
        return isset($this->GetTagsByMifareProfileIDResult) ? $this->GetTagsByMifareProfileIDResult : null;
    }
    /**
     * Set GetTagsByMifareProfileIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfMifareProfileTagsData $getTagsByMifareProfileIDResult
     * @return \StructType\GetTagsByMifareProfileIDResponse
     */
    public function setGetTagsByMifareProfileIDResult(?\ArrayType\ArrayOfMifareProfileTagsData $getTagsByMifareProfileIDResult = null): self
    {
        if (is_null($getTagsByMifareProfileIDResult) || (is_array($getTagsByMifareProfileIDResult) && empty($getTagsByMifareProfileIDResult))) {
            unset($this->GetTagsByMifareProfileIDResult);
        } else {
            $this->GetTagsByMifareProfileIDResult = $getTagsByMifareProfileIDResult;
        }
        
        return $this;
    }
}
