<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CanConverterAddress StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CanConverterAddress
 * @subpackage Structs
 */
class CanConverterAddress extends AbstractStructBase
{
    /**
     * The LanCanConverterAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LanCanConverterAddress|null
     */
    protected ?\StructType\LanCanConverterAddress $LanCanConverterAddress = null;
    /**
     * The Tag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Tag = null;
    /**
     * The UsbCanConverterAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\UsbCanConverterAddress|null
     */
    protected ?\StructType\UsbCanConverterAddress $UsbCanConverterAddress = null;
    /**
     * Constructor method for CanConverterAddress
     * @uses CanConverterAddress::setLanCanConverterAddress()
     * @uses CanConverterAddress::setTag()
     * @uses CanConverterAddress::setUsbCanConverterAddress()
     * @param \StructType\LanCanConverterAddress $lanCanConverterAddress
     * @param string $tag
     * @param \StructType\UsbCanConverterAddress $usbCanConverterAddress
     */
    public function __construct(?\StructType\LanCanConverterAddress $lanCanConverterAddress = null, ?string $tag = null, ?\StructType\UsbCanConverterAddress $usbCanConverterAddress = null)
    {
        $this
            ->setLanCanConverterAddress($lanCanConverterAddress)
            ->setTag($tag)
            ->setUsbCanConverterAddress($usbCanConverterAddress);
    }
    /**
     * Get LanCanConverterAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LanCanConverterAddress|null
     */
    public function getLanCanConverterAddress(): ?\StructType\LanCanConverterAddress
    {
        return isset($this->LanCanConverterAddress) ? $this->LanCanConverterAddress : null;
    }
    /**
     * Set LanCanConverterAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LanCanConverterAddress $lanCanConverterAddress
     * @return \StructType\CanConverterAddress
     */
    public function setLanCanConverterAddress(?\StructType\LanCanConverterAddress $lanCanConverterAddress = null): self
    {
        if (is_null($lanCanConverterAddress) || (is_array($lanCanConverterAddress) && empty($lanCanConverterAddress))) {
            unset($this->LanCanConverterAddress);
        } else {
            $this->LanCanConverterAddress = $lanCanConverterAddress;
        }
        
        return $this;
    }
    /**
     * Get Tag value
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->Tag;
    }
    /**
     * Set Tag value
     * @uses \EnumType\CanConverterAddress_TagEnum::valueIsValid()
     * @uses \EnumType\CanConverterAddress_TagEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tag
     * @return \StructType\CanConverterAddress
     */
    public function setTag(?string $tag = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\CanConverterAddress_TagEnum::valueIsValid($tag)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CanConverterAddress_TagEnum', is_array($tag) ? implode(', ', $tag) : var_export($tag, true), implode(', ', \EnumType\CanConverterAddress_TagEnum::getValidValues())), __LINE__);
        }
        $this->Tag = $tag;
        
        return $this;
    }
    /**
     * Get UsbCanConverterAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\UsbCanConverterAddress|null
     */
    public function getUsbCanConverterAddress(): ?\StructType\UsbCanConverterAddress
    {
        return isset($this->UsbCanConverterAddress) ? $this->UsbCanConverterAddress : null;
    }
    /**
     * Set UsbCanConverterAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\UsbCanConverterAddress $usbCanConverterAddress
     * @return \StructType\CanConverterAddress
     */
    public function setUsbCanConverterAddress(?\StructType\UsbCanConverterAddress $usbCanConverterAddress = null): self
    {
        if (is_null($usbCanConverterAddress) || (is_array($usbCanConverterAddress) && empty($usbCanConverterAddress))) {
            unset($this->UsbCanConverterAddress);
        } else {
            $this->UsbCanConverterAddress = $usbCanConverterAddress;
        }
        
        return $this;
    }
}
