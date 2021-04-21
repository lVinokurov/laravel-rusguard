<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeFaceVectorFull StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeFaceVectorFull
 * @subpackage Structs
 */
class AcsEmployeeFaceVectorFull extends AcsEmployeeFaceVector
{
    /**
     * The FaceVector
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FaceVector = null;
    /**
     * The Image
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Image = null;
    /**
     * The Info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Info = null;
    /**
     * Constructor method for AcsEmployeeFaceVectorFull
     * @uses AcsEmployeeFaceVectorFull::setFaceVector()
     * @uses AcsEmployeeFaceVectorFull::setImage()
     * @uses AcsEmployeeFaceVectorFull::setInfo()
     * @param string $faceVector
     * @param string $image
     * @param string $info
     */
    public function __construct(?string $faceVector = null, ?string $image = null, ?string $info = null)
    {
        $this
            ->setFaceVector($faceVector)
            ->setImage($image)
            ->setInfo($info);
    }
    /**
     * Get FaceVector value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFaceVector(): ?string
    {
        return isset($this->FaceVector) ? $this->FaceVector : null;
    }
    /**
     * Set FaceVector value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $faceVector
     * @return \StructType\AcsEmployeeFaceVectorFull
     */
    public function setFaceVector(?string $faceVector = null): self
    {
        // validation for constraint: string
        if (!is_null($faceVector) && !is_string($faceVector)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faceVector, true), gettype($faceVector)), __LINE__);
        }
        if (is_null($faceVector) || (is_array($faceVector) && empty($faceVector))) {
            unset($this->FaceVector);
        } else {
            $this->FaceVector = $faceVector;
        }
        
        return $this;
    }
    /**
     * Get Image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getImage(): ?string
    {
        return isset($this->Image) ? $this->Image : null;
    }
    /**
     * Set Image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $image
     * @return \StructType\AcsEmployeeFaceVectorFull
     */
    public function setImage(?string $image = null): self
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        if (is_null($image) || (is_array($image) && empty($image))) {
            unset($this->Image);
        } else {
            $this->Image = $image;
        }
        
        return $this;
    }
    /**
     * Get Info value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInfo(): ?string
    {
        return isset($this->Info) ? $this->Info : null;
    }
    /**
     * Set Info value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $info
     * @return \StructType\AcsEmployeeFaceVectorFull
     */
    public function setInfo(?string $info = null): self
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), gettype($info)), __LINE__);
        }
        if (is_null($info) || (is_array($info) && empty($info))) {
            unset($this->Info);
        } else {
            $this->Info = $info;
        }
        
        return $this;
    }
}
