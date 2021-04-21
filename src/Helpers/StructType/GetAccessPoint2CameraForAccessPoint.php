<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessPoint2CameraForAccessPoint StructType
 * @subpackage Structs
 */
class GetAccessPoint2CameraForAccessPoint extends AbstractStructBase
{
    /**
     * The driverId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $driverId = null;
    /**
     * Constructor method for GetAccessPoint2CameraForAccessPoint
     * @uses GetAccessPoint2CameraForAccessPoint::setDriverId()
     * @param \ArrayType\ArrayOfguid $driverId
     */
    public function __construct(?\ArrayType\ArrayOfguid $driverId = null)
    {
        $this
            ->setDriverId($driverId);
    }
    /**
     * Get driverId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getDriverId(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->driverId) ? $this->driverId : null;
    }
    /**
     * Set driverId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $driverId
     * @return \StructType\GetAccessPoint2CameraForAccessPoint
     */
    public function setDriverId(?\ArrayType\ArrayOfguid $driverId = null): self
    {
        if (is_null($driverId) || (is_array($driverId) && empty($driverId))) {
            unset($this->driverId);
        } else {
            $this->driverId = $driverId;
        }
        
        return $this;
    }
}
