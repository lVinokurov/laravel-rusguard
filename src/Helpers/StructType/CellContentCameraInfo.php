<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CellContentCameraInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CellContentCameraInfo
 * @subpackage Structs
 */
class CellContentCameraInfo extends CellContentCameraSaveData
{
    /**
     * The CameraDriverName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CameraDriverName = null;
    /**
     * The CellId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $CellId = null;
    /**
     * Constructor method for CellContentCameraInfo
     * @uses CellContentCameraInfo::setCameraDriverName()
     * @uses CellContentCameraInfo::setCellId()
     * @param string $cameraDriverName
     * @param string $cellId
     */
    public function __construct(?string $cameraDriverName = null, ?string $cellId = null)
    {
        $this
            ->setCameraDriverName($cameraDriverName)
            ->setCellId($cellId);
    }
    /**
     * Get CameraDriverName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCameraDriverName(): ?string
    {
        return isset($this->CameraDriverName) ? $this->CameraDriverName : null;
    }
    /**
     * Set CameraDriverName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cameraDriverName
     * @return \StructType\CellContentCameraInfo
     */
    public function setCameraDriverName(?string $cameraDriverName = null): self
    {
        // validation for constraint: string
        if (!is_null($cameraDriverName) && !is_string($cameraDriverName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cameraDriverName, true), gettype($cameraDriverName)), __LINE__);
        }
        if (is_null($cameraDriverName) || (is_array($cameraDriverName) && empty($cameraDriverName))) {
            unset($this->CameraDriverName);
        } else {
            $this->CameraDriverName = $cameraDriverName;
        }
        
        return $this;
    }
    /**
     * Get CellId value
     * @return string|null
     */
    public function getCellId(): ?string
    {
        return $this->CellId;
    }
    /**
     * Set CellId value
     * @param string $cellId
     * @return \StructType\CellContentCameraInfo
     */
    public function setCellId(?string $cellId = null): self
    {
        // validation for constraint: string
        if (!is_null($cellId) && !is_string($cellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cellId, true), gettype($cellId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($cellId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $cellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($cellId, true)), __LINE__);
        }
        $this->CellId = $cellId;
        
        return $this;
    }
}
