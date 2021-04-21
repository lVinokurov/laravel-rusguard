<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChildrenNetsResponse StructType
 * @subpackage Structs
 */
class GetChildrenNetsResponse extends AbstractStructBase
{
    /**
     * The GetChildrenNetsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLNetInfo|null
     */
    protected ?\ArrayType\ArrayOfLNetInfo $GetChildrenNetsResult = null;
    /**
     * Constructor method for GetChildrenNetsResponse
     * @uses GetChildrenNetsResponse::setGetChildrenNetsResult()
     * @param \ArrayType\ArrayOfLNetInfo $getChildrenNetsResult
     */
    public function __construct(?\ArrayType\ArrayOfLNetInfo $getChildrenNetsResult = null)
    {
        $this
            ->setGetChildrenNetsResult($getChildrenNetsResult);
    }
    /**
     * Get GetChildrenNetsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLNetInfo|null
     */
    public function getGetChildrenNetsResult(): ?\ArrayType\ArrayOfLNetInfo
    {
        return isset($this->GetChildrenNetsResult) ? $this->GetChildrenNetsResult : null;
    }
    /**
     * Set GetChildrenNetsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLNetInfo $getChildrenNetsResult
     * @return \StructType\GetChildrenNetsResponse
     */
    public function setGetChildrenNetsResult(?\ArrayType\ArrayOfLNetInfo $getChildrenNetsResult = null): self
    {
        if (is_null($getChildrenNetsResult) || (is_array($getChildrenNetsResult) && empty($getChildrenNetsResult))) {
            unset($this->GetChildrenNetsResult);
        } else {
            $this->GetChildrenNetsResult = $getChildrenNetsResult;
        }
        
        return $this;
    }
}
