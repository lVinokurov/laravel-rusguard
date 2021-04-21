<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for License StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:License
 * @subpackage Structs
 */
class License extends AbstractStructBase
{
    /**
     * The ElementID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ElementID = null;
    /**
     * The ElementName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ElementName = null;
    /**
     * The ModuleID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ModuleID = null;
    /**
     * The ModuleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ModuleName = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * Constructor method for License
     * @uses License::setElementID()
     * @uses License::setElementName()
     * @uses License::setModuleID()
     * @uses License::setModuleName()
     * @uses License::setValue()
     * @param string $elementID
     * @param string $elementName
     * @param string $moduleID
     * @param string $moduleName
     * @param string $value
     */
    public function __construct(?string $elementID = null, ?string $elementName = null, ?string $moduleID = null, ?string $moduleName = null, ?string $value = null)
    {
        $this
            ->setElementID($elementID)
            ->setElementName($elementName)
            ->setModuleID($moduleID)
            ->setModuleName($moduleName)
            ->setValue($value);
    }
    /**
     * Get ElementID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getElementID(): ?string
    {
        return isset($this->ElementID) ? $this->ElementID : null;
    }
    /**
     * Set ElementID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $elementID
     * @return \StructType\License
     */
    public function setElementID(?string $elementID = null): self
    {
        // validation for constraint: string
        if (!is_null($elementID) && !is_string($elementID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elementID, true), gettype($elementID)), __LINE__);
        }
        if (is_null($elementID) || (is_array($elementID) && empty($elementID))) {
            unset($this->ElementID);
        } else {
            $this->ElementID = $elementID;
        }
        
        return $this;
    }
    /**
     * Get ElementName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getElementName(): ?string
    {
        return isset($this->ElementName) ? $this->ElementName : null;
    }
    /**
     * Set ElementName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $elementName
     * @return \StructType\License
     */
    public function setElementName(?string $elementName = null): self
    {
        // validation for constraint: string
        if (!is_null($elementName) && !is_string($elementName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elementName, true), gettype($elementName)), __LINE__);
        }
        if (is_null($elementName) || (is_array($elementName) && empty($elementName))) {
            unset($this->ElementName);
        } else {
            $this->ElementName = $elementName;
        }
        
        return $this;
    }
    /**
     * Get ModuleID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModuleID(): ?string
    {
        return isset($this->ModuleID) ? $this->ModuleID : null;
    }
    /**
     * Set ModuleID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moduleID
     * @return \StructType\License
     */
    public function setModuleID(?string $moduleID = null): self
    {
        // validation for constraint: string
        if (!is_null($moduleID) && !is_string($moduleID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moduleID, true), gettype($moduleID)), __LINE__);
        }
        if (is_null($moduleID) || (is_array($moduleID) && empty($moduleID))) {
            unset($this->ModuleID);
        } else {
            $this->ModuleID = $moduleID;
        }
        
        return $this;
    }
    /**
     * Get ModuleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModuleName(): ?string
    {
        return isset($this->ModuleName) ? $this->ModuleName : null;
    }
    /**
     * Set ModuleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moduleName
     * @return \StructType\License
     */
    public function setModuleName(?string $moduleName = null): self
    {
        // validation for constraint: string
        if (!is_null($moduleName) && !is_string($moduleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moduleName, true), gettype($moduleName)), __LINE__);
        }
        if (is_null($moduleName) || (is_array($moduleName) && empty($moduleName))) {
            unset($this->ModuleName);
        } else {
            $this->ModuleName = $moduleName;
        }
        
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue(): ?string
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \StructType\License
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        
        return $this;
    }
}
