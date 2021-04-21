<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReactionEventSlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionEventSlimInfo
 * @subpackage Structs
 */
class ReactionEventSlimInfo extends ReactionEventSaveData
{
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EventType = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The ReactionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ReactionId = null;
    /**
     * Constructor method for ReactionEventSlimInfo
     * @uses ReactionEventSlimInfo::setEventType()
     * @uses ReactionEventSlimInfo::setId()
     * @uses ReactionEventSlimInfo::setReactionId()
     * @param string $eventType
     * @param string $id
     * @param string $reactionId
     */
    public function __construct(?string $eventType = null, ?string $id = null, ?string $reactionId = null)
    {
        $this
            ->setEventType($eventType)
            ->setId($id)
            ->setReactionId($reactionId);
    }
    /**
     * Get EventType value
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @uses \EnumType\ReactionEventType::valueIsValid()
     * @uses \EnumType\ReactionEventType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eventType
     * @return \StructType\ReactionEventSlimInfo
     */
    public function setEventType(?string $eventType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReactionEventType::valueIsValid($eventType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReactionEventType', is_array($eventType) ? implode(', ', $eventType) : var_export($eventType, true), implode(', ', \EnumType\ReactionEventType::getValidValues())), __LINE__);
        }
        $this->EventType = $eventType;
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\ReactionEventSlimInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get ReactionId value
     * @return string|null
     */
    public function getReactionId(): ?string
    {
        return $this->ReactionId;
    }
    /**
     * Set ReactionId value
     * @param string $reactionId
     * @return \StructType\ReactionEventSlimInfo
     */
    public function setReactionId(?string $reactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($reactionId) && !is_string($reactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reactionId, true), gettype($reactionId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($reactionId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $reactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($reactionId, true)), __LINE__);
        }
        $this->ReactionId = $reactionId;
        
        return $this;
    }
}
