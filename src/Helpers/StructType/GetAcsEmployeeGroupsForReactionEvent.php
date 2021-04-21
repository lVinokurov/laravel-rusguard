<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupsForReactionEvent StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupsForReactionEvent extends AbstractStructBase
{
    /**
     * The reactionEventId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $reactionEventId = null;
    /**
     * Constructor method for GetAcsEmployeeGroupsForReactionEvent
     * @uses GetAcsEmployeeGroupsForReactionEvent::setReactionEventId()
     * @param string $reactionEventId
     */
    public function __construct(?string $reactionEventId = null)
    {
        $this
            ->setReactionEventId($reactionEventId);
    }
    /**
     * Get reactionEventId value
     * @return string|null
     */
    public function getReactionEventId(): ?string
    {
        return $this->reactionEventId;
    }
    /**
     * Set reactionEventId value
     * @param string $reactionEventId
     * @return \StructType\GetAcsEmployeeGroupsForReactionEvent
     */
    public function setReactionEventId(?string $reactionEventId = null): self
    {
        // validation for constraint: string
        if (!is_null($reactionEventId) && !is_string($reactionEventId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reactionEventId, true), gettype($reactionEventId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($reactionEventId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $reactionEventId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($reactionEventId, true)), __LINE__);
        }
        $this->reactionEventId = $reactionEventId;
        
        return $this;
    }
}
