<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReactionSendEmailActionResponse StructType
 * @subpackage Structs
 */
class GetReactionSendEmailActionResponse extends AbstractStructBase
{
    /**
     * The GetReactionSendEmailActionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionSendEmailActionSlimInfo|null
     */
    protected ?\StructType\ReactionSendEmailActionSlimInfo $GetReactionSendEmailActionResult = null;
    /**
     * Constructor method for GetReactionSendEmailActionResponse
     * @uses GetReactionSendEmailActionResponse::setGetReactionSendEmailActionResult()
     * @param \StructType\ReactionSendEmailActionSlimInfo $getReactionSendEmailActionResult
     */
    public function __construct(?\StructType\ReactionSendEmailActionSlimInfo $getReactionSendEmailActionResult = null)
    {
        $this
            ->setGetReactionSendEmailActionResult($getReactionSendEmailActionResult);
    }
    /**
     * Get GetReactionSendEmailActionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionSendEmailActionSlimInfo|null
     */
    public function getGetReactionSendEmailActionResult(): ?\StructType\ReactionSendEmailActionSlimInfo
    {
        return isset($this->GetReactionSendEmailActionResult) ? $this->GetReactionSendEmailActionResult : null;
    }
    /**
     * Set GetReactionSendEmailActionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReactionSendEmailActionSlimInfo $getReactionSendEmailActionResult
     * @return \StructType\GetReactionSendEmailActionResponse
     */
    public function setGetReactionSendEmailActionResult(?\StructType\ReactionSendEmailActionSlimInfo $getReactionSendEmailActionResult = null): self
    {
        if (is_null($getReactionSendEmailActionResult) || (is_array($getReactionSendEmailActionResult) && empty($getReactionSendEmailActionResult))) {
            unset($this->GetReactionSendEmailActionResult);
        } else {
            $this->GetReactionSendEmailActionResult = $getReactionSendEmailActionResult;
        }
        
        return $this;
    }
}
