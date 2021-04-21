<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DayTypeSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DayTypeSaveData
 * @subpackage Structs
 */
class DayTypeSaveData extends AbstractStructBase
{
    /**
     * The Convention
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Convention = null;
    /**
     * The DayMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DayMode = null;
    /**
     * The DigitalConvention
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $DigitalConvention = null;
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
     * The RowColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RowColor = null;
    /**
     * Constructor method for DayTypeSaveData
     * @uses DayTypeSaveData::setConvention()
     * @uses DayTypeSaveData::setDayMode()
     * @uses DayTypeSaveData::setDigitalConvention()
     * @uses DayTypeSaveData::setIsStandart()
     * @uses DayTypeSaveData::setName()
     * @uses DayTypeSaveData::setRowColor()
     * @param string $convention
     * @param string $dayMode
     * @param int $digitalConvention
     * @param bool $isStandart
     * @param string $name
     * @param string $rowColor
     */
    public function __construct(?string $convention = null, ?string $dayMode = null, ?int $digitalConvention = null, ?bool $isStandart = null, ?string $name = null, ?string $rowColor = null)
    {
        $this
            ->setConvention($convention)
            ->setDayMode($dayMode)
            ->setDigitalConvention($digitalConvention)
            ->setIsStandart($isStandart)
            ->setName($name)
            ->setRowColor($rowColor);
    }
    /**
     * Get Convention value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConvention(): ?string
    {
        return isset($this->Convention) ? $this->Convention : null;
    }
    /**
     * Set Convention value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $convention
     * @return \StructType\DayTypeSaveData
     */
    public function setConvention(?string $convention = null): self
    {
        // validation for constraint: string
        if (!is_null($convention) && !is_string($convention)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($convention, true), gettype($convention)), __LINE__);
        }
        if (is_null($convention) || (is_array($convention) && empty($convention))) {
            unset($this->Convention);
        } else {
            $this->Convention = $convention;
        }
        
        return $this;
    }
    /**
     * Get DayMode value
     * @return string|null
     */
    public function getDayMode(): ?string
    {
        return $this->DayMode;
    }
    /**
     * Set DayMode value
     * @uses \EnumType\DayMode::valueIsValid()
     * @uses \EnumType\DayMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dayMode
     * @return \StructType\DayTypeSaveData
     */
    public function setDayMode(?string $dayMode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\DayMode::valueIsValid($dayMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DayMode', is_array($dayMode) ? implode(', ', $dayMode) : var_export($dayMode, true), implode(', ', \EnumType\DayMode::getValidValues())), __LINE__);
        }
        $this->DayMode = $dayMode;
        
        return $this;
    }
    /**
     * Get DigitalConvention value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDigitalConvention(): ?int
    {
        return isset($this->DigitalConvention) ? $this->DigitalConvention : null;
    }
    /**
     * Set DigitalConvention value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $digitalConvention
     * @return \StructType\DayTypeSaveData
     */
    public function setDigitalConvention(?int $digitalConvention = null): self
    {
        // validation for constraint: int
        if (!is_null($digitalConvention) && !(is_int($digitalConvention) || ctype_digit($digitalConvention))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($digitalConvention, true), gettype($digitalConvention)), __LINE__);
        }
        if (is_null($digitalConvention) || (is_array($digitalConvention) && empty($digitalConvention))) {
            unset($this->DigitalConvention);
        } else {
            $this->DigitalConvention = $digitalConvention;
        }
        
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
     * @return \StructType\DayTypeSaveData
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
     * @return \StructType\DayTypeSaveData
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
     * Get RowColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRowColor(): ?string
    {
        return isset($this->RowColor) ? $this->RowColor : null;
    }
    /**
     * Set RowColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rowColor
     * @return \StructType\DayTypeSaveData
     */
    public function setRowColor(?string $rowColor = null): self
    {
        // validation for constraint: string
        if (!is_null($rowColor) && !is_string($rowColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rowColor, true), gettype($rowColor)), __LINE__);
        }
        if (is_null($rowColor) || (is_array($rowColor) && empty($rowColor))) {
            unset($this->RowColor);
        } else {
            $this->RowColor = $rowColor;
        }
        
        return $this;
    }
}
