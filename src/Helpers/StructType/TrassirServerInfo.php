<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrassirServerInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TrassirServerInfo
 * @subpackage Structs
 */
class TrassirServerInfo extends AbstractStructBase
{
    /**
     * The Channels
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTrassirChannelInfo|null
     */
    protected ?\ArrayType\ArrayOfTrassirChannelInfo $Channels = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The TrassirID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TrassirID = null;
    /**
     * Constructor method for TrassirServerInfo
     * @uses TrassirServerInfo::setChannels()
     * @uses TrassirServerInfo::setName()
     * @uses TrassirServerInfo::setTrassirID()
     * @param \ArrayType\ArrayOfTrassirChannelInfo $channels
     * @param string $name
     * @param string $trassirID
     */
    public function __construct(?\ArrayType\ArrayOfTrassirChannelInfo $channels = null, ?string $name = null, ?string $trassirID = null)
    {
        $this
            ->setChannels($channels)
            ->setName($name)
            ->setTrassirID($trassirID);
    }
    /**
     * Get Channels value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTrassirChannelInfo|null
     */
    public function getChannels(): ?\ArrayType\ArrayOfTrassirChannelInfo
    {
        return isset($this->Channels) ? $this->Channels : null;
    }
    /**
     * Set Channels value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTrassirChannelInfo $channels
     * @return \StructType\TrassirServerInfo
     */
    public function setChannels(?\ArrayType\ArrayOfTrassirChannelInfo $channels = null): self
    {
        if (is_null($channels) || (is_array($channels) && empty($channels))) {
            unset($this->Channels);
        } else {
            $this->Channels = $channels;
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
     * @return \StructType\TrassirServerInfo
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
    /**
     * Get TrassirID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTrassirID(): ?string
    {
        return isset($this->TrassirID) ? $this->TrassirID : null;
    }
    /**
     * Set TrassirID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $trassirID
     * @return \StructType\TrassirServerInfo
     */
    public function setTrassirID(?string $trassirID = null): self
    {
        // validation for constraint: string
        if (!is_null($trassirID) && !is_string($trassirID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trassirID, true), gettype($trassirID)), __LINE__);
        }
        if (is_null($trassirID) || (is_array($trassirID) && empty($trassirID))) {
            unset($this->TrassirID);
        } else {
            $this->TrassirID = $trassirID;
        }
        
        return $this;
    }
}
