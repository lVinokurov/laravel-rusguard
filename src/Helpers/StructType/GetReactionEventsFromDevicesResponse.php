<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReactionEventsFromDevicesResponse StructType
 * @subpackage Structs
 */
class GetReactionEventsFromDevicesResponse extends AbstractStructBase
{
    /**
     * The GetReactionEventsFromDevicesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionEventsFromDevicesSlimInfo|null
     */
    protected ?\StructType\ReactionEventsFromDevicesSlimInfo $GetReactionEventsFromDevicesResult = null;
    /**
     * Constructor method for GetReactionEventsFromDevicesResponse
     * @uses GetReactionEventsFromDevicesResponse::setGetReactionEventsFromDevicesResult()
     * @param \StructType\ReactionEventsFromDevicesSlimInfo $getReactionEventsFromDevicesResult
     */
    public function __construct(?\StructType\ReactionEventsFromDevicesSlimInfo $getReactionEventsFromDevicesResult = null)
    {
        $this
            ->setGetReactionEventsFromDevicesResult($getReactionEventsFromDevicesResult);
    }
    /**
     * Get GetReactionEventsFromDevicesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionEventsFromDevicesSlimInfo|null
     */
    public function getGetReactionEventsFromDevicesResult(): ?\StructType\ReactionEventsFromDevicesSlimInfo
    {
        return isset($this->GetReactionEventsFromDevicesResult) ? $this->GetReactionEventsFromDevicesResult : null;
    }
    /**
     * Set GetReactionEventsFromDevicesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReactionEventsFromDevicesSlimInfo $getReactionEventsFromDevicesResult
     * @return \StructType\GetReactionEventsFromDevicesResponse
     */
    public function setGetReactionEventsFromDevicesResult(?\StructType\ReactionEventsFromDevicesSlimInfo $getReactionEventsFromDevicesResult = null): self
    {
        if (is_null($getReactionEventsFromDevicesResult) || (is_array($getReactionEventsFromDevicesResult) && empty($getReactionEventsFromDevicesResult))) {
            unset($this->GetReactionEventsFromDevicesResult);
        } else {
            $this->GetReactionEventsFromDevicesResult = $getReactionEventsFromDevicesResult;
        }
        
        return $this;
    }
}
