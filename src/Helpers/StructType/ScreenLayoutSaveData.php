<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScreenLayoutSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ScreenLayoutSaveData
 * @subpackage Structs
 */
class ScreenLayoutSaveData extends AbstractStructBase
{
    /**
     * The AspectRatio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AspectRatio = null;
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
     * The ShowGrid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowGrid = null;
    /**
     * The ShowName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowName = null;
    /**
     * Constructor method for ScreenLayoutSaveData
     * @uses ScreenLayoutSaveData::setAspectRatio()
     * @uses ScreenLayoutSaveData::setName()
     * @uses ScreenLayoutSaveData::setScaleMode()
     * @uses ScreenLayoutSaveData::setShowGrid()
     * @uses ScreenLayoutSaveData::setShowName()
     * @param string $aspectRatio
     * @param string $name
     * @param string $scaleMode
     * @param bool $showGrid
     * @param bool $showName
     */
    public function __construct(?string $aspectRatio = null, ?string $name = null, ?string $scaleMode = null, ?bool $showGrid = null, ?bool $showName = null)
    {
        $this
            ->setAspectRatio($aspectRatio)
            ->setName($name)
            ->setScaleMode($scaleMode)
            ->setShowGrid($showGrid)
            ->setShowName($showName);
    }
    /**
     * Get AspectRatio value
     * @return string|null
     */
    public function getAspectRatio(): ?string
    {
        return $this->AspectRatio;
    }
    /**
     * Set AspectRatio value
     * @uses \EnumType\ScreenAspectRatio::valueIsValid()
     * @uses \EnumType\ScreenAspectRatio::getValidValues()
     * @throws InvalidArgumentException
     * @param string $aspectRatio
     * @return \StructType\ScreenLayoutSaveData
     */
    public function setAspectRatio(?string $aspectRatio = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ScreenAspectRatio::valueIsValid($aspectRatio)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ScreenAspectRatio', is_array($aspectRatio) ? implode(', ', $aspectRatio) : var_export($aspectRatio, true), implode(', ', \EnumType\ScreenAspectRatio::getValidValues())), __LINE__);
        }
        $this->AspectRatio = $aspectRatio;
        
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
     * @return \StructType\ScreenLayoutSaveData
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
     * @return \StructType\ScreenLayoutSaveData
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
     * Get ShowGrid value
     * @return bool|null
     */
    public function getShowGrid(): ?bool
    {
        return $this->ShowGrid;
    }
    /**
     * Set ShowGrid value
     * @param bool $showGrid
     * @return \StructType\ScreenLayoutSaveData
     */
    public function setShowGrid(?bool $showGrid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showGrid) && !is_bool($showGrid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showGrid, true), gettype($showGrid)), __LINE__);
        }
        $this->ShowGrid = $showGrid;
        
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
     * @return \StructType\ScreenLayoutSaveData
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
}
