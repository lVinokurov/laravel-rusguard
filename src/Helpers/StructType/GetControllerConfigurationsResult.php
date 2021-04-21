<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetControllerConfigurationsResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetControllerConfigurationsResult
 * @subpackage Structs
 */
class GetControllerConfigurationsResult extends AbstractStructBase
{
    /**
     * The Configurations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfGetControllerConfigurationsResult_Config|null
     */
    protected ?\ArrayType\ArrayOfGetControllerConfigurationsResult_Config $Configurations = null;
    /**
     * The FailedDevices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfGetControllerConfigurationsResult_FailedConfig|null
     */
    protected ?\ArrayType\ArrayOfGetControllerConfigurationsResult_FailedConfig $FailedDevices = null;
    /**
     * Constructor method for GetControllerConfigurationsResult
     * @uses GetControllerConfigurationsResult::setConfigurations()
     * @uses GetControllerConfigurationsResult::setFailedDevices()
     * @param \ArrayType\ArrayOfGetControllerConfigurationsResult_Config $configurations
     * @param \ArrayType\ArrayOfGetControllerConfigurationsResult_FailedConfig $failedDevices
     */
    public function __construct(?\ArrayType\ArrayOfGetControllerConfigurationsResult_Config $configurations = null, ?\ArrayType\ArrayOfGetControllerConfigurationsResult_FailedConfig $failedDevices = null)
    {
        $this
            ->setConfigurations($configurations)
            ->setFailedDevices($failedDevices);
    }
    /**
     * Get Configurations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfGetControllerConfigurationsResult_Config|null
     */
    public function getConfigurations(): ?\ArrayType\ArrayOfGetControllerConfigurationsResult_Config
    {
        return isset($this->Configurations) ? $this->Configurations : null;
    }
    /**
     * Set Configurations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfGetControllerConfigurationsResult_Config $configurations
     * @return \StructType\GetControllerConfigurationsResult
     */
    public function setConfigurations(?\ArrayType\ArrayOfGetControllerConfigurationsResult_Config $configurations = null): self
    {
        if (is_null($configurations) || (is_array($configurations) && empty($configurations))) {
            unset($this->Configurations);
        } else {
            $this->Configurations = $configurations;
        }
        
        return $this;
    }
    /**
     * Get FailedDevices value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfGetControllerConfigurationsResult_FailedConfig|null
     */
    public function getFailedDevices(): ?\ArrayType\ArrayOfGetControllerConfigurationsResult_FailedConfig
    {
        return isset($this->FailedDevices) ? $this->FailedDevices : null;
    }
    /**
     * Set FailedDevices value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfGetControllerConfigurationsResult_FailedConfig $failedDevices
     * @return \StructType\GetControllerConfigurationsResult
     */
    public function setFailedDevices(?\ArrayType\ArrayOfGetControllerConfigurationsResult_FailedConfig $failedDevices = null): self
    {
        if (is_null($failedDevices) || (is_array($failedDevices) && empty($failedDevices))) {
            unset($this->FailedDevices);
        } else {
            $this->FailedDevices = $failedDevices;
        }
        
        return $this;
    }
}
