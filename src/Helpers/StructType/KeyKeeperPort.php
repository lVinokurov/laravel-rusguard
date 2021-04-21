<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyKeeperPort StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:KeyKeeperPort
 * @subpackage Structs
 */
class KeyKeeperPort extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Address = null;
    /**
     * The DeviceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DeviceType = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ID = null;
    /**
     * The KeyCabinetId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $KeyCabinetId = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for KeyKeeperPort
     * @uses KeyKeeperPort::setAddress()
     * @uses KeyKeeperPort::setDeviceType()
     * @uses KeyKeeperPort::setID()
     * @uses KeyKeeperPort::setKeyCabinetId()
     * @uses KeyKeeperPort::setName()
     * @param int $address
     * @param int $deviceType
     * @param int $iD
     * @param int $keyCabinetId
     * @param string $name
     */
    public function __construct(?int $address = null, ?int $deviceType = null, ?int $iD = null, ?int $keyCabinetId = null, ?string $name = null)
    {
        $this
            ->setAddress($address)
            ->setDeviceType($deviceType)
            ->setID($iD)
            ->setKeyCabinetId($keyCabinetId)
            ->setName($name);
    }
    /**
     * Get Address value
     * @return int|null
     */
    public function getAddress(): ?int
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param int $address
     * @return \StructType\KeyKeeperPort
     */
    public function setAddress(?int $address = null): self
    {
        // validation for constraint: int
        if (!is_null($address) && !(is_int($address) || ctype_digit($address))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get DeviceType value
     * @return int|null
     */
    public function getDeviceType(): ?int
    {
        return $this->DeviceType;
    }
    /**
     * Set DeviceType value
     * @param int $deviceType
     * @return \StructType\KeyKeeperPort
     */
    public function setDeviceType(?int $deviceType = null): self
    {
        // validation for constraint: int
        if (!is_null($deviceType) && !(is_int($deviceType) || ctype_digit($deviceType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deviceType, true), gettype($deviceType)), __LINE__);
        }
        $this->DeviceType = $deviceType;
        
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID(): ?int
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \StructType\KeyKeeperPort
     */
    public function setID(?int $iD = null): self
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get KeyCabinetId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getKeyCabinetId(): ?int
    {
        return isset($this->KeyCabinetId) ? $this->KeyCabinetId : null;
    }
    /**
     * Set KeyCabinetId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $keyCabinetId
     * @return \StructType\KeyKeeperPort
     */
    public function setKeyCabinetId(?int $keyCabinetId = null): self
    {
        // validation for constraint: int
        if (!is_null($keyCabinetId) && !(is_int($keyCabinetId) || ctype_digit($keyCabinetId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyCabinetId, true), gettype($keyCabinetId)), __LINE__);
        }
        if (is_null($keyCabinetId) || (is_array($keyCabinetId) && empty($keyCabinetId))) {
            unset($this->KeyCabinetId);
        } else {
            $this->KeyCabinetId = $keyCabinetId;
        }
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\KeyKeeperPort
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
}
