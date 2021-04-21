<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddReactionEvent StructType
 * @subpackage Structs
 */
class AddReactionEvent extends AbstractStructBase
{
    /**
     * The reactionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $reactionId = null;
    /**
     * The eventType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eventType = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionEventSaveData|null
     */
    protected ?\StructType\ReactionEventSaveData $data = null;
    /**
     * Constructor method for AddReactionEvent
     * @uses AddReactionEvent::setReactionId()
     * @uses AddReactionEvent::setEventType()
     * @uses AddReactionEvent::setData()
     * @param string $reactionId
     * @param string $eventType
     * @param \StructType\ReactionEventSaveData $data
     */
    public function __construct(?string $reactionId = null, ?string $eventType = null, ?\StructType\ReactionEventSaveData $data = null)
    {
        $this
            ->setReactionId($reactionId)
            ->setEventType($eventType)
            ->setData($data);
    }
    /**
     * Get reactionId value
     * @return string|null
     */
    public function getReactionId(): ?string
    {
        return $this->reactionId;
    }
    /**
     * Set reactionId value
     * @param string $reactionId
     * @return \StructType\AddReactionEvent
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
        $this->reactionId = $reactionId;
        
        return $this;
    }
    /**
     * Get eventType value
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }
    /**
     * Set eventType value
     * @uses \EnumType\ReactionEventType::valueIsValid()
     * @uses \EnumType\ReactionEventType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eventType
     * @return \StructType\AddReactionEvent
     */
    public function setEventType(?string $eventType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReactionEventType::valueIsValid($eventType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReactionEventType', is_array($eventType) ? implode(', ', $eventType) : var_export($eventType, true), implode(', ', \EnumType\ReactionEventType::getValidValues())), __LINE__);
        }
        $this->eventType = $eventType;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionEventSaveData|null
     */
    public function getData(): ?\StructType\ReactionEventSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReactionEventSaveData $data
     * @return \StructType\AddReactionEvent
     */
    public function setData(?\StructType\ReactionEventSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
