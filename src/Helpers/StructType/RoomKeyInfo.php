<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomKeyInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RoomKeyInfo
 * @subpackage Structs
 */
class RoomKeyInfo extends AbstractStructBase
{
    /**
     * The CabinetID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CabinetID = null;
    /**
     * The CabinetName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CabinetName = null;
    /**
     * The ControllerID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ControllerID = null;
    /**
     * The ControllerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ControllerName = null;
    /**
     * The KeyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $KeyNumber = null;
    /**
     * The Slot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Slot = null;
    /**
     * Constructor method for RoomKeyInfo
     * @uses RoomKeyInfo::setCabinetID()
     * @uses RoomKeyInfo::setCabinetName()
     * @uses RoomKeyInfo::setControllerID()
     * @uses RoomKeyInfo::setControllerName()
     * @uses RoomKeyInfo::setKeyNumber()
     * @uses RoomKeyInfo::setSlot()
     * @param string $cabinetID
     * @param string $cabinetName
     * @param string $controllerID
     * @param string $controllerName
     * @param int $keyNumber
     * @param int $slot
     */
    public function __construct(?string $cabinetID = null, ?string $cabinetName = null, ?string $controllerID = null, ?string $controllerName = null, ?int $keyNumber = null, ?int $slot = null)
    {
        $this
            ->setCabinetID($cabinetID)
            ->setCabinetName($cabinetName)
            ->setControllerID($controllerID)
            ->setControllerName($controllerName)
            ->setKeyNumber($keyNumber)
            ->setSlot($slot);
    }
    /**
     * Get CabinetID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCabinetID(): ?string
    {
        return isset($this->CabinetID) ? $this->CabinetID : null;
    }
    /**
     * Set CabinetID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cabinetID
     * @return \StructType\RoomKeyInfo
     */
    public function setCabinetID(?string $cabinetID = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinetID) && !is_string($cabinetID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinetID, true), gettype($cabinetID)), __LINE__);
        }
        if (is_null($cabinetID) || (is_array($cabinetID) && empty($cabinetID))) {
            unset($this->CabinetID);
        } else {
            $this->CabinetID = $cabinetID;
        }
        
        return $this;
    }
    /**
     * Get CabinetName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCabinetName(): ?string
    {
        return isset($this->CabinetName) ? $this->CabinetName : null;
    }
    /**
     * Set CabinetName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cabinetName
     * @return \StructType\RoomKeyInfo
     */
    public function setCabinetName(?string $cabinetName = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinetName) && !is_string($cabinetName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinetName, true), gettype($cabinetName)), __LINE__);
        }
        if (is_null($cabinetName) || (is_array($cabinetName) && empty($cabinetName))) {
            unset($this->CabinetName);
        } else {
            $this->CabinetName = $cabinetName;
        }
        
        return $this;
    }
    /**
     * Get ControllerID value
     * @return string|null
     */
    public function getControllerID(): ?string
    {
        return $this->ControllerID;
    }
    /**
     * Set ControllerID value
     * @param string $controllerID
     * @return \StructType\RoomKeyInfo
     */
    public function setControllerID(?string $controllerID = null): self
    {
        // validation for constraint: string
        if (!is_null($controllerID) && !is_string($controllerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($controllerID, true), gettype($controllerID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($controllerID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $controllerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($controllerID, true)), __LINE__);
        }
        $this->ControllerID = $controllerID;
        
        return $this;
    }
    /**
     * Get ControllerName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getControllerName(): ?string
    {
        return isset($this->ControllerName) ? $this->ControllerName : null;
    }
    /**
     * Set ControllerName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $controllerName
     * @return \StructType\RoomKeyInfo
     */
    public function setControllerName(?string $controllerName = null): self
    {
        // validation for constraint: string
        if (!is_null($controllerName) && !is_string($controllerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($controllerName, true), gettype($controllerName)), __LINE__);
        }
        if (is_null($controllerName) || (is_array($controllerName) && empty($controllerName))) {
            unset($this->ControllerName);
        } else {
            $this->ControllerName = $controllerName;
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
     * @return \StructType\RoomKeyInfo
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
     * Get Slot value
     * @return int|null
     */
    public function getSlot(): ?int
    {
        return $this->Slot;
    }
    /**
     * Set Slot value
     * @param int $slot
     * @return \StructType\RoomKeyInfo
     */
    public function setSlot(?int $slot = null): self
    {
        // validation for constraint: int
        if (!is_null($slot) && !(is_int($slot) || ctype_digit($slot))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($slot, true), gettype($slot)), __LINE__);
        }
        $this->Slot = $slot;
        
        return $this;
    }
}
