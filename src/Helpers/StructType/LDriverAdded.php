<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LDriverAdded StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LDriverAdded
 * @subpackage Structs
 */
class LDriverAdded extends AbstractStructBase
{
    /**
     * The DriverInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LDriverFullInfo|null
     */
    protected ?\StructType\LDriverFullInfo $DriverInfo = null;
    /**
     * Constructor method for LDriverAdded
     * @uses LDriverAdded::setDriverInfo()
     * @param \StructType\LDriverFullInfo $driverInfo
     */
    public function __construct(?\StructType\LDriverFullInfo $driverInfo = null)
    {
        $this
            ->setDriverInfo($driverInfo);
    }
    /**
     * Get DriverInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LDriverFullInfo|null
     */
    public function getDriverInfo(): ?\StructType\LDriverFullInfo
    {
        return isset($this->DriverInfo) ? $this->DriverInfo : null;
    }
    /**
     * Set DriverInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LDriverFullInfo $driverInfo
     * @return \StructType\LDriverAdded
     */
    public function setDriverInfo(?\StructType\LDriverFullInfo $driverInfo = null): self
    {
        if (is_null($driverInfo) || (is_array($driverInfo) && empty($driverInfo))) {
            unset($this->DriverInfo);
        } else {
            $this->DriverInfo = $driverInfo;
        }
        
        return $this;
    }
}
