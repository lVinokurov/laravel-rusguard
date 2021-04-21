<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListField StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ListField
 * @subpackage Structs
 */
class ListField extends AdditionalFieldBase
{
    /**
     * The DefaultValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ListItem|null
     */
    protected ?\StructType\ListItem $DefaultValue = null;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfListItem|null
     */
    protected ?\ArrayType\ArrayOfListItem $Items = null;
    /**
     * Constructor method for ListField
     * @uses ListField::setDefaultValue()
     * @uses ListField::setItems()
     * @param \StructType\ListItem $defaultValue
     * @param \ArrayType\ArrayOfListItem $items
     */
    public function __construct(?\StructType\ListItem $defaultValue = null, ?\ArrayType\ArrayOfListItem $items = null)
    {
        $this
            ->setDefaultValue($defaultValue)
            ->setItems($items);
    }
    /**
     * Get DefaultValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ListItem|null
     */
    public function getDefaultValue(): ?\StructType\ListItem
    {
        return isset($this->DefaultValue) ? $this->DefaultValue : null;
    }
    /**
     * Set DefaultValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ListItem $defaultValue
     * @return \StructType\ListField
     */
    public function setDefaultValue(?\StructType\ListItem $defaultValue = null): self
    {
        if (is_null($defaultValue) || (is_array($defaultValue) && empty($defaultValue))) {
            unset($this->DefaultValue);
        } else {
            $this->DefaultValue = $defaultValue;
        }
        
        return $this;
    }
    /**
     * Get Items value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfListItem|null
     */
    public function getItems(): ?\ArrayType\ArrayOfListItem
    {
        return isset($this->Items) ? $this->Items : null;
    }
    /**
     * Set Items value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfListItem $items
     * @return \StructType\ListField
     */
    public function setItems(?\ArrayType\ArrayOfListItem $items = null): self
    {
        if (is_null($items) || (is_array($items) && empty($items))) {
            unset($this->Items);
        } else {
            $this->Items = $items;
        }
        
        return $this;
    }
}
