<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NUUOArchiveServer StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NUUOArchiveServer
 * @subpackage Structs
 */
class NUUOArchiveServer extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The VideoRecorders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfNUUOVideoRecorder|null
     */
    protected ?\ArrayType\ArrayOfNUUOVideoRecorder $VideoRecorders = null;
    /**
     * Constructor method for NUUOArchiveServer
     * @uses NUUOArchiveServer::setName()
     * @uses NUUOArchiveServer::setVideoRecorders()
     * @param string $name
     * @param \ArrayType\ArrayOfNUUOVideoRecorder $videoRecorders
     */
    public function __construct(?string $name = null, ?\ArrayType\ArrayOfNUUOVideoRecorder $videoRecorders = null)
    {
        $this
            ->setName($name)
            ->setVideoRecorders($videoRecorders);
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\NUUOArchiveServer
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get VideoRecorders value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfNUUOVideoRecorder|null
     */
    public function getVideoRecorders(): ?\ArrayType\ArrayOfNUUOVideoRecorder
    {
        return isset($this->VideoRecorders) ? $this->VideoRecorders : null;
    }
    /**
     * Set VideoRecorders value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfNUUOVideoRecorder $videoRecorders
     * @return \StructType\NUUOArchiveServer
     */
    public function setVideoRecorders(?\ArrayType\ArrayOfNUUOVideoRecorder $videoRecorders = null): self
    {
        if (is_null($videoRecorders) || (is_array($videoRecorders) && empty($videoRecorders))) {
            unset($this->VideoRecorders);
        } else {
            $this->VideoRecorders = $videoRecorders;
        }
        
        return $this;
    }
}
