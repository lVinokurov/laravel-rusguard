<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LanCanConverter StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LanCanConverter
 * @subpackage Structs
 */
class LanCanConverter extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CanConverterAddress|null
     */
    protected ?\StructType\CanConverterAddress $Address = null;
    /**
     * The ControllerMac
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ControllerMac = null;
    /**
     * The ControllerPort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ControllerPort = null;
    /**
     * The Encryption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Encryption = null;
    /**
     * The FirmwareMajorVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FirmwareMajorVersion = null;
    /**
     * The FirmwareMinorVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FirmwareMinorVersion = null;
    /**
     * The Gateway
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IPAddress|null
     */
    protected ?\StructType\IPAddress $Gateway = null;
    /**
     * The HardwareType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $HardwareType = null;
    /**
     * The Mask
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IPAddress|null
     */
    protected ?\StructType\IPAddress $Mask = null;
    /**
     * Constructor method for LanCanConverter
     * @uses LanCanConverter::setAddress()
     * @uses LanCanConverter::setControllerMac()
     * @uses LanCanConverter::setControllerPort()
     * @uses LanCanConverter::setEncryption()
     * @uses LanCanConverter::setFirmwareMajorVersion()
     * @uses LanCanConverter::setFirmwareMinorVersion()
     * @uses LanCanConverter::setGateway()
     * @uses LanCanConverter::setHardwareType()
     * @uses LanCanConverter::setMask()
     * @param \StructType\CanConverterAddress $address
     * @param int $controllerMac
     * @param int $controllerPort
     * @param bool $encryption
     * @param string $firmwareMajorVersion
     * @param string $firmwareMinorVersion
     * @param \StructType\IPAddress $gateway
     * @param string $hardwareType
     * @param \StructType\IPAddress $mask
     */
    public function __construct(?\StructType\CanConverterAddress $address = null, ?int $controllerMac = null, ?int $controllerPort = null, ?bool $encryption = null, ?string $firmwareMajorVersion = null, ?string $firmwareMinorVersion = null, ?\StructType\IPAddress $gateway = null, ?string $hardwareType = null, ?\StructType\IPAddress $mask = null)
    {
        $this
            ->setAddress($address)
            ->setControllerMac($controllerMac)
            ->setControllerPort($controllerPort)
            ->setEncryption($encryption)
            ->setFirmwareMajorVersion($firmwareMajorVersion)
            ->setFirmwareMinorVersion($firmwareMinorVersion)
            ->setGateway($gateway)
            ->setHardwareType($hardwareType)
            ->setMask($mask);
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CanConverterAddress|null
     */
    public function getAddress(): ?\StructType\CanConverterAddress
    {
        return isset($this->Address) ? $this->Address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CanConverterAddress $address
     * @return \StructType\LanCanConverter
     */
    public function setAddress(?\StructType\CanConverterAddress $address = null): self
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        
        return $this;
    }
    /**
     * Get ControllerMac value
     * @return int|null
     */
    public function getControllerMac(): ?int
    {
        return $this->ControllerMac;
    }
    /**
     * Set ControllerMac value
     * @param int $controllerMac
     * @return \StructType\LanCanConverter
     */
    public function setControllerMac(?int $controllerMac = null): self
    {
        // validation for constraint: int
        if (!is_null($controllerMac) && !(is_int($controllerMac) || ctype_digit($controllerMac))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($controllerMac, true), gettype($controllerMac)), __LINE__);
        }
        $this->ControllerMac = $controllerMac;
        
        return $this;
    }
    /**
     * Get ControllerPort value
     * @return int|null
     */
    public function getControllerPort(): ?int
    {
        return $this->ControllerPort;
    }
    /**
     * Set ControllerPort value
     * @param int $controllerPort
     * @return \StructType\LanCanConverter
     */
    public function setControllerPort(?int $controllerPort = null): self
    {
        // validation for constraint: int
        if (!is_null($controllerPort) && !(is_int($controllerPort) || ctype_digit($controllerPort))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($controllerPort, true), gettype($controllerPort)), __LINE__);
        }
        $this->ControllerPort = $controllerPort;
        
        return $this;
    }
    /**
     * Get Encryption value
     * @return bool|null
     */
    public function getEncryption(): ?bool
    {
        return $this->Encryption;
    }
    /**
     * Set Encryption value
     * @param bool $encryption
     * @return \StructType\LanCanConverter
     */
    public function setEncryption(?bool $encryption = null): self
    {
        // validation for constraint: boolean
        if (!is_null($encryption) && !is_bool($encryption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($encryption, true), gettype($encryption)), __LINE__);
        }
        $this->Encryption = $encryption;
        
        return $this;
    }
    /**
     * Get FirmwareMajorVersion value
     * @return string|null
     */
    public function getFirmwareMajorVersion(): ?string
    {
        return $this->FirmwareMajorVersion;
    }
    /**
     * Set FirmwareMajorVersion value
     * @param string $firmwareMajorVersion
     * @return \StructType\LanCanConverter
     */
    public function setFirmwareMajorVersion(?string $firmwareMajorVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($firmwareMajorVersion) && !is_string($firmwareMajorVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firmwareMajorVersion, true), gettype($firmwareMajorVersion)), __LINE__);
        }
        $this->FirmwareMajorVersion = $firmwareMajorVersion;
        
        return $this;
    }
    /**
     * Get FirmwareMinorVersion value
     * @return string|null
     */
    public function getFirmwareMinorVersion(): ?string
    {
        return $this->FirmwareMinorVersion;
    }
    /**
     * Set FirmwareMinorVersion value
     * @param string $firmwareMinorVersion
     * @return \StructType\LanCanConverter
     */
    public function setFirmwareMinorVersion(?string $firmwareMinorVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($firmwareMinorVersion) && !is_string($firmwareMinorVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firmwareMinorVersion, true), gettype($firmwareMinorVersion)), __LINE__);
        }
        $this->FirmwareMinorVersion = $firmwareMinorVersion;
        
        return $this;
    }
    /**
     * Get Gateway value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IPAddress|null
     */
    public function getGateway(): ?\StructType\IPAddress
    {
        return isset($this->Gateway) ? $this->Gateway : null;
    }
    /**
     * Set Gateway value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IPAddress $gateway
     * @return \StructType\LanCanConverter
     */
    public function setGateway(?\StructType\IPAddress $gateway = null): self
    {
        if (is_null($gateway) || (is_array($gateway) && empty($gateway))) {
            unset($this->Gateway);
        } else {
            $this->Gateway = $gateway;
        }
        
        return $this;
    }
    /**
     * Get HardwareType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHardwareType(): ?string
    {
        return isset($this->HardwareType) ? $this->HardwareType : null;
    }
    /**
     * Set HardwareType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $hardwareType
     * @return \StructType\LanCanConverter
     */
    public function setHardwareType(?string $hardwareType = null): self
    {
        // validation for constraint: string
        if (!is_null($hardwareType) && !is_string($hardwareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardwareType, true), gettype($hardwareType)), __LINE__);
        }
        if (is_null($hardwareType) || (is_array($hardwareType) && empty($hardwareType))) {
            unset($this->HardwareType);
        } else {
            $this->HardwareType = $hardwareType;
        }
        
        return $this;
    }
    /**
     * Get Mask value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IPAddress|null
     */
    public function getMask(): ?\StructType\IPAddress
    {
        return isset($this->Mask) ? $this->Mask : null;
    }
    /**
     * Set Mask value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IPAddress $mask
     * @return \StructType\LanCanConverter
     */
    public function setMask(?\StructType\IPAddress $mask = null): self
    {
        if (is_null($mask) || (is_array($mask) && empty($mask))) {
            unset($this->Mask);
        } else {
            $this->Mask = $mask;
        }
        
        return $this;
    }
}
