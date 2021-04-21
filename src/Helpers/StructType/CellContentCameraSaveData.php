<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CellContentCameraSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CellContentCameraSaveData
 * @subpackage Structs
 */
class CellContentCameraSaveData extends AbstractStructBase
{
    /**
     * The CameraDriverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $CameraDriverId = null;
    /**
     * Constructor method for CellContentCameraSaveData
     * @uses CellContentCameraSaveData::setCameraDriverId()
     * @param string $cameraDriverId
     */
    public function __construct(?string $cameraDriverId = null)
    {
        $this
            ->setCameraDriverId($cameraDriverId);
    }
    /**
     * Get CameraDriverId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCameraDriverId(): ?string
    {
        return isset($this->CameraDriverId) ? $this->CameraDriverId : null;
    }
    /**
     * Set CameraDriverId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cameraDriverId
     * @return \StructType\CellContentCameraSaveData
     */
    public function setCameraDriverId(?string $cameraDriverId = null): self
    {
        // validation for constraint: string
        if (!is_null($cameraDriverId) && !is_string($cameraDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cameraDriverId, true), gettype($cameraDriverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($cameraDriverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $cameraDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($cameraDriverId, true)), __LINE__);
        }
        if (is_null($cameraDriverId) || (is_array($cameraDriverId) && empty($cameraDriverId))) {
            unset($this->CameraDriverId);
        } else {
            $this->CameraDriverId = $cameraDriverId;
        }
        
        return $this;
    }
}
