<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNUUOVideoRecorder ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNUUOVideoRecorder
 * @subpackage Arrays
 */
class ArrayOfNUUOVideoRecorder extends AbstractStructArrayBase
{
    /**
     * The NUUOVideoRecorder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\NUUOVideoRecorder[]
     */
    protected array $NUUOVideoRecorder = [];
    /**
     * Constructor method for ArrayOfNUUOVideoRecorder
     * @uses ArrayOfNUUOVideoRecorder::setNUUOVideoRecorder()
     * @param \StructType\NUUOVideoRecorder[] $nUUOVideoRecorder
     */
    public function __construct(array $nUUOVideoRecorder = [])
    {
        $this
            ->setNUUOVideoRecorder($nUUOVideoRecorder);
    }
    /**
     * Get NUUOVideoRecorder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\NUUOVideoRecorder[]
     */
    public function getNUUOVideoRecorder(): ?array
    {
        return isset($this->NUUOVideoRecorder) ? $this->NUUOVideoRecorder : null;
    }
    /**
     * This method is responsible for validating the values passed to the setNUUOVideoRecorder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNUUOVideoRecorder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNUUOVideoRecorderForArrayConstraintsFromSetNUUOVideoRecorder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNUUOVideoRecorderNUUOVideoRecorderItem) {
            // validation for constraint: itemType
            if (!$arrayOfNUUOVideoRecorderNUUOVideoRecorderItem instanceof \StructType\NUUOVideoRecorder) {
                $invalidValues[] = is_object($arrayOfNUUOVideoRecorderNUUOVideoRecorderItem) ? get_class($arrayOfNUUOVideoRecorderNUUOVideoRecorderItem) : sprintf('%s(%s)', gettype($arrayOfNUUOVideoRecorderNUUOVideoRecorderItem), var_export($arrayOfNUUOVideoRecorderNUUOVideoRecorderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NUUOVideoRecorder property can only contain items of type \StructType\NUUOVideoRecorder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NUUOVideoRecorder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\NUUOVideoRecorder[] $nUUOVideoRecorder
     * @return \ArrayType\ArrayOfNUUOVideoRecorder
     */
    public function setNUUOVideoRecorder(array $nUUOVideoRecorder = []): self
    {
        // validation for constraint: array
        if ('' !== ($nUUOVideoRecorderArrayErrorMessage = self::validateNUUOVideoRecorderForArrayConstraintsFromSetNUUOVideoRecorder($nUUOVideoRecorder))) {
            throw new InvalidArgumentException($nUUOVideoRecorderArrayErrorMessage, __LINE__);
        }
        if (is_null($nUUOVideoRecorder) || (is_array($nUUOVideoRecorder) && empty($nUUOVideoRecorder))) {
            unset($this->NUUOVideoRecorder);
        } else {
            $this->NUUOVideoRecorder = $nUUOVideoRecorder;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\NUUOVideoRecorder|null
     */
    public function current(): ?\StructType\NUUOVideoRecorder
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\NUUOVideoRecorder|null
     */
    public function item($index): ?\StructType\NUUOVideoRecorder
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\NUUOVideoRecorder|null
     */
    public function first(): ?\StructType\NUUOVideoRecorder
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\NUUOVideoRecorder|null
     */
    public function last(): ?\StructType\NUUOVideoRecorder
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\NUUOVideoRecorder|null
     */
    public function offsetGet($offset): ?\StructType\NUUOVideoRecorder
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\NUUOVideoRecorder $item
     * @return \ArrayType\ArrayOfNUUOVideoRecorder
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NUUOVideoRecorder) {
            throw new InvalidArgumentException(sprintf('The NUUOVideoRecorder property can only contain items of type \StructType\NUUOVideoRecorder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NUUOVideoRecorder
     */
    public function getAttributeName(): string
    {
        return 'NUUOVideoRecorder';
    }
}
