<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CanDeviceNetConfig StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CanDeviceNetConfig
 * @subpackage Structs
 */
class CanDeviceNetConfig extends AbstractStructBase
{
    /**
     * The BusAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BusAddress = null;
    /**
     * The ConverterAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CanConverterAddress|null
     */
    protected ?\StructType\CanConverterAddress $ConverterAddress = null;
    /**
     * The DriverFullInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LDriverFullInfo|null
     */
    protected ?\StructType\LDriverFullInfo $DriverFullInfo = null;
    /**
     * The HardwareType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $HardwareType = null;
    /**
     * The IsEncrypted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsEncrypted = null;
    /**
     * The MajorVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MajorVersion = null;
    /**
     * The MinorVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MinorVersion = null;
    /**
     * The RawHardwareType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RawHardwareType = null;
    /**
     * The SID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SID = null;
    /**
     * Constructor method for CanDeviceNetConfig
     * @uses CanDeviceNetConfig::setBusAddress()
     * @uses CanDeviceNetConfig::setConverterAddress()
     * @uses CanDeviceNetConfig::setDriverFullInfo()
     * @uses CanDeviceNetConfig::setHardwareType()
     * @uses CanDeviceNetConfig::setIsEncrypted()
     * @uses CanDeviceNetConfig::setMajorVersion()
     * @uses CanDeviceNetConfig::setMinorVersion()
     * @uses CanDeviceNetConfig::setRawHardwareType()
     * @uses CanDeviceNetConfig::setSID()
     * @param string $busAddress
     * @param \StructType\CanConverterAddress $converterAddress
     * @param \StructType\LDriverFullInfo $driverFullInfo
     * @param string $hardwareType
     * @param bool $isEncrypted
     * @param string $majorVersion
     * @param string $minorVersion
     * @param string $rawHardwareType
     * @param int $sID
     */
    public function __construct(?string $busAddress = null, ?\StructType\CanConverterAddress $converterAddress = null, ?\StructType\LDriverFullInfo $driverFullInfo = null, ?string $hardwareType = null, ?bool $isEncrypted = null, ?string $majorVersion = null, ?string $minorVersion = null, ?string $rawHardwareType = null, ?int $sID = null)
    {
        $this
            ->setBusAddress($busAddress)
            ->setConverterAddress($converterAddress)
            ->setDriverFullInfo($driverFullInfo)
            ->setHardwareType($hardwareType)
            ->setIsEncrypted($isEncrypted)
            ->setMajorVersion($majorVersion)
            ->setMinorVersion($minorVersion)
            ->setRawHardwareType($rawHardwareType)
            ->setSID($sID);
    }
    /**
     * Get BusAddress value
     * @return string|null
     */
    public function getBusAddress(): ?string
    {
        return $this->BusAddress;
    }
    /**
     * Set BusAddress value
     * @param string $busAddress
     * @return \StructType\CanDeviceNetConfig
     */
    public function setBusAddress(?string $busAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($busAddress) && !is_string($busAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($busAddress, true), gettype($busAddress)), __LINE__);
        }
        $this->BusAddress = $busAddress;
        
        return $this;
    }
    /**
     * Get ConverterAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CanConverterAddress|null
     */
    public function getConverterAddress(): ?\StructType\CanConverterAddress
    {
        return isset($this->ConverterAddress) ? $this->ConverterAddress : null;
    }
    /**
     * Set ConverterAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CanConverterAddress $converterAddress
     * @return \StructType\CanDeviceNetConfig
     */
    public function setConverterAddress(?\StructType\CanConverterAddress $converterAddress = null): self
    {
        if (is_null($converterAddress) || (is_array($converterAddress) && empty($converterAddress))) {
            unset($this->ConverterAddress);
        } else {
            $this->ConverterAddress = $converterAddress;
        }
        
        return $this;
    }
    /**
     * Get DriverFullInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LDriverFullInfo|null
     */
    public function getDriverFullInfo(): ?\StructType\LDriverFullInfo
    {
        return isset($this->DriverFullInfo) ? $this->DriverFullInfo : null;
    }
    /**
     * Set DriverFullInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LDriverFullInfo $driverFullInfo
     * @return \StructType\CanDeviceNetConfig
     */
    public function setDriverFullInfo(?\StructType\LDriverFullInfo $driverFullInfo = null): self
    {
        if (is_null($driverFullInfo) || (is_array($driverFullInfo) && empty($driverFullInfo))) {
            unset($this->DriverFullInfo);
        } else {
            $this->DriverFullInfo = $driverFullInfo;
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
     * @return \StructType\CanDeviceNetConfig
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
     * Get IsEncrypted value
     * @return bool|null
     */
    public function getIsEncrypted(): ?bool
    {
        return $this->IsEncrypted;
    }
    /**
     * Set IsEncrypted value
     * @param bool $isEncrypted
     * @return \StructType\CanDeviceNetConfig
     */
    public function setIsEncrypted(?bool $isEncrypted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEncrypted) && !is_bool($isEncrypted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEncrypted, true), gettype($isEncrypted)), __LINE__);
        }
        $this->IsEncrypted = $isEncrypted;
        
        return $this;
    }
    /**
     * Get MajorVersion value
     * @return string|null
     */
    public function getMajorVersion(): ?string
    {
        return $this->MajorVersion;
    }
    /**
     * Set MajorVersion value
     * @param string $majorVersion
     * @return \StructType\CanDeviceNetConfig
     */
    public function setMajorVersion(?string $majorVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($majorVersion) && !is_string($majorVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($majorVersion, true), gettype($majorVersion)), __LINE__);
        }
        $this->MajorVersion = $majorVersion;
        
        return $this;
    }
    /**
     * Get MinorVersion value
     * @return string|null
     */
    public function getMinorVersion(): ?string
    {
        return $this->MinorVersion;
    }
    /**
     * Set MinorVersion value
     * @param string $minorVersion
     * @return \StructType\CanDeviceNetConfig
     */
    public function setMinorVersion(?string $minorVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($minorVersion) && !is_string($minorVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minorVersion, true), gettype($minorVersion)), __LINE__);
        }
        $this->MinorVersion = $minorVersion;
        
        return $this;
    }
    /**
     * Get RawHardwareType value
     * @return string|null
     */
    public function getRawHardwareType(): ?string
    {
        return $this->RawHardwareType;
    }
    /**
     * Set RawHardwareType value
     * @param string $rawHardwareType
     * @return \StructType\CanDeviceNetConfig
     */
    public function setRawHardwareType(?string $rawHardwareType = null): self
    {
        // validation for constraint: string
        if (!is_null($rawHardwareType) && !is_string($rawHardwareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rawHardwareType, true), gettype($rawHardwareType)), __LINE__);
        }
        $this->RawHardwareType = $rawHardwareType;
        
        return $this;
    }
    /**
     * Get SID value
     * @return int|null
     */
    public function getSID(): ?int
    {
        return $this->SID;
    }
    /**
     * Set SID value
     * @param int $sID
     * @return \StructType\CanDeviceNetConfig
     */
    public function setSID(?int $sID = null): self
    {
        // validation for constraint: int
        if (!is_null($sID) && !(is_int($sID) || ctype_digit($sID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sID, true), gettype($sID)), __LINE__);
        }
        $this->SID = $sID;
        
        return $this;
    }
}
