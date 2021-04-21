<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SlotInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SlotInfo
 * @subpackage Structs
 */
class SlotInfo extends AbstractStructBase
{
    /**
     * The IsKeyUnknown
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsKeyUnknown = null;
    /**
     * The IsUnknownObject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsUnknownObject = null;
    /**
     * The KeyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $KeyName = null;
    /**
     * The KeyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $KeyNumber = null;
    /**
     * The SlotNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SlotNumber = null;
    /**
     * Constructor method for SlotInfo
     * @uses SlotInfo::setIsKeyUnknown()
     * @uses SlotInfo::setIsUnknownObject()
     * @uses SlotInfo::setKeyName()
     * @uses SlotInfo::setKeyNumber()
     * @uses SlotInfo::setSlotNumber()
     * @param bool $isKeyUnknown
     * @param bool $isUnknownObject
     * @param string $keyName
     * @param int $keyNumber
     * @param int $slotNumber
     */
    public function __construct(?bool $isKeyUnknown = null, ?bool $isUnknownObject = null, ?string $keyName = null, ?int $keyNumber = null, ?int $slotNumber = null)
    {
        $this
            ->setIsKeyUnknown($isKeyUnknown)
            ->setIsUnknownObject($isUnknownObject)
            ->setKeyName($keyName)
            ->setKeyNumber($keyNumber)
            ->setSlotNumber($slotNumber);
    }
    /**
     * Get IsKeyUnknown value
     * @return bool|null
     */
    public function getIsKeyUnknown(): ?bool
    {
        return $this->IsKeyUnknown;
    }
    /**
     * Set IsKeyUnknown value
     * @param bool $isKeyUnknown
     * @return \StructType\SlotInfo
     */
    public function setIsKeyUnknown(?bool $isKeyUnknown = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isKeyUnknown) && !is_bool($isKeyUnknown)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isKeyUnknown, true), gettype($isKeyUnknown)), __LINE__);
        }
        $this->IsKeyUnknown = $isKeyUnknown;
        
        return $this;
    }
    /**
     * Get IsUnknownObject value
     * @return bool|null
     */
    public function getIsUnknownObject(): ?bool
    {
        return $this->IsUnknownObject;
    }
    /**
     * Set IsUnknownObject value
     * @param bool $isUnknownObject
     * @return \StructType\SlotInfo
     */
    public function setIsUnknownObject(?bool $isUnknownObject = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUnknownObject) && !is_bool($isUnknownObject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUnknownObject, true), gettype($isUnknownObject)), __LINE__);
        }
        $this->IsUnknownObject = $isUnknownObject;
        
        return $this;
    }
    /**
     * Get KeyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKeyName(): ?string
    {
        return isset($this->KeyName) ? $this->KeyName : null;
    }
    /**
     * Set KeyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $keyName
     * @return \StructType\SlotInfo
     */
    public function setKeyName(?string $keyName = null): self
    {
        // validation for constraint: string
        if (!is_null($keyName) && !is_string($keyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyName, true), gettype($keyName)), __LINE__);
        }
        if (is_null($keyName) || (is_array($keyName) && empty($keyName))) {
            unset($this->KeyName);
        } else {
            $this->KeyName = $keyName;
        }
        
        return $this;
    }
    /**
     * Get KeyNumber value
     * @return int|null
     */
    public function getKeyNumber(): ?int
    {
        return $this->KeyNumber;
    }
    /**
     * Set KeyNumber value
     * @param int $keyNumber
     * @return \StructType\SlotInfo
     */
    public function setKeyNumber(?int $keyNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($keyNumber) && !(is_int($keyNumber) || ctype_digit($keyNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyNumber, true), gettype($keyNumber)), __LINE__);
        }
        $this->KeyNumber = $keyNumber;
        
        return $this;
    }
    /**
     * Get SlotNumber value
     * @return int|null
     */
    public function getSlotNumber(): ?int
    {
        return $this->SlotNumber;
    }
    /**
     * Set SlotNumber value
     * @param int $slotNumber
     * @return \StructType\SlotInfo
     */
    public function setSlotNumber(?int $slotNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($slotNumber) && !(is_int($slotNumber) || ctype_digit($slotNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($slotNumber, true), gettype($slotNumber)), __LINE__);
        }
        $this->SlotNumber = $slotNumber;
        
        return $this;
    }
}
