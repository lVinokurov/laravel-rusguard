<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserPassSlimSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserPassSlimSaveData
 * @subpackage Structs
 */
class UserPassSlimSaveData extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Height = null;
    /**
     * The IsStandart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsStandart = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The StandartHeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StandartHeight = null;
    /**
     * The StandartWidth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StandartWidth = null;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Width = null;
    /**
     * Constructor method for UserPassSlimSaveData
     * @uses UserPassSlimSaveData::setDescription()
     * @uses UserPassSlimSaveData::setHeight()
     * @uses UserPassSlimSaveData::setIsStandart()
     * @uses UserPassSlimSaveData::setName()
     * @uses UserPassSlimSaveData::setStandartHeight()
     * @uses UserPassSlimSaveData::setStandartWidth()
     * @uses UserPassSlimSaveData::setWidth()
     * @param string $description
     * @param int $height
     * @param bool $isStandart
     * @param string $name
     * @param int $standartHeight
     * @param int $standartWidth
     * @param int $width
     */
    public function __construct(?string $description = null, ?int $height = null, ?bool $isStandart = null, ?string $name = null, ?int $standartHeight = null, ?int $standartWidth = null, ?int $width = null)
    {
        $this
            ->setDescription($description)
            ->setHeight($height)
            ->setIsStandart($isStandart)
            ->setName($name)
            ->setStandartHeight($standartHeight)
            ->setStandartWidth($standartWidth)
            ->setWidth($width);
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
     * @return \StructType\UserPassSlimSaveData
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
     * Get Height value
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \StructType\UserPassSlimSaveData
     */
    public function setHeight(?int $height = null): self
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;
        
        return $this;
    }
    /**
     * Get IsStandart value
     * @return bool|null
     */
    public function getIsStandart(): ?bool
    {
        return $this->IsStandart;
    }
    /**
     * Set IsStandart value
     * @param bool $isStandart
     * @return \StructType\UserPassSlimSaveData
     */
    public function setIsStandart(?bool $isStandart = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStandart) && !is_bool($isStandart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStandart, true), gettype($isStandart)), __LINE__);
        }
        $this->IsStandart = $isStandart;
        
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
     * @return \StructType\UserPassSlimSaveData
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
     * Get StandartHeight value
     * @return int|null
     */
    public function getStandartHeight(): ?int
    {
        return $this->StandartHeight;
    }
    /**
     * Set StandartHeight value
     * @param int $standartHeight
     * @return \StructType\UserPassSlimSaveData
     */
    public function setStandartHeight(?int $standartHeight = null): self
    {
        // validation for constraint: int
        if (!is_null($standartHeight) && !(is_int($standartHeight) || ctype_digit($standartHeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($standartHeight, true), gettype($standartHeight)), __LINE__);
        }
        $this->StandartHeight = $standartHeight;
        
        return $this;
    }
    /**
     * Get StandartWidth value
     * @return int|null
     */
    public function getStandartWidth(): ?int
    {
        return $this->StandartWidth;
    }
    /**
     * Set StandartWidth value
     * @param int $standartWidth
     * @return \StructType\UserPassSlimSaveData
     */
    public function setStandartWidth(?int $standartWidth = null): self
    {
        // validation for constraint: int
        if (!is_null($standartWidth) && !(is_int($standartWidth) || ctype_digit($standartWidth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($standartWidth, true), gettype($standartWidth)), __LINE__);
        }
        $this->StandartWidth = $standartWidth;
        
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \StructType\UserPassSlimSaveData
     */
    public function setWidth(?int $width = null): self
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;
        
        return $this;
    }
}
