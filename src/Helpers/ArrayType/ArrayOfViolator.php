<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfViolator ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfViolator
 * @subpackage Arrays
 */
class ArrayOfViolator extends AbstractStructArrayBase
{
    /**
     * The Violator
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Violator[]
     */
    protected array $Violator = [];
    /**
     * Constructor method for ArrayOfViolator
     * @uses ArrayOfViolator::setViolator()
     * @param \StructType\Violator[] $violator
     */
    public function __construct(array $violator = [])
    {
        $this
            ->setViolator($violator);
    }
    /**
     * Get Violator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Violator[]
     */
    public function getViolator(): ?array
    {
        return isset($this->Violator) ? $this->Violator : null;
    }
    /**
     * This method is responsible for validating the values passed to the setViolator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setViolator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateViolatorForArrayConstraintsFromSetViolator(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfViolatorViolatorItem) {
            // validation for constraint: itemType
            if (!$arrayOfViolatorViolatorItem instanceof \StructType\Violator) {
                $invalidValues[] = is_object($arrayOfViolatorViolatorItem) ? get_class($arrayOfViolatorViolatorItem) : sprintf('%s(%s)', gettype($arrayOfViolatorViolatorItem), var_export($arrayOfViolatorViolatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Violator property can only contain items of type \StructType\Violator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Violator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Violator[] $violator
     * @return \ArrayType\ArrayOfViolator
     */
    public function setViolator(array $violator = []): self
    {
        // validation for constraint: array
        if ('' !== ($violatorArrayErrorMessage = self::validateViolatorForArrayConstraintsFromSetViolator($violator))) {
            throw new InvalidArgumentException($violatorArrayErrorMessage, __LINE__);
        }
        if (is_null($violator) || (is_array($violator) && empty($violator))) {
            unset($this->Violator);
        } else {
            $this->Violator = $violator;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Violator|null
     */
    public function current(): ?\StructType\Violator
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Violator|null
     */
    public function item($index): ?\StructType\Violator
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Violator|null
     */
    public function first(): ?\StructType\Violator
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Violator|null
     */
    public function last(): ?\StructType\Violator
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Violator|null
     */
    public function offsetGet($offset): ?\StructType\Violator
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\Violator $item
     * @return \ArrayType\ArrayOfViolator
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Violator) {
            throw new InvalidArgumentException(sprintf('The Violator property can only contain items of type \StructType\Violator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Violator
     */
    public function getAttributeName(): string
    {
        return 'Violator';
    }
}
