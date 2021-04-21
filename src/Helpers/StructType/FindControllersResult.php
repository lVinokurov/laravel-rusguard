<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindControllersResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FindControllersResult
 * @subpackage Structs
 */
class FindControllersResult extends AbstractStructBase
{
    /**
     * The Controllers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfCanDeviceInfo|null
     */
    protected ?\ArrayType\ArrayOfCanDeviceInfo $Controllers = null;
    /**
     * The FailedControllers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfCanDeviceInfo|null
     */
    protected ?\ArrayType\ArrayOfCanDeviceInfo $FailedControllers = null;
    /**
     * The FailedConverters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfFindControllersResult_FailedConverterInfo|null
     */
    protected ?\ArrayType\ArrayOfFindControllersResult_FailedConverterInfo $FailedConverters = null;
    /**
     * Constructor method for FindControllersResult
     * @uses FindControllersResult::setControllers()
     * @uses FindControllersResult::setFailedControllers()
     * @uses FindControllersResult::setFailedConverters()
     * @param \ArrayType\ArrayOfCanDeviceInfo $controllers
     * @param \ArrayType\ArrayOfCanDeviceInfo $failedControllers
     * @param \ArrayType\ArrayOfFindControllersResult_FailedConverterInfo $failedConverters
     */
    public function __construct(?\ArrayType\ArrayOfCanDeviceInfo $controllers = null, ?\ArrayType\ArrayOfCanDeviceInfo $failedControllers = null, ?\ArrayType\ArrayOfFindControllersResult_FailedConverterInfo $failedConverters = null)
    {
        $this
            ->setControllers($controllers)
            ->setFailedControllers($failedControllers)
            ->setFailedConverters($failedConverters);
    }
    /**
     * Get Controllers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfCanDeviceInfo|null
     */
    public function getControllers(): ?\ArrayType\ArrayOfCanDeviceInfo
    {
        return isset($this->Controllers) ? $this->Controllers : null;
    }
    /**
     * Set Controllers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfCanDeviceInfo $controllers
     * @return \StructType\FindControllersResult
     */
    public function setControllers(?\ArrayType\ArrayOfCanDeviceInfo $controllers = null): self
    {
        if (is_null($controllers) || (is_array($controllers) && empty($controllers))) {
            unset($this->Controllers);
        } else {
            $this->Controllers = $controllers;
        }
        
        return $this;
    }
    /**
     * Get FailedControllers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfCanDeviceInfo|null
     */
    public function getFailedControllers(): ?\ArrayType\ArrayOfCanDeviceInfo
    {
        return isset($this->FailedControllers) ? $this->FailedControllers : null;
    }
    /**
     * Set FailedControllers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfCanDeviceInfo $failedControllers
     * @return \StructType\FindControllersResult
     */
    public function setFailedControllers(?\ArrayType\ArrayOfCanDeviceInfo $failedControllers = null): self
    {
        if (is_null($failedControllers) || (is_array($failedControllers) && empty($failedControllers))) {
            unset($this->FailedControllers);
        } else {
            $this->FailedControllers = $failedControllers;
        }
        
        return $this;
    }
    /**
     * Get FailedConverters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfFindControllersResult_FailedConverterInfo|null
     */
    public function getFailedConverters(): ?\ArrayType\ArrayOfFindControllersResult_FailedConverterInfo
    {
        return isset($this->FailedConverters) ? $this->FailedConverters : null;
    }
    /**
     * Set FailedConverters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfFindControllersResult_FailedConverterInfo $failedConverters
     * @return \StructType\FindControllersResult
     */
    public function setFailedConverters(?\ArrayType\ArrayOfFindControllersResult_FailedConverterInfo $failedConverters = null): self
    {
        if (is_null($failedConverters) || (is_array($failedConverters) && empty($failedConverters))) {
            unset($this->FailedConverters);
        } else {
            $this->FailedConverters = $failedConverters;
        }
        
        return $this;
    }
}
