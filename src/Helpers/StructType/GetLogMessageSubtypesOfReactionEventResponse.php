<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLogMessageSubtypesOfReactionEventResponse StructType
 * @subpackage Structs
 */
class GetLogMessageSubtypesOfReactionEventResponse extends AbstractStructBase
{
    /**
     * The GetLogMessageSubtypesOfReactionEventResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLogMsgSubType|null
     */
    protected ?\ArrayType\ArrayOfLogMsgSubType $GetLogMessageSubtypesOfReactionEventResult = null;
    /**
     * Constructor method for GetLogMessageSubtypesOfReactionEventResponse
     * @uses GetLogMessageSubtypesOfReactionEventResponse::setGetLogMessageSubtypesOfReactionEventResult()
     * @param \ArrayType\ArrayOfLogMsgSubType $getLogMessageSubtypesOfReactionEventResult
     */
    public function __construct(?\ArrayType\ArrayOfLogMsgSubType $getLogMessageSubtypesOfReactionEventResult = null)
    {
        $this
            ->setGetLogMessageSubtypesOfReactionEventResult($getLogMessageSubtypesOfReactionEventResult);
    }
    /**
     * Get GetLogMessageSubtypesOfReactionEventResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLogMsgSubType|null
     */
    public function getGetLogMessageSubtypesOfReactionEventResult(): ?\ArrayType\ArrayOfLogMsgSubType
    {
        return isset($this->GetLogMessageSubtypesOfReactionEventResult) ? $this->GetLogMessageSubtypesOfReactionEventResult : null;
    }
    /**
     * Set GetLogMessageSubtypesOfReactionEventResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLogMsgSubType $getLogMessageSubtypesOfReactionEventResult
     * @return \StructType\GetLogMessageSubtypesOfReactionEventResponse
     */
    public function setGetLogMessageSubtypesOfReactionEventResult(?\ArrayType\ArrayOfLogMsgSubType $getLogMessageSubtypesOfReactionEventResult = null): self
    {
        if (is_null($getLogMessageSubtypesOfReactionEventResult) || (is_array($getLogMessageSubtypesOfReactionEventResult) && empty($getLogMessageSubtypesOfReactionEventResult))) {
            unset($this->GetLogMessageSubtypesOfReactionEventResult);
        } else {
            $this->GetLogMessageSubtypesOfReactionEventResult = $getLogMessageSubtypesOfReactionEventResult;
        }
        
        return $this;
    }
}
