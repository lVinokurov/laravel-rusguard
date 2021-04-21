<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAdditionalFieldBase ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAdditionalFieldBase
 * @subpackage Arrays
 */
class ArrayOfAdditionalFieldBase extends AbstractStructArrayBase
{
    /**
     * The AdditionalFieldBase
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AdditionalFieldBase[]
     */
    protected array $AdditionalFieldBase = [];
    /**
     * Constructor method for ArrayOfAdditionalFieldBase
     * @uses ArrayOfAdditionalFieldBase::setAdditionalFieldBase()
     * @param \StructType\AdditionalFieldBase[] $additionalFieldBase
     */
    public function __construct(array $additionalFieldBase = [])
    {
        $this
            ->setAdditionalFieldBase($additionalFieldBase);
    }
    /**
     * Get AdditionalFieldBase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AdditionalFieldBase[]
     */
    public function getAdditionalFieldBase(): ?array
    {
        return isset($this->AdditionalFieldBase) ? $this->AdditionalFieldBase : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalFieldBase method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalFieldBase method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalFieldBaseForArrayConstraintsFromSetAdditionalFieldBase(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAdditionalFieldBaseAdditionalFieldBaseItem) {
            // validation for constraint: itemType
            if (!$arrayOfAdditionalFieldBaseAdditionalFieldBaseItem instanceof \StructType\AdditionalFieldBase) {
                $invalidValues[] = is_object($arrayOfAdditionalFieldBaseAdditionalFieldBaseItem) ? get_class($arrayOfAdditionalFieldBaseAdditionalFieldBaseItem) : sprintf('%s(%s)', gettype($arrayOfAdditionalFieldBaseAdditionalFieldBaseItem), var_export($arrayOfAdditionalFieldBaseAdditionalFieldBaseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalFieldBase property can only contain items of type \StructType\AdditionalFieldBase, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalFieldBase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AdditionalFieldBase[] $additionalFieldBase
     * @return \ArrayType\ArrayOfAdditionalFieldBase
     */
    public function setAdditionalFieldBase(array $additionalFieldBase = []): self
    {
        // validation for constraint: array
        if ('' !== ($additionalFieldBaseArrayErrorMessage = self::validateAdditionalFieldBaseForArrayConstraintsFromSetAdditionalFieldBase($additionalFieldBase))) {
            throw new InvalidArgumentException($additionalFieldBaseArrayErrorMessage, __LINE__);
        }
        if (is_null($additionalFieldBase) || (is_array($additionalFieldBase) && empty($additionalFieldBase))) {
            unset($this->AdditionalFieldBase);
        } else {
            $this->AdditionalFieldBase = $additionalFieldBase;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AdditionalFieldBase|null
     */
    public function current(): ?\StructType\AdditionalFieldBase
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AdditionalFieldBase|null
     */
    public function item($index): ?\StructType\AdditionalFieldBase
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AdditionalFieldBase|null
     */
    public function first(): ?\StructType\AdditionalFieldBase
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AdditionalFieldBase|null
     */
    public function last(): ?\StructType\AdditionalFieldBase
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AdditionalFieldBase|null
     */
    public function offsetGet($offset): ?\StructType\AdditionalFieldBase
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AdditionalFieldBase $item
     * @return \ArrayType\ArrayOfAdditionalFieldBase
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AdditionalFieldBase) {
            throw new InvalidArgumentException(sprintf('The AdditionalFieldBase property can only contain items of type \StructType\AdditionalFieldBase, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AdditionalFieldBase
     */
    public function getAttributeName(): string
    {
        return 'AdditionalFieldBase';
    }
}
