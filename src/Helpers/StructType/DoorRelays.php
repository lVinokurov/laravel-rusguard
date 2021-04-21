<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoorRelays StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DoorRelays
 * @subpackage Structs
 */
class DoorRelays extends AbstractStructBase
{
    /**
     * The Relays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDoorRelay|null
     */
    protected ?\ArrayType\ArrayOfDoorRelay $Relays = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * Constructor method for DoorRelays
     * @uses DoorRelays::setRelays()
     * @uses DoorRelays::setType()
     * @param \ArrayType\ArrayOfDoorRelay $relays
     * @param string $type
     */
    public function __construct(?\ArrayType\ArrayOfDoorRelay $relays = null, ?string $type = null)
    {
        $this
            ->setRelays($relays)
            ->setType($type);
    }
    /**
     * Get Relays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDoorRelay|null
     */
    public function getRelays(): ?\ArrayType\ArrayOfDoorRelay
    {
        return isset($this->Relays) ? $this->Relays : null;
    }
    /**
     * Set Relays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDoorRelay $relays
     * @return \StructType\DoorRelays
     */
    public function setRelays(?\ArrayType\ArrayOfDoorRelay $relays = null): self
    {
        if (is_null($relays) || (is_array($relays) && empty($relays))) {
            unset($this->Relays);
        } else {
            $this->Relays = $relays;
        }
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\BoxAccessLevelMode::valueIsValid()
     * @uses \EnumType\BoxAccessLevelMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\DoorRelays
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\BoxAccessLevelMode::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BoxAccessLevelMode', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\BoxAccessLevelMode::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
