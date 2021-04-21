<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhotoOrder ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPhotoOrder
 * @subpackage Arrays
 */
class ArrayOfPhotoOrder extends AbstractStructArrayBase
{
    /**
     * The PhotoOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhotoOrder[]
     */
    protected array $PhotoOrder = [];
    /**
     * Constructor method for ArrayOfPhotoOrder
     * @uses ArrayOfPhotoOrder::setPhotoOrder()
     * @param \StructType\PhotoOrder[] $photoOrder
     */
    public function __construct(array $photoOrder = [])
    {
        $this
            ->setPhotoOrder($photoOrder);
    }
    /**
     * Get PhotoOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhotoOrder[]
     */
    public function getPhotoOrder(): ?array
    {
        return isset($this->PhotoOrder) ? $this->PhotoOrder : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPhotoOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhotoOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhotoOrderForArrayConstraintsFromSetPhotoOrder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhotoOrderPhotoOrderItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhotoOrderPhotoOrderItem instanceof \StructType\PhotoOrder) {
                $invalidValues[] = is_object($arrayOfPhotoOrderPhotoOrderItem) ? get_class($arrayOfPhotoOrderPhotoOrderItem) : sprintf('%s(%s)', gettype($arrayOfPhotoOrderPhotoOrderItem), var_export($arrayOfPhotoOrderPhotoOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhotoOrder property can only contain items of type \StructType\PhotoOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhotoOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\PhotoOrder[] $photoOrder
     * @return \ArrayType\ArrayOfPhotoOrder
     */
    public function setPhotoOrder(array $photoOrder = []): self
    {
        // validation for constraint: array
        if ('' !== ($photoOrderArrayErrorMessage = self::validatePhotoOrderForArrayConstraintsFromSetPhotoOrder($photoOrder))) {
            throw new InvalidArgumentException($photoOrderArrayErrorMessage, __LINE__);
        }
        if (is_null($photoOrder) || (is_array($photoOrder) && empty($photoOrder))) {
            unset($this->PhotoOrder);
        } else {
            $this->PhotoOrder = $photoOrder;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\PhotoOrder|null
     */
    public function current(): ?\StructType\PhotoOrder
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\PhotoOrder|null
     */
    public function item($index): ?\StructType\PhotoOrder
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\PhotoOrder|null
     */
    public function first(): ?\StructType\PhotoOrder
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\PhotoOrder|null
     */
    public function last(): ?\StructType\PhotoOrder
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\PhotoOrder|null
     */
    public function offsetGet($offset): ?\StructType\PhotoOrder
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\PhotoOrder $item
     * @return \ArrayType\ArrayOfPhotoOrder
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PhotoOrder) {
            throw new InvalidArgumentException(sprintf('The PhotoOrder property can only contain items of type \StructType\PhotoOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhotoOrder
     */
    public function getAttributeName(): string
    {
        return 'PhotoOrder';
    }
}
