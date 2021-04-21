<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReactionFullInfoResponse StructType
 * @subpackage Structs
 */
class GetReactionFullInfoResponse extends AbstractStructBase
{
    /**
     * The GetReactionFullInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionFullInfo|null
     */
    protected ?\StructType\ReactionFullInfo $GetReactionFullInfoResult = null;
    /**
     * Constructor method for GetReactionFullInfoResponse
     * @uses GetReactionFullInfoResponse::setGetReactionFullInfoResult()
     * @param \StructType\ReactionFullInfo $getReactionFullInfoResult
     */
    public function __construct(?\StructType\ReactionFullInfo $getReactionFullInfoResult = null)
    {
        $this
            ->setGetReactionFullInfoResult($getReactionFullInfoResult);
    }
    /**
     * Get GetReactionFullInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionFullInfo|null
     */
    public function getGetReactionFullInfoResult(): ?\StructType\ReactionFullInfo
    {
        return isset($this->GetReactionFullInfoResult) ? $this->GetReactionFullInfoResult : null;
    }
    /**
     * Set GetReactionFullInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReactionFullInfo $getReactionFullInfoResult
     * @return \StructType\GetReactionFullInfoResponse
     */
    public function setGetReactionFullInfoResult(?\StructType\ReactionFullInfo $getReactionFullInfoResult = null): self
    {
        if (is_null($getReactionFullInfoResult) || (is_array($getReactionFullInfoResult) && empty($getReactionFullInfoResult))) {
            unset($this->GetReactionFullInfoResult);
        } else {
            $this->GetReactionFullInfoResult = $getReactionFullInfoResult;
        }
        
        return $this;
    }
}
