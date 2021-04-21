<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReactionActionSlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionActionSlimInfo
 * @subpackage Structs
 */
class ReactionActionSlimInfo extends ReactionActionSaveData
{
    /**
     * The ActionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ActionType = null;
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
     * Constructor method for ReactionActionSlimInfo
     * @uses ReactionActionSlimInfo::setActionType()
     * @uses ReactionActionSlimInfo::setId()
     * @uses ReactionActionSlimInfo::setReactionId()
     * @param string $actionType
     * @param string $id
     * @param string $reactionId
     */
    public function __construct(?string $actionType = null, ?string $id = null, ?string $reactionId = null)
    {
        $this
            ->setActionType($actionType)
            ->setId($id)
            ->setReactionId($reactionId);
    }
    /**
     * Get ActionType value
     * @return string|null
     */
    public function getActionType(): ?string
    {
        return $this->ActionType;
    }
    /**
     * Set ActionType value
     * @uses \EnumType\ReactionActionType::valueIsValid()
     * @uses \EnumType\ReactionActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $actionType
     * @return \StructType\ReactionActionSlimInfo
     */
    public function setActionType(?string $actionType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReactionActionType::valueIsValid($actionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReactionActionType', is_array($actionType) ? implode(', ', $actionType) : var_export($actionType, true), implode(', ', \EnumType\ReactionActionType::getValidValues())), __LINE__);
        }
        $this->ActionType = $actionType;
        
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
     * @return \StructType\ReactionActionSlimInfo
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
     * @return \StructType\ReactionActionSlimInfo
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
