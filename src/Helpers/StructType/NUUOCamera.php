<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NUUOCamera StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NUUOCamera
 * @subpackage Structs
 */
class NUUOCamera extends AbstractStructBase
{
    /**
     * The CentralID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CentralID = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The LocalID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $LocalID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for NUUOCamera
     * @uses NUUOCamera::setCentralID()
     * @uses NUUOCamera::setDescription()
     * @uses NUUOCamera::setLocalID()
     * @uses NUUOCamera::setName()
     * @param int $centralID
     * @param string $description
     * @param int $localID
     * @param string $name
     */
    public function __construct(?int $centralID = null, ?string $description = null, ?int $localID = null, ?string $name = null)
    {
        $this
            ->setCentralID($centralID)
            ->setDescription($description)
            ->setLocalID($localID)
            ->setName($name);
    }
    /**
     * Get CentralID value
     * @return int|null
     */
    public function getCentralID(): ?int
    {
        return $this->CentralID;
    }
    /**
     * Set CentralID value
     * @param int $centralID
     * @return \StructType\NUUOCamera
     */
    public function setCentralID(?int $centralID = null): self
    {
        // validation for constraint: int
        if (!is_null($centralID) && !(is_int($centralID) || ctype_digit($centralID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($centralID, true), gettype($centralID)), __LINE__);
        }
        $this->CentralID = $centralID;
        
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\NUUOCamera
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get LocalID value
     * @return int|null
     */
    public function getLocalID(): ?int
    {
        return $this->LocalID;
    }
    /**
     * Set LocalID value
     * @param int $localID
     * @return \StructType\NUUOCamera
     */
    public function setLocalID(?int $localID = null): self
    {
        // validation for constraint: int
        if (!is_null($localID) && !(is_int($localID) || ctype_digit($localID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($localID, true), gettype($localID)), __LINE__);
        }
        $this->LocalID = $localID;
        
        return $this;
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
     * @return \StructType\NUUOCamera
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
}
