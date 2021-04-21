<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReactionRecordVideoActionResponse StructType
 * @subpackage Structs
 */
class GetReactionRecordVideoActionResponse extends AbstractStructBase
{
    /**
     * The GetReactionRecordVideoActionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionRecordVideoActionSlimInfo|null
     */
    protected ?\StructType\ReactionRecordVideoActionSlimInfo $GetReactionRecordVideoActionResult = null;
    /**
     * Constructor method for GetReactionRecordVideoActionResponse
     * @uses GetReactionRecordVideoActionResponse::setGetReactionRecordVideoActionResult()
     * @param \StructType\ReactionRecordVideoActionSlimInfo $getReactionRecordVideoActionResult
     */
    public function __construct(?\StructType\ReactionRecordVideoActionSlimInfo $getReactionRecordVideoActionResult = null)
    {
        $this
            ->setGetReactionRecordVideoActionResult($getReactionRecordVideoActionResult);
    }
    /**
     * Get GetReactionRecordVideoActionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionRecordVideoActionSlimInfo|null
     */
    public function getGetReactionRecordVideoActionResult(): ?\StructType\ReactionRecordVideoActionSlimInfo
    {
        return isset($this->GetReactionRecordVideoActionResult) ? $this->GetReactionRecordVideoActionResult : null;
    }
    /**
     * Set GetReactionRecordVideoActionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReactionRecordVideoActionSlimInfo $getReactionRecordVideoActionResult
     * @return \StructType\GetReactionRecordVideoActionResponse
     */
    public function setGetReactionRecordVideoActionResult(?\StructType\ReactionRecordVideoActionSlimInfo $getReactionRecordVideoActionResult = null): self
    {
        if (is_null($getReactionRecordVideoActionResult) || (is_array($getReactionRecordVideoActionResult) && empty($getReactionRecordVideoActionResult))) {
            unset($this->GetReactionRecordVideoActionResult);
        } else {
            $this->GetReactionRecordVideoActionResult = $getReactionRecordVideoActionResult;
        }
        
        return $this;
    }
}
