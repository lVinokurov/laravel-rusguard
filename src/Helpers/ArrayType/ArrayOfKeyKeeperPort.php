<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyKeeperPort ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyKeeperPort
 * @subpackage Arrays
 */
class ArrayOfKeyKeeperPort extends AbstractStructArrayBase
{
    /**
     * The KeyKeeperPort
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\KeyKeeperPort[]
     */
    protected array $KeyKeeperPort = [];
    /**
     * Constructor method for ArrayOfKeyKeeperPort
     * @uses ArrayOfKeyKeeperPort::setKeyKeeperPort()
     * @param \StructType\KeyKeeperPort[] $keyKeeperPort
     */
    public function __construct(array $keyKeeperPort = [])
    {
        $this
            ->setKeyKeeperPort($keyKeeperPort);
    }
    /**
     * Get KeyKeeperPort value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\KeyKeeperPort[]
     */
    public function getKeyKeeperPort(): ?array
    {
        return isset($this->KeyKeeperPort) ? $this->KeyKeeperPort : null;
    }
    /**
     * This method is responsible for validating the values passed to the setKeyKeeperPort method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyKeeperPort method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyKeeperPortForArrayConstraintsFromSetKeyKeeperPort(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfKeyKeeperPortKeyKeeperPortItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyKeeperPortKeyKeeperPortItem instanceof \StructType\KeyKeeperPort) {
                $invalidValues[] = is_object($arrayOfKeyKeeperPortKeyKeeperPortItem) ? get_class($arrayOfKeyKeeperPortKeyKeeperPortItem) : sprintf('%s(%s)', gettype($arrayOfKeyKeeperPortKeyKeeperPortItem), var_export($arrayOfKeyKeeperPortKeyKeeperPortItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyKeeperPort property can only contain items of type \StructType\KeyKeeperPort, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set KeyKeeperPort value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\KeyKeeperPort[] $keyKeeperPort
     * @return \ArrayType\ArrayOfKeyKeeperPort
     */
    public function setKeyKeeperPort(array $keyKeeperPort = []): self
    {
        // validation for constraint: array
        if ('' !== ($keyKeeperPortArrayErrorMessage = self::validateKeyKeeperPortForArrayConstraintsFromSetKeyKeeperPort($keyKeeperPort))) {
            throw new InvalidArgumentException($keyKeeperPortArrayErrorMessage, __LINE__);
        }
        if (is_null($keyKeeperPort) || (is_array($keyKeeperPort) && empty($keyKeeperPort))) {
            unset($this->KeyKeeperPort);
        } else {
            $this->KeyKeeperPort = $keyKeeperPort;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\KeyKeeperPort|null
     */
    public function current(): ?\StructType\KeyKeeperPort
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\KeyKeeperPort|null
     */
    public function item($index): ?\StructType\KeyKeeperPort
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\KeyKeeperPort|null
     */
    public function first(): ?\StructType\KeyKeeperPort
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\KeyKeeperPort|null
     */
    public function last(): ?\StructType\KeyKeeperPort
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\KeyKeeperPort|null
     */
    public function offsetGet($offset): ?\StructType\KeyKeeperPort
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\KeyKeeperPort $item
     * @return \ArrayType\ArrayOfKeyKeeperPort
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\KeyKeeperPort) {
            throw new InvalidArgumentException(sprintf('The KeyKeeperPort property can only contain items of type \StructType\KeyKeeperPort, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyKeeperPort
     */
    public function getAttributeName(): string
    {
        return 'KeyKeeperPort';
    }
}
