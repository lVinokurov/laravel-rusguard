<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindLanConverter StructType
 * @subpackage Structs
 */
class FindLanConverter extends AbstractStructBase
{
    /**
     * The deviceServerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $deviceServerId = null;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IPAddress|null
     */
    protected ?\StructType\IPAddress $address = null;
    /**
     * Constructor method for FindLanConverter
     * @uses FindLanConverter::setDeviceServerId()
     * @uses FindLanConverter::setAddress()
     * @param string $deviceServerId
     * @param \StructType\IPAddress $address
     */
    public function __construct(?string $deviceServerId = null, ?\StructType\IPAddress $address = null)
    {
        $this
            ->setDeviceServerId($deviceServerId)
            ->setAddress($address);
    }
    /**
     * Get deviceServerId value
     * @return string|null
     */
    public function getDeviceServerId(): ?string
    {
        return $this->deviceServerId;
    }
    /**
     * Set deviceServerId value
     * @param string $deviceServerId
     * @return \StructType\FindLanConverter
     */
    public function setDeviceServerId(?string $deviceServerId = null): self
    {
        // validation for constraint: string
        if (!is_null($deviceServerId) && !is_string($deviceServerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceServerId, true), gettype($deviceServerId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($deviceServerId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $deviceServerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($deviceServerId, true)), __LINE__);
        }
        $this->deviceServerId = $deviceServerId;
        
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
     * @return \StructType\FindLanConverter
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
