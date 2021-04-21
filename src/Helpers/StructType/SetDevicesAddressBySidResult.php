<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDevicesAddressBySidResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SetDevicesAddressBySidResult
 * @subpackage Structs
 */
class SetDevicesAddressBySidResult extends AbstractStructBase
{
    /**
     * The FailedDevices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfSetDevicesAddressBySidResult_FailedAddress|null
     */
    protected ?\ArrayType\ArrayOfSetDevicesAddressBySidResult_FailedAddress $FailedDevices = null;
    /**
     * Constructor method for SetDevicesAddressBySidResult
     * @uses SetDevicesAddressBySidResult::setFailedDevices()
     * @param \ArrayType\ArrayOfSetDevicesAddressBySidResult_FailedAddress $failedDevices
     */
    public function __construct(?\ArrayType\ArrayOfSetDevicesAddressBySidResult_FailedAddress $failedDevices = null)
    {
        $this
            ->setFailedDevices($failedDevices);
    }
    /**
     * Get FailedDevices value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfSetDevicesAddressBySidResult_FailedAddress|null
     */
    public function getFailedDevices(): ?\ArrayType\ArrayOfSetDevicesAddressBySidResult_FailedAddress
    {
        return isset($this->FailedDevices) ? $this->FailedDevices : null;
    }
    /**
     * Set FailedDevices value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfSetDevicesAddressBySidResult_FailedAddress $failedDevices
     * @return \StructType\SetDevicesAddressBySidResult
     */
    public function setFailedDevices(?\ArrayType\ArrayOfSetDevicesAddressBySidResult_FailedAddress $failedDevices = null): self
    {
        if (is_null($failedDevices) || (is_array($failedDevices) && empty($failedDevices))) {
            unset($this->FailedDevices);
        } else {
            $this->FailedDevices = $failedDevices;
        }
        
        return $this;
    }
}
