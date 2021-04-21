<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReactionSendSMSActionResponse StructType
 * @subpackage Structs
 */
class GetReactionSendSMSActionResponse extends AbstractStructBase
{
    /**
     * The GetReactionSendSMSActionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionSendSMSActionSlimInfo|null
     */
    protected ?\StructType\ReactionSendSMSActionSlimInfo $GetReactionSendSMSActionResult = null;
    /**
     * Constructor method for GetReactionSendSMSActionResponse
     * @uses GetReactionSendSMSActionResponse::setGetReactionSendSMSActionResult()
     * @param \StructType\ReactionSendSMSActionSlimInfo $getReactionSendSMSActionResult
     */
    public function __construct(?\StructType\ReactionSendSMSActionSlimInfo $getReactionSendSMSActionResult = null)
    {
        $this
            ->setGetReactionSendSMSActionResult($getReactionSendSMSActionResult);
    }
    /**
     * Get GetReactionSendSMSActionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionSendSMSActionSlimInfo|null
     */
    public function getGetReactionSendSMSActionResult(): ?\StructType\ReactionSendSMSActionSlimInfo
    {
        return isset($this->GetReactionSendSMSActionResult) ? $this->GetReactionSendSMSActionResult : null;
    }
    /**
     * Set GetReactionSendSMSActionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReactionSendSMSActionSlimInfo $getReactionSendSMSActionResult
     * @return \StructType\GetReactionSendSMSActionResponse
     */
    public function setGetReactionSendSMSActionResult(?\StructType\ReactionSendSMSActionSlimInfo $getReactionSendSMSActionResult = null): self
    {
        if (is_null($getReactionSendSMSActionResult) || (is_array($getReactionSendSMSActionResult) && empty($getReactionSendSMSActionResult))) {
            unset($this->GetReactionSendSMSActionResult);
        } else {
            $this->GetReactionSendSMSActionResult = $getReactionSendSMSActionResult;
        }
        
        return $this;
    }
}
