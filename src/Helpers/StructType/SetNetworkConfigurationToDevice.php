<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetNetworkConfigurationToDevice StructType
 * @subpackage Structs
 */
class SetNetworkConfigurationToDevice extends AbstractStructBase
{
    /**
     * The MacAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MacAddress = null;
    /**
     * The newConfiguration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\NetConfiguration|null
     */
    protected ?\StructType\NetConfiguration $newConfiguration = null;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IPAddress|null
     */
    protected ?\StructType\IPAddress $address = null;
    /**
     * Constructor method for SetNetworkConfigurationToDevice
     * @uses SetNetworkConfigurationToDevice::setMacAddress()
     * @uses SetNetworkConfigurationToDevice::setNewConfiguration()
     * @uses SetNetworkConfigurationToDevice::setAddress()
     * @param int $macAddress
     * @param \StructType\NetConfiguration $newConfiguration
     * @param \StructType\IPAddress $address
     */
    public function __construct(?int $macAddress = null, ?\StructType\NetConfiguration $newConfiguration = null, ?\StructType\IPAddress $address = null)
    {
        $this
            ->setMacAddress($macAddress)
            ->setNewConfiguration($newConfiguration)
            ->setAddress($address);
    }
    /**
     * Get MacAddress value
     * @return int|null
     */
    public function getMacAddress(): ?int
    {
        return $this->MacAddress;
    }
    /**
     * Set MacAddress value
     * @param int $macAddress
     * @return \StructType\SetNetworkConfigurationToDevice
     */
    public function setMacAddress(?int $macAddress = null): self
    {
        // validation for constraint: int
        if (!is_null($macAddress) && !(is_int($macAddress) || ctype_digit($macAddress))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($macAddress, true), gettype($macAddress)), __LINE__);
        }
        $this->MacAddress = $macAddress;
        
        return $this;
    }
    /**
     * Get newConfiguration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\NetConfiguration|null
     */
    public function getNewConfiguration(): ?\StructType\NetConfiguration
    {
        return isset($this->newConfiguration) ? $this->newConfiguration : null;
    }
    /**
     * Set newConfiguration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\NetConfiguration $newConfiguration
     * @return \StructType\SetNetworkConfigurationToDevice
     */
    public function setNewConfiguration(?\StructType\NetConfiguration $newConfiguration = null): self
    {
        if (is_null($newConfiguration) || (is_array($newConfiguration) && empty($newConfiguration))) {
            unset($this->newConfiguration);
        } else {
            $this->newConfiguration = $newConfiguration;
        }
        
        return $this;
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IPAddress|null
     */
    public function getAddress(): ?\StructType\IPAddress
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IPAddress $address
     * @return \StructType\SetNetworkConfigurationToDevice
     */
    public function setAddress(?\StructType\IPAddress $address = null): self
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
        }
        
        return $this;
    }
}
