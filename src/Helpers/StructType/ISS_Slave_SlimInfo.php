<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_Slave_SlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_Slave_SlimInfo
 * @subpackage Structs
 */
class ISS_Slave_SlimInfo extends ISS_Entity_Base
{
    /**
     * The Displays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_Display_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_Display_SlimInfo $Displays = null;
    /**
     * The Dns
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Dns = null;
    /**
     * The IPAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $IPAddress = null;
    /**
     * The IntegrationPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_IntegrationPoint_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_IntegrationPoint_SlimInfo $IntegrationPoints = null;
    /**
     * Constructor method for ISS_Slave_SlimInfo
     * @uses ISS_Slave_SlimInfo::setDisplays()
     * @uses ISS_Slave_SlimInfo::setDns()
     * @uses ISS_Slave_SlimInfo::setIPAddress()
     * @uses ISS_Slave_SlimInfo::setIntegrationPoints()
     * @param \ArrayType\ArrayOfISS_Display_SlimInfo $displays
     * @param string $dns
     * @param string $iPAddress
     * @param \ArrayType\ArrayOfISS_IntegrationPoint_SlimInfo $integrationPoints
     */
    public function __construct(?\ArrayType\ArrayOfISS_Display_SlimInfo $displays = null, ?string $dns = null, ?string $iPAddress = null, ?\ArrayType\ArrayOfISS_IntegrationPoint_SlimInfo $integrationPoints = null)
    {
        $this
            ->setDisplays($displays)
            ->setDns($dns)
            ->setIPAddress($iPAddress)
            ->setIntegrationPoints($integrationPoints);
    }
    /**
     * Get Displays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_Display_SlimInfo|null
     */
    public function getDisplays(): ?\ArrayType\ArrayOfISS_Display_SlimInfo
    {
        return isset($this->Displays) ? $this->Displays : null;
    }
    /**
     * Set Displays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_Display_SlimInfo $displays
     * @return \StructType\ISS_Slave_SlimInfo
     */
    public function setDisplays(?\ArrayType\ArrayOfISS_Display_SlimInfo $displays = null): self
    {
        if (is_null($displays) || (is_array($displays) && empty($displays))) {
            unset($this->Displays);
        } else {
            $this->Displays = $displays;
        }
        
        return $this;
    }
    /**
     * Get Dns value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDns(): ?string
    {
        return isset($this->Dns) ? $this->Dns : null;
    }
    /**
     * Set Dns value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dns
     * @return \StructType\ISS_Slave_SlimInfo
     */
    public function setDns(?string $dns = null): self
    {
        // validation for constraint: string
        if (!is_null($dns) && !is_string($dns)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dns, true), gettype($dns)), __LINE__);
        }
        if (is_null($dns) || (is_array($dns) && empty($dns))) {
            unset($this->Dns);
        } else {
            $this->Dns = $dns;
        }
        
        return $this;
    }
    /**
     * Get IPAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIPAddress(): ?string
    {
        return isset($this->IPAddress) ? $this->IPAddress : null;
    }
    /**
     * Set IPAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iPAddress
     * @return \StructType\ISS_Slave_SlimInfo
     */
    public function setIPAddress(?string $iPAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($iPAddress) && !is_string($iPAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iPAddress, true), gettype($iPAddress)), __LINE__);
        }
        if (is_null($iPAddress) || (is_array($iPAddress) && empty($iPAddress))) {
            unset($this->IPAddress);
        } else {
            $this->IPAddress = $iPAddress;
        }
        
        return $this;
    }
    /**
     * Get IntegrationPoints value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_IntegrationPoint_SlimInfo|null
     */
    public function getIntegrationPoints(): ?\ArrayType\ArrayOfISS_IntegrationPoint_SlimInfo
    {
        return isset($this->IntegrationPoints) ? $this->IntegrationPoints : null;
    }
    /**
     * Set IntegrationPoints value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_IntegrationPoint_SlimInfo $integrationPoints
     * @return \StructType\ISS_Slave_SlimInfo
     */
    public function setIntegrationPoints(?\ArrayType\ArrayOfISS_IntegrationPoint_SlimInfo $integrationPoints = null): self
    {
        if (is_null($integrationPoints) || (is_array($integrationPoints) && empty($integrationPoints))) {
            unset($this->IntegrationPoints);
        } else {
            $this->IntegrationPoints = $integrationPoints;
        }
        
        return $this;
    }
}
