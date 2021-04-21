<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfListItem ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfListItem
 * @subpackage Arrays
 */
class ArrayOfListItem extends AbstractStructArrayBase
{
    /**
     * The ListItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ListItem[]
     */
    protected array $ListItem = [];
    /**
     * Constructor method for ArrayOfListItem
     * @uses ArrayOfListItem::setListItem()
     * @param \StructType\ListItem[] $listItem
     */
    public function __construct(array $listItem = [])
    {
        $this
            ->setListItem($listItem);
    }
    /**
     * Get ListItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ListItem[]
     */
    public function getListItem(): ?array
    {
        return isset($this->ListItem) ? $this->ListItem : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListItemForArrayConstraintsFromSetListItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfListItemListItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfListItemListItemItem instanceof \StructType\ListItem) {
                $invalidValues[] = is_object($arrayOfListItemListItemItem) ? get_class($arrayOfListItemListItemItem) : sprintf('%s(%s)', gettype($arrayOfListItemListItemItem), var_export($arrayOfListItemListItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListItem property can only contain items of type \StructType\ListItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ListItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ListItem[] $listItem
     * @return \ArrayType\ArrayOfListItem
     */
    public function setListItem(array $listItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($listItemArrayErrorMessage = self::validateListItemForArrayConstraintsFromSetListItem($listItem))) {
            throw new InvalidArgumentException($listItemArrayErrorMessage, __LINE__);
        }
        if (is_null($listItem) || (is_array($listItem) && empty($listItem))) {
            unset($this->ListItem);
        } else {
            $this->ListItem = $listItem;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ListItem|null
     */
    public function current(): ?\StructType\ListItem
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ListItem|null
     */
    public function item($index): ?\StructType\ListItem
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ListItem|null
     */
    public function first(): ?\StructType\ListItem
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ListItem|null
     */
    public function last(): ?\StructType\ListItem
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ListItem|null
     */
    public function offsetGet($offset): ?\StructType\ListItem
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ListItem $item
     * @return \ArrayType\ArrayOfListItem
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ListItem) {
            throw new InvalidArgumentException(sprintf('The ListItem property can only contain items of type \StructType\ListItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ListItem
     */
    public function getAttributeName(): string
    {
        return 'ListItem';
    }
}
