<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LanCanConverterAddress StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LanCanConverterAddress
 * @subpackage Structs
 */
class LanCanConverterAddress extends AbstractStructBase
{
    /**
     * The IpAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IPAddress|null
     */
    protected ?\StructType\IPAddress $IpAddress = null;
    /**
     * Constructor method for LanCanConverterAddress
     * @uses LanCanConverterAddress::setIpAddress()
     * @param \StructType\IPAddress $ipAddress
     */
    public function __construct(?\StructType\IPAddress $ipAddress = null)
    {
        $this
            ->setIpAddress($ipAddress);
    }
    /**
     * Get IpAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IPAddress|null
     */
    public function getIpAddress(): ?\StructType\IPAddress
    {
        return isset($this->IpAddress) ? $this->IpAddress : null;
    }
    /**
     * Set IpAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IPAddress $ipAddress
     * @return \StructType\LanCanConverterAddress
     */
    public function setIpAddress(?\StructType\IPAddress $ipAddress = null): self
    {
        if (is_null($ipAddress) || (is_array($ipAddress) && empty($ipAddress))) {
            unset($this->IpAddress);
        } else {
            $this->IpAddress = $ipAddress;
        }
        
        return $this;
    }
}
