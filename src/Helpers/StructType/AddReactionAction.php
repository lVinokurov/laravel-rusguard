<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddReactionAction StructType
 * @subpackage Structs
 */
class AddReactionAction extends AbstractStructBase
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
     * The actionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $actionType = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionActionSaveData|null
     */
    protected ?\StructType\ReactionActionSaveData $data = null;
    /**
     * Constructor method for AddReactionAction
     * @uses AddReactionAction::setReactionId()
     * @uses AddReactionAction::setActionType()
     * @uses AddReactionAction::setData()
     * @param string $reactionId
     * @param string $actionType
     * @param \StructType\ReactionActionSaveData $data
     */
    public function __construct(?string $reactionId = null, ?string $actionType = null, ?\StructType\ReactionActionSaveData $data = null)
    {
        $this
            ->setReactionId($reactionId)
            ->setActionType($actionType)
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
     * @return \StructType\AddReactionAction
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
     * Get actionType value
     * @return string|null
     */
    public function getActionType(): ?string
    {
        return $this->actionType;
    }
    /**
     * Set actionType value
     * @uses \EnumType\ReactionActionType::valueIsValid()
     * @uses \EnumType\ReactionActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $actionType
     * @return \StructType\AddReactionAction
     */
    public function setActionType(?string $actionType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReactionActionType::valueIsValid($actionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReactionActionType', is_array($actionType) ? implode(', ', $actionType) : var_export($actionType, true), implode(', ', \EnumType\ReactionActionType::getValidValues())), __LINE__);
        }
        $this->actionType = $actionType;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionActionSaveData|null
     */
    public function getData(): ?\StructType\ReactionActionSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReactionActionSaveData $data
     * @return \StructType\AddReactionAction
     */
    public function setData(?\StructType\ReactionActionSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
