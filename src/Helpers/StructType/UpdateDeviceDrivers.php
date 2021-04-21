<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateDeviceDrivers StructType
 * @subpackage Structs
 */
class UpdateDeviceDrivers extends AbstractStructBase
{
    /**
     * The driversTreeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDeviceDriverInfo|null
     */
    protected ?\ArrayType\ArrayOfDeviceDriverInfo $driversTreeInfo = null;
    /**
     * The ignoreInvalidProps
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ignoreInvalidProps = null;
    /**
     * Constructor method for UpdateDeviceDrivers
     * @uses UpdateDeviceDrivers::setDriversTreeInfo()
     * @uses UpdateDeviceDrivers::setIgnoreInvalidProps()
     * @param \ArrayType\ArrayOfDeviceDriverInfo $driversTreeInfo
     * @param bool $ignoreInvalidProps
     */
    public function __construct(?\ArrayType\ArrayOfDeviceDriverInfo $driversTreeInfo = null, ?bool $ignoreInvalidProps = null)
    {
        $this
            ->setDriversTreeInfo($driversTreeInfo)
            ->setIgnoreInvalidProps($ignoreInvalidProps);
    }
    /**
     * Get driversTreeInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDeviceDriverInfo|null
     */
    public function getDriversTreeInfo(): ?\ArrayType\ArrayOfDeviceDriverInfo
    {
        return isset($this->driversTreeInfo) ? $this->driversTreeInfo : null;
    }
    /**
     * Set driversTreeInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDeviceDriverInfo $driversTreeInfo
     * @return \StructType\UpdateDeviceDrivers
     */
    public function setDriversTreeInfo(?\ArrayType\ArrayOfDeviceDriverInfo $driversTreeInfo = null): self
    {
        if (is_null($driversTreeInfo) || (is_array($driversTreeInfo) && empty($driversTreeInfo))) {
            unset($this->driversTreeInfo);
        } else {
            $this->driversTreeInfo = $driversTreeInfo;
        }
        
        return $this;
    }
    /**
     * Get ignoreInvalidProps value
     * @return bool|null
     */
    public function getIgnoreInvalidProps(): ?bool
    {
        return $this->ignoreInvalidProps;
    }
    /**
     * Set ignoreInvalidProps value
     * @param bool $ignoreInvalidProps
     * @return \StructType\UpdateDeviceDrivers
     */
    public function setIgnoreInvalidProps(?bool $ignoreInvalidProps = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreInvalidProps) && !is_bool($ignoreInvalidProps)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreInvalidProps, true), gettype($ignoreInvalidProps)), __LINE__);
        }
        $this->ignoreInvalidProps = $ignoreInvalidProps;
        
        return $this;
    }
}
