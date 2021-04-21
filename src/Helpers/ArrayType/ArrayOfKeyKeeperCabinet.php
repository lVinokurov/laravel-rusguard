<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyKeeperCabinet ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyKeeperCabinet
 * @subpackage Arrays
 */
class ArrayOfKeyKeeperCabinet extends AbstractStructArrayBase
{
    /**
     * The KeyKeeperCabinet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\KeyKeeperCabinet[]
     */
    protected array $KeyKeeperCabinet = [];
    /**
     * Constructor method for ArrayOfKeyKeeperCabinet
     * @uses ArrayOfKeyKeeperCabinet::setKeyKeeperCabinet()
     * @param \StructType\KeyKeeperCabinet[] $keyKeeperCabinet
     */
    public function __construct(array $keyKeeperCabinet = [])
    {
        $this
            ->setKeyKeeperCabinet($keyKeeperCabinet);
    }
    /**
     * Get KeyKeeperCabinet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\KeyKeeperCabinet[]
     */
    public function getKeyKeeperCabinet(): ?array
    {
        return isset($this->KeyKeeperCabinet) ? $this->KeyKeeperCabinet : null;
    }
    /**
     * This method is responsible for validating the values passed to the setKeyKeeperCabinet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyKeeperCabinet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyKeeperCabinetForArrayConstraintsFromSetKeyKeeperCabinet(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfKeyKeeperCabinetKeyKeeperCabinetItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyKeeperCabinetKeyKeeperCabinetItem instanceof \StructType\KeyKeeperCabinet) {
                $invalidValues[] = is_object($arrayOfKeyKeeperCabinetKeyKeeperCabinetItem) ? get_class($arrayOfKeyKeeperCabinetKeyKeeperCabinetItem) : sprintf('%s(%s)', gettype($arrayOfKeyKeeperCabinetKeyKeeperCabinetItem), var_export($arrayOfKeyKeeperCabinetKeyKeeperCabinetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyKeeperCabinet property can only contain items of type \StructType\KeyKeeperCabinet, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set KeyKeeperCabinet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\KeyKeeperCabinet[] $keyKeeperCabinet
     * @return \ArrayType\ArrayOfKeyKeeperCabinet
     */
    public function setKeyKeeperCabinet(array $keyKeeperCabinet = []): self
    {
        // validation for constraint: array
        if ('' !== ($keyKeeperCabinetArrayErrorMessage = self::validateKeyKeeperCabinetForArrayConstraintsFromSetKeyKeeperCabinet($keyKeeperCabinet))) {
            throw new InvalidArgumentException($keyKeeperCabinetArrayErrorMessage, __LINE__);
        }
        if (is_null($keyKeeperCabinet) || (is_array($keyKeeperCabinet) && empty($keyKeeperCabinet))) {
            unset($this->KeyKeeperCabinet);
        } else {
            $this->KeyKeeperCabinet = $keyKeeperCabinet;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\KeyKeeperCabinet|null
     */
    public function current(): ?\StructType\KeyKeeperCabinet
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\KeyKeeperCabinet|null
     */
    public function item($index): ?\StructType\KeyKeeperCabinet
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\KeyKeeperCabinet|null
     */
    public function first(): ?\StructType\KeyKeeperCabinet
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\KeyKeeperCabinet|null
     */
    public function last(): ?\StructType\KeyKeeperCabinet
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\KeyKeeperCabinet|null
     */
    public function offsetGet($offset): ?\StructType\KeyKeeperCabinet
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\KeyKeeperCabinet $item
     * @return \ArrayType\ArrayOfKeyKeeperCabinet
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\KeyKeeperCabinet) {
            throw new InvalidArgumentException(sprintf('The KeyKeeperCabinet property can only contain items of type \StructType\KeyKeeperCabinet, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyKeeperCabinet
     */
    public function getAttributeName(): string
    {
        return 'KeyKeeperCabinet';
    }
}
