<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateDeviceDriversResponse StructType
 * @subpackage Structs
 */
class UpdateDeviceDriversResponse extends AbstractStructBase
{
    /**
     * The UpdateDeviceDriversResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDeviceDriverInfo|null
     */
    protected ?\ArrayType\ArrayOfDeviceDriverInfo $UpdateDeviceDriversResult = null;
    /**
     * Constructor method for UpdateDeviceDriversResponse
     * @uses UpdateDeviceDriversResponse::setUpdateDeviceDriversResult()
     * @param \ArrayType\ArrayOfDeviceDriverInfo $updateDeviceDriversResult
     */
    public function __construct(?\ArrayType\ArrayOfDeviceDriverInfo $updateDeviceDriversResult = null)
    {
        $this
            ->setUpdateDeviceDriversResult($updateDeviceDriversResult);
    }
    /**
     * Get UpdateDeviceDriversResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDeviceDriverInfo|null
     */
    public function getUpdateDeviceDriversResult(): ?\ArrayType\ArrayOfDeviceDriverInfo
    {
        return isset($this->UpdateDeviceDriversResult) ? $this->UpdateDeviceDriversResult : null;
    }
    /**
     * Set UpdateDeviceDriversResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDeviceDriverInfo $updateDeviceDriversResult
     * @return \StructType\UpdateDeviceDriversResponse
     */
    public function setUpdateDeviceDriversResult(?\ArrayType\ArrayOfDeviceDriverInfo $updateDeviceDriversResult = null): self
    {
        if (is_null($updateDeviceDriversResult) || (is_array($updateDeviceDriversResult) && empty($updateDeviceDriversResult))) {
            unset($this->UpdateDeviceDriversResult);
        } else {
            $this->UpdateDeviceDriversResult = $updateDeviceDriversResult;
        }
        
        return $this;
    }
}
