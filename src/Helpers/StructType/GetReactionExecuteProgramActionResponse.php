<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReactionExecuteProgramActionResponse StructType
 * @subpackage Structs
 */
class GetReactionExecuteProgramActionResponse extends AbstractStructBase
{
    /**
     * The GetReactionExecuteProgramActionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionExecuteProgramActionSlimInfo|null
     */
    protected ?\StructType\ReactionExecuteProgramActionSlimInfo $GetReactionExecuteProgramActionResult = null;
    /**
     * Constructor method for GetReactionExecuteProgramActionResponse
     * @uses GetReactionExecuteProgramActionResponse::setGetReactionExecuteProgramActionResult()
     * @param \StructType\ReactionExecuteProgramActionSlimInfo $getReactionExecuteProgramActionResult
     */
    public function __construct(?\StructType\ReactionExecuteProgramActionSlimInfo $getReactionExecuteProgramActionResult = null)
    {
        $this
            ->setGetReactionExecuteProgramActionResult($getReactionExecuteProgramActionResult);
    }
    /**
     * Get GetReactionExecuteProgramActionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionExecuteProgramActionSlimInfo|null
     */
    public function getGetReactionExecuteProgramActionResult(): ?\StructType\ReactionExecuteProgramActionSlimInfo
    {
        return isset($this->GetReactionExecuteProgramActionResult) ? $this->GetReactionExecuteProgramActionResult : null;
    }
    /**
     * Set GetReactionExecuteProgramActionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReactionExecuteProgramActionSlimInfo $getReactionExecuteProgramActionResult
     * @return \StructType\GetReactionExecuteProgramActionResponse
     */
    public function setGetReactionExecuteProgramActionResult(?\StructType\ReactionExecuteProgramActionSlimInfo $getReactionExecuteProgramActionResult = null): self
    {
        if (is_null($getReactionExecuteProgramActionResult) || (is_array($getReactionExecuteProgramActionResult) && empty($getReactionExecuteProgramActionResult))) {
            unset($this->GetReactionExecuteProgramActionResult);
        } else {
            $this->GetReactionExecuteProgramActionResult = $getReactionExecuteProgramActionResult;
        }
        
        return $this;
    }
}
