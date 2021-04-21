<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsbCanConverterAddress StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UsbCanConverterAddress
 * @subpackage Structs
 */
class UsbCanConverterAddress extends AbstractStructBase
{
    /**
     * The Channel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Channel = null;
    /**
     * The SerialNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SerialNumber = null;
    /**
     * The Vendor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Vendor = null;
    /**
     * Constructor method for UsbCanConverterAddress
     * @uses UsbCanConverterAddress::setChannel()
     * @uses UsbCanConverterAddress::setSerialNumber()
     * @uses UsbCanConverterAddress::setVendor()
     * @param int $channel
     * @param string $serialNumber
     * @param string $vendor
     */
    public function __construct(?int $channel = null, ?string $serialNumber = null, ?string $vendor = null)
    {
        $this
            ->setChannel($channel)
            ->setSerialNumber($serialNumber)
            ->setVendor($vendor);
    }
    /**
     * Get Channel value
     * @return int|null
     */
    public function getChannel(): ?int
    {
        return $this->Channel;
    }
    /**
     * Set Channel value
     * @param int $channel
     * @return \StructType\UsbCanConverterAddress
     */
    public function setChannel(?int $channel = null): self
    {
        // validation for constraint: int
        if (!is_null($channel) && !(is_int($channel) || ctype_digit($channel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($channel, true), gettype($channel)), __LINE__);
        }
        $this->Channel = $channel;
        
        return $this;
    }
    /**
     * Get SerialNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSerialNumber(): ?string
    {
        return isset($this->SerialNumber) ? $this->SerialNumber : null;
    }
    /**
     * Set SerialNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serialNumber
     * @return \StructType\UsbCanConverterAddress
     */
    public function setSerialNumber(?string $serialNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($serialNumber) && !is_string($serialNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serialNumber, true), gettype($serialNumber)), __LINE__);
        }
        if (is_null($serialNumber) || (is_array($serialNumber) && empty($serialNumber))) {
            unset($this->SerialNumber);
        } else {
            $this->SerialNumber = $serialNumber;
        }
        
        return $this;
    }
    /**
     * Get Vendor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVendor(): ?string
    {
        return isset($this->Vendor) ? $this->Vendor : null;
    }
    /**
     * Set Vendor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vendor
     * @return \StructType\UsbCanConverterAddress
     */
    public function setVendor(?string $vendor = null): self
    {
        // validation for constraint: string
        if (!is_null($vendor) && !is_string($vendor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendor, true), gettype($vendor)), __LINE__);
        }
        if (is_null($vendor) || (is_array($vendor) && empty($vendor))) {
            unset($this->Vendor);
        } else {
            $this->Vendor = $vendor;
        }
        
        return $this;
    }
}
