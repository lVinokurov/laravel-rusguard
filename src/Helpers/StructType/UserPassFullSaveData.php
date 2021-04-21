<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserPassFullSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserPassFullSaveData
 * @subpackage Structs
 */
class UserPassFullSaveData extends AbstractStructBase
{
    /**
     * The BackgroindImage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BackgroindImage = null;
    /**
     * The BackgroundColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BackgroundColor = null;
    /**
     * The BackgroundScaleMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BackgroundScaleMode = null;
    /**
     * The BackgroundType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BackgroundType = null;
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
     * Constructor method for UserPassFullSaveData
     * @uses UserPassFullSaveData::setBackgroindImage()
     * @uses UserPassFullSaveData::setBackgroundColor()
     * @uses UserPassFullSaveData::setBackgroundScaleMode()
     * @uses UserPassFullSaveData::setBackgroundType()
     * @uses UserPassFullSaveData::setHeight()
     * @uses UserPassFullSaveData::setIsStandart()
     * @uses UserPassFullSaveData::setStandartHeight()
     * @uses UserPassFullSaveData::setStandartWidth()
     * @uses UserPassFullSaveData::setWidth()
     * @param string $backgroindImage
     * @param string $backgroundColor
     * @param string $backgroundScaleMode
     * @param string $backgroundType
     * @param int $height
     * @param bool $isStandart
     * @param int $standartHeight
     * @param int $standartWidth
     * @param int $width
     */
    public function __construct(?string $backgroindImage = null, ?string $backgroundColor = null, ?string $backgroundScaleMode = null, ?string $backgroundType = null, ?int $height = null, ?bool $isStandart = null, ?int $standartHeight = null, ?int $standartWidth = null, ?int $width = null)
    {
        $this
            ->setBackgroindImage($backgroindImage)
            ->setBackgroundColor($backgroundColor)
            ->setBackgroundScaleMode($backgroundScaleMode)
            ->setBackgroundType($backgroundType)
            ->setHeight($height)
            ->setIsStandart($isStandart)
            ->setStandartHeight($standartHeight)
            ->setStandartWidth($standartWidth)
            ->setWidth($width);
    }
    /**
     * Get BackgroindImage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBackgroindImage(): ?string
    {
        return isset($this->BackgroindImage) ? $this->BackgroindImage : null;
    }
    /**
     * Set BackgroindImage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $backgroindImage
     * @return \StructType\UserPassFullSaveData
     */
    public function setBackgroindImage(?string $backgroindImage = null): self
    {
        // validation for constraint: string
        if (!is_null($backgroindImage) && !is_string($backgroindImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($backgroindImage, true), gettype($backgroindImage)), __LINE__);
        }
        if (is_null($backgroindImage) || (is_array($backgroindImage) && empty($backgroindImage))) {
            unset($this->BackgroindImage);
        } else {
            $this->BackgroindImage = $backgroindImage;
        }
        
        return $this;
    }
    /**
     * Get BackgroundColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBackgroundColor(): ?string
    {
        return isset($this->BackgroundColor) ? $this->BackgroundColor : null;
    }
    /**
     * Set BackgroundColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $backgroundColor
     * @return \StructType\UserPassFullSaveData
     */
    public function setBackgroundColor(?string $backgroundColor = null): self
    {
        // validation for constraint: string
        if (!is_null($backgroundColor) && !is_string($backgroundColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($backgroundColor, true), gettype($backgroundColor)), __LINE__);
        }
        if (is_null($backgroundColor) || (is_array($backgroundColor) && empty($backgroundColor))) {
            unset($this->BackgroundColor);
        } else {
            $this->BackgroundColor = $backgroundColor;
        }
        
        return $this;
    }
    /**
     * Get BackgroundScaleMode value
     * @return string|null
     */
    public function getBackgroundScaleMode(): ?string
    {
        return $this->BackgroundScaleMode;
    }
    /**
     * Set BackgroundScaleMode value
     * @uses \EnumType\ScreenScaleMode::valueIsValid()
     * @uses \EnumType\ScreenScaleMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $backgroundScaleMode
     * @return \StructType\UserPassFullSaveData
     */
    public function setBackgroundScaleMode(?string $backgroundScaleMode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ScreenScaleMode::valueIsValid($backgroundScaleMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ScreenScaleMode', is_array($backgroundScaleMode) ? implode(', ', $backgroundScaleMode) : var_export($backgroundScaleMode, true), implode(', ', \EnumType\ScreenScaleMode::getValidValues())), __LINE__);
        }
        $this->BackgroundScaleMode = $backgroundScaleMode;
        
        return $this;
    }
    /**
     * Get BackgroundType value
     * @return string|null
     */
    public function getBackgroundType(): ?string
    {
        return $this->BackgroundType;
    }
    /**
     * Set BackgroundType value
     * @uses \EnumType\PassBackgroundType::valueIsValid()
     * @uses \EnumType\PassBackgroundType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $backgroundType
     * @return \StructType\UserPassFullSaveData
     */
    public function setBackgroundType(?string $backgroundType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\PassBackgroundType::valueIsValid($backgroundType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PassBackgroundType', is_array($backgroundType) ? implode(', ', $backgroundType) : var_export($backgroundType, true), implode(', ', \EnumType\PassBackgroundType::getValidValues())), __LINE__);
        }
        $this->BackgroundType = $backgroundType;
        
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
     * @return \StructType\UserPassFullSaveData
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
     * @return \StructType\UserPassFullSaveData
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
     * @return \StructType\UserPassFullSaveData
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
     * @return \StructType\UserPassFullSaveData
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
     * @return \StructType\UserPassFullSaveData
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
