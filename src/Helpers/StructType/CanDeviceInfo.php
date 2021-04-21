<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CanDeviceInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CanDeviceInfo
 * @subpackage Structs
 */
class CanDeviceInfo extends AbstractStructBase
{
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Error = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The NetConfig
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CanDeviceNetConfig|null
     */
    protected ?\StructType\CanDeviceNetConfig $NetConfig = null;
    /**
     * Constructor method for CanDeviceInfo
     * @uses CanDeviceInfo::setError()
     * @uses CanDeviceInfo::setName()
     * @uses CanDeviceInfo::setNetConfig()
     * @param string $error
     * @param string $name
     * @param \StructType\CanDeviceNetConfig $netConfig
     */
    public function __construct(?string $error = null, ?string $name = null, ?\StructType\CanDeviceNetConfig $netConfig = null)
    {
        $this
            ->setError($error)
            ->setName($name)
            ->setNetConfig($netConfig);
    }
    /**
     * Get Error value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getError(): ?string
    {
        return isset($this->Error) ? $this->Error : null;
    }
    /**
     * Set Error value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $error
     * @return \StructType\CanDeviceInfo
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        if (is_null($error) || (is_array($error) && empty($error))) {
            unset($this->Error);
        } else {
            $this->Error = $error;
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
     * @return \StructType\CanDeviceInfo
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
     * Get NetConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CanDeviceNetConfig|null
     */
    public function getNetConfig(): ?\StructType\CanDeviceNetConfig
    {
        return isset($this->NetConfig) ? $this->NetConfig : null;
    }
    /**
     * Set NetConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CanDeviceNetConfig $netConfig
     * @return \StructType\CanDeviceInfo
     */
    public function setNetConfig(?\StructType\CanDeviceNetConfig $netConfig = null): self
    {
        if (is_null($netConfig) || (is_array($netConfig) && empty($netConfig))) {
            unset($this->NetConfig);
        } else {
            $this->NetConfig = $netConfig;
        }
        
        return $this;
    }
}
