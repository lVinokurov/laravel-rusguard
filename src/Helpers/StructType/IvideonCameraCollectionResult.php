<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IvideonCameraCollectionResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IvideonCameraCollectionResult
 * @subpackage Structs
 */
class IvideonCameraCollectionResult extends AbstractStructBase
{
    /**
     * The DriverFullInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLDriverFullInfo|null
     */
    protected ?\ArrayType\ArrayOfLDriverFullInfo $DriverFullInfo = null;
    /**
     * Constructor method for IvideonCameraCollectionResult
     * @uses IvideonCameraCollectionResult::setDriverFullInfo()
     * @param \ArrayType\ArrayOfLDriverFullInfo $driverFullInfo
     */
    public function __construct(?\ArrayType\ArrayOfLDriverFullInfo $driverFullInfo = null)
    {
        $this
            ->setDriverFullInfo($driverFullInfo);
    }
    /**
     * Get DriverFullInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLDriverFullInfo|null
     */
    public function getDriverFullInfo(): ?\ArrayType\ArrayOfLDriverFullInfo
    {
        return isset($this->DriverFullInfo) ? $this->DriverFullInfo : null;
    }
    /**
     * Set DriverFullInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLDriverFullInfo $driverFullInfo
     * @return \StructType\IvideonCameraCollectionResult
     */
    public function setDriverFullInfo(?\ArrayType\ArrayOfLDriverFullInfo $driverFullInfo = null): self
    {
        if (is_null($driverFullInfo) || (is_array($driverFullInfo) && empty($driverFullInfo))) {
            unset($this->DriverFullInfo);
        } else {
            $this->DriverFullInfo = $driverFullInfo;
        }
        
        return $this;
    }
}
