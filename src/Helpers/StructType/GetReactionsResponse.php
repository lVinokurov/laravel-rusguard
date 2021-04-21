<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReactionsResponse StructType
 * @subpackage Structs
 */
class GetReactionsResponse extends AbstractStructBase
{
    /**
     * The GetReactionsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfReactionSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfReactionSlimInfo $GetReactionsResult = null;
    /**
     * Constructor method for GetReactionsResponse
     * @uses GetReactionsResponse::setGetReactionsResult()
     * @param \ArrayType\ArrayOfReactionSlimInfo $getReactionsResult
     */
    public function __construct(?\ArrayType\ArrayOfReactionSlimInfo $getReactionsResult = null)
    {
        $this
            ->setGetReactionsResult($getReactionsResult);
    }
    /**
     * Get GetReactionsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfReactionSlimInfo|null
     */
    public function getGetReactionsResult(): ?\ArrayType\ArrayOfReactionSlimInfo
    {
        return isset($this->GetReactionsResult) ? $this->GetReactionsResult : null;
    }
    /**
     * Set GetReactionsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfReactionSlimInfo $getReactionsResult
     * @return \StructType\GetReactionsResponse
     */
    public function setGetReactionsResult(?\ArrayType\ArrayOfReactionSlimInfo $getReactionsResult = null): self
    {
        if (is_null($getReactionsResult) || (is_array($getReactionsResult) && empty($getReactionsResult))) {
            unset($this->GetReactionsResult);
        } else {
            $this->GetReactionsResult = $getReactionsResult;
        }
        
        return $this;
    }
}
