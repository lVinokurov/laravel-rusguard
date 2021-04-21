<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDataForViolator ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDataForViolator
 * @subpackage Arrays
 */
class ArrayOfDataForViolator extends AbstractStructArrayBase
{
    /**
     * The DataForViolator
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DataForViolator[]
     */
    protected array $DataForViolator = [];
    /**
     * Constructor method for ArrayOfDataForViolator
     * @uses ArrayOfDataForViolator::setDataForViolator()
     * @param \StructType\DataForViolator[] $dataForViolator
     */
    public function __construct(array $dataForViolator = [])
    {
        $this
            ->setDataForViolator($dataForViolator);
    }
    /**
     * Get DataForViolator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DataForViolator[]
     */
    public function getDataForViolator(): ?array
    {
        return isset($this->DataForViolator) ? $this->DataForViolator : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDataForViolator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDataForViolator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataForViolatorForArrayConstraintsFromSetDataForViolator(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDataForViolatorDataForViolatorItem) {
            // validation for constraint: itemType
            if (!$arrayOfDataForViolatorDataForViolatorItem instanceof \StructType\DataForViolator) {
                $invalidValues[] = is_object($arrayOfDataForViolatorDataForViolatorItem) ? get_class($arrayOfDataForViolatorDataForViolatorItem) : sprintf('%s(%s)', gettype($arrayOfDataForViolatorDataForViolatorItem), var_export($arrayOfDataForViolatorDataForViolatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DataForViolator property can only contain items of type \StructType\DataForViolator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DataForViolator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DataForViolator[] $dataForViolator
     * @return \ArrayType\ArrayOfDataForViolator
     */
    public function setDataForViolator(array $dataForViolator = []): self
    {
        // validation for constraint: array
        if ('' !== ($dataForViolatorArrayErrorMessage = self::validateDataForViolatorForArrayConstraintsFromSetDataForViolator($dataForViolator))) {
            throw new InvalidArgumentException($dataForViolatorArrayErrorMessage, __LINE__);
        }
        if (is_null($dataForViolator) || (is_array($dataForViolator) && empty($dataForViolator))) {
            unset($this->DataForViolator);
        } else {
            $this->DataForViolator = $dataForViolator;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DataForViolator|null
     */
    public function current(): ?\StructType\DataForViolator
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DataForViolator|null
     */
    public function item($index): ?\StructType\DataForViolator
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DataForViolator|null
     */
    public function first(): ?\StructType\DataForViolator
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DataForViolator|null
     */
    public function last(): ?\StructType\DataForViolator
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DataForViolator|null
     */
    public function offsetGet($offset): ?\StructType\DataForViolator
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DataForViolator $item
     * @return \ArrayType\ArrayOfDataForViolator
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DataForViolator) {
            throw new InvalidArgumentException(sprintf('The DataForViolator property can only contain items of type \StructType\DataForViolator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DataForViolator
     */
    public function getAttributeName(): string
    {
        return 'DataForViolator';
    }
}
