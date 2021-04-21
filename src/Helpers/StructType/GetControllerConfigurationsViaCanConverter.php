<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetControllerConfigurationsViaCanConverter StructType
 * @subpackage Structs
 */
class GetControllerConfigurationsViaCanConverter extends AbstractStructBase
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
     * The devices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfCanDeviceNetConfig|null
     */
    protected ?\ArrayType\ArrayOfCanDeviceNetConfig $devices = null;
    /**
     * Constructor method for GetControllerConfigurationsViaCanConverter
     * @uses GetControllerConfigurationsViaCanConverter::setDeviceServerId()
     * @uses GetControllerConfigurationsViaCanConverter::setDevices()
     * @param string $deviceServerId
     * @param \ArrayType\ArrayOfCanDeviceNetConfig $devices
     */
    public function __construct(?string $deviceServerId = null, ?\ArrayType\ArrayOfCanDeviceNetConfig $devices = null)
    {
        $this
            ->setDeviceServerId($deviceServerId)
            ->setDevices($devices);
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
     * @return \StructType\GetControllerConfigurationsViaCanConverter
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
     * Get devices value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfCanDeviceNetConfig|null
     */
    public function getDevices(): ?\ArrayType\ArrayOfCanDeviceNetConfig
    {
        return isset($this->devices) ? $this->devices : null;
    }
    /**
     * Set devices value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfCanDeviceNetConfig $devices
     * @return \StructType\GetControllerConfigurationsViaCanConverter
     */
    public function setDevices(?\ArrayType\ArrayOfCanDeviceNetConfig $devices = null): self
    {
        if (is_null($devices) || (is_array($devices) && empty($devices))) {
            unset($this->devices);
        } else {
            $this->devices = $devices;
        }
        
        return $this;
    }
}
