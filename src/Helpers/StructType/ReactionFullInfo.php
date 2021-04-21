<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReactionFullInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionFullInfo
 * @subpackage Structs
 */
class ReactionFullInfo extends ReactionSlimInfo
{
    /**
     * The Actions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfReactionActionSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfReactionActionSlimInfo $Actions = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Events
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfReactionEventSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfReactionEventSlimInfo $Events = null;
    /**
     * Constructor method for ReactionFullInfo
     * @uses ReactionFullInfo::setActions()
     * @uses ReactionFullInfo::setDescription()
     * @uses ReactionFullInfo::setEvents()
     * @param \ArrayType\ArrayOfReactionActionSlimInfo $actions
     * @param string $description
     * @param \ArrayType\ArrayOfReactionEventSlimInfo $events
     */
    public function __construct(?\ArrayType\ArrayOfReactionActionSlimInfo $actions = null, ?string $description = null, ?\ArrayType\ArrayOfReactionEventSlimInfo $events = null)
    {
        $this
            ->setActions($actions)
            ->setDescription($description)
            ->setEvents($events);
    }
    /**
     * Get Actions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfReactionActionSlimInfo|null
     */
    public function getActions(): ?\ArrayType\ArrayOfReactionActionSlimInfo
    {
        return isset($this->Actions) ? $this->Actions : null;
    }
    /**
     * Set Actions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfReactionActionSlimInfo $actions
     * @return \StructType\ReactionFullInfo
     */
    public function setActions(?\ArrayType\ArrayOfReactionActionSlimInfo $actions = null): self
    {
        if (is_null($actions) || (is_array($actions) && empty($actions))) {
            unset($this->Actions);
        } else {
            $this->Actions = $actions;
        }
        
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\ReactionFullInfo
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get Events value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfReactionEventSlimInfo|null
     */
    public function getEvents(): ?\ArrayType\ArrayOfReactionEventSlimInfo
    {
        return isset($this->Events) ? $this->Events : null;
    }
    /**
     * Set Events value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfReactionEventSlimInfo $events
     * @return \StructType\ReactionFullInfo
     */
    public function setEvents(?\ArrayType\ArrayOfReactionEventSlimInfo $events = null): self
    {
        if (is_null($events) || (is_array($events) && empty($events))) {
            unset($this->Events);
        } else {
            $this->Events = $events;
        }
        
        return $this;
    }
}
