<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsBoxAccessLevelSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsBoxAccessLevelSaveData
 * @subpackage Structs
 */
class AcsBoxAccessLevelSaveData extends AbstractStructBase
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
     * The Mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Mode = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for AcsBoxAccessLevelSaveData
     * @uses AcsBoxAccessLevelSaveData::setDescription()
     * @uses AcsBoxAccessLevelSaveData::setMode()
     * @uses AcsBoxAccessLevelSaveData::setName()
     * @param string $description
     * @param string $mode
     * @param string $name
     */
    public function __construct(?string $description = null, ?string $mode = null, ?string $name = null)
    {
        $this
            ->setDescription($description)
            ->setMode($mode)
            ->setName($name);
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
     * @return \StructType\AcsBoxAccessLevelSaveData
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
     * Get Mode value
     * @return string|null
     */
    public function getMode(): ?string
    {
        return $this->Mode;
    }
    /**
     * Set Mode value
     * @uses \EnumType\BoxAccessLevelMode::valueIsValid()
     * @uses \EnumType\BoxAccessLevelMode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mode
     * @return \StructType\AcsBoxAccessLevelSaveData
     */
    public function setMode(?string $mode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\BoxAccessLevelMode::valueIsValid($mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BoxAccessLevelMode', is_array($mode) ? implode(', ', $mode) : var_export($mode, true), implode(', ', \EnumType\BoxAccessLevelMode::getValidValues())), __LINE__);
        }
        $this->Mode = $mode;
        
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
     * @return \StructType\AcsBoxAccessLevelSaveData
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
