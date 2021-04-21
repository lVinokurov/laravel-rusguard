<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetControllerConfigurationsResult.Config StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetControllerConfigurationsResult.Config
 * @subpackage Structs
 */
class GetControllerConfigurationsResult_Config extends AbstractStructBase
{
    /**
     * The Configuration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLDriverFullInfo|null
     */
    protected ?\ArrayType\ArrayOfLDriverFullInfo $Configuration = null;
    /**
     * The NetConfig
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CanDeviceNetConfig|null
     */
    protected ?\StructType\CanDeviceNetConfig $NetConfig = null;
    /**
     * Constructor method for GetControllerConfigurationsResult.Config
     * @uses GetControllerConfigurationsResult_Config::setConfiguration()
     * @uses GetControllerConfigurationsResult_Config::setNetConfig()
     * @param \ArrayType\ArrayOfLDriverFullInfo $configuration
     * @param \StructType\CanDeviceNetConfig $netConfig
     */
    public function __construct(?\ArrayType\ArrayOfLDriverFullInfo $configuration = null, ?\StructType\CanDeviceNetConfig $netConfig = null)
    {
        $this
            ->setConfiguration($configuration)
            ->setNetConfig($netConfig);
    }
    /**
     * Get Configuration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLDriverFullInfo|null
     */
    public function getConfiguration(): ?\ArrayType\ArrayOfLDriverFullInfo
    {
        return isset($this->Configuration) ? $this->Configuration : null;
    }
    /**
     * Set Configuration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLDriverFullInfo $configuration
     * @return \StructType\GetControllerConfigurationsResult_Config
     */
    public function setConfiguration(?\ArrayType\ArrayOfLDriverFullInfo $configuration = null): self
    {
        if (is_null($configuration) || (is_array($configuration) && empty($configuration))) {
            unset($this->Configuration);
        } else {
            $this->Configuration = $configuration;
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
     * @return \StructType\GetControllerConfigurationsResult_Config
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
