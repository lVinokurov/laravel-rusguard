<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScreenCellSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ScreenCellSaveData
 * @subpackage Structs
 */
class ScreenCellSaveData extends AbstractStructBase
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
     * The ScaleMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ScaleMode = null;
    /**
     * The ShowName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowName = null;
    /**
     * The X
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $X = null;
    /**
     * The Y
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Y = null;
    /**
     * Constructor method for ScreenCellSaveData
     * @uses ScreenCellSaveData::setName()
     * @uses ScreenCellSaveData::setScaleMode()
     * @uses ScreenCellSaveData::setShowName()
     * @uses ScreenCellSaveData::setX()
     * @uses ScreenCellSaveData::setY()
     * @param string $name
     * @param string $scaleMode
     * @param bool $showName
     * @param int $x
     * @param int $y
     */
    public function __construct(?string $name = null, ?string $scaleMode = null, ?bool $showName = null, ?int $x = null, ?int $y = null)
    {
        $this
            ->setName($name)
            ->setScaleMode($scaleMode)
            ->setShowName($showName)
            ->setX($x)
            ->setY($y);
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
     * @return \StructType\ScreenCellSaveData
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
     * Get ScaleMode value
     * @return string|null
     */
    public function getScaleMode(): ?string
    {
        return $this->ScaleMode;
    }
    /**
     * Set ScaleMode value
     * @uses \EnumType\ScreenScaleMode::valueIsValid()
     * @uses \EnumType\ScreenScaleMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $scaleMode
     * @return \StructType\ScreenCellSaveData
     */
    public function setScaleMode(?string $scaleMode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ScreenScaleMode::valueIsValid($scaleMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ScreenScaleMode', is_array($scaleMode) ? implode(', ', $scaleMode) : var_export($scaleMode, true), implode(', ', \EnumType\ScreenScaleMode::getValidValues())), __LINE__);
        }
        $this->ScaleMode = $scaleMode;
        
        return $this;
    }
    /**
     * Get ShowName value
     * @return bool|null
     */
    public function getShowName(): ?bool
    {
        return $this->ShowName;
    }
    /**
     * Set ShowName value
     * @param bool $showName
     * @return \StructType\ScreenCellSaveData
     */
    public function setShowName(?bool $showName = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showName) && !is_bool($showName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showName, true), gettype($showName)), __LINE__);
        }
        $this->ShowName = $showName;
        
        return $this;
    }
    /**
     * Get X value
     * @return int|null
     */
    public function getX(): ?int
    {
        return $this->X;
    }
    /**
     * Set X value
     * @param int $x
     * @return \StructType\ScreenCellSaveData
     */
    public function setX(?int $x = null): self
    {
        // validation for constraint: int
        if (!is_null($x) && !(is_int($x) || ctype_digit($x))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($x, true), gettype($x)), __LINE__);
        }
        $this->X = $x;
        
        return $this;
    }
    /**
     * Get Y value
     * @return int|null
     */
    public function getY(): ?int
    {
        return $this->Y;
    }
    /**
     * Set Y value
     * @param int $y
     * @return \StructType\ScreenCellSaveData
     */
    public function setY(?int $y = null): self
    {
        // validation for constraint: int
        if (!is_null($y) && !(is_int($y) || ctype_digit($y))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($y, true), gettype($y)), __LINE__);
        }
        $this->Y = $y;
        
        return $this;
    }
}
