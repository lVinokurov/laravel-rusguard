<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NetConfiguration StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NetConfiguration
 * @subpackage Structs
 */
class NetConfiguration extends AbstractStructBase
{
    /**
     * The Gateway
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IPAddress|null
     */
    protected ?\StructType\IPAddress $Gateway = null;
    /**
     * The IPAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IPAddress|null
     */
    protected ?\StructType\IPAddress $IPAddress = null;
    /**
     * The Mask
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IPAddress|null
     */
    protected ?\StructType\IPAddress $Mask = null;
    /**
     * Constructor method for NetConfiguration
     * @uses NetConfiguration::setGateway()
     * @uses NetConfiguration::setIPAddress()
     * @uses NetConfiguration::setMask()
     * @param \StructType\IPAddress $gateway
     * @param \StructType\IPAddress $iPAddress
     * @param \StructType\IPAddress $mask
     */
    public function __construct(?\StructType\IPAddress $gateway = null, ?\StructType\IPAddress $iPAddress = null, ?\StructType\IPAddress $mask = null)
    {
        $this
            ->setGateway($gateway)
            ->setIPAddress($iPAddress)
            ->setMask($mask);
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
     * @return \StructType\NetConfiguration
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
     * Get IPAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IPAddress|null
     */
    public function getIPAddress(): ?\StructType\IPAddress
    {
        return isset($this->IPAddress) ? $this->IPAddress : null;
    }
    /**
     * Set IPAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IPAddress $iPAddress
     * @return \StructType\NetConfiguration
     */
    public function setIPAddress(?\StructType\IPAddress $iPAddress = null): self
    {
        if (is_null($iPAddress) || (is_array($iPAddress) && empty($iPAddress))) {
            unset($this->IPAddress);
        } else {
            $this->IPAddress = $iPAddress;
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
     * @return \StructType\NetConfiguration
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
