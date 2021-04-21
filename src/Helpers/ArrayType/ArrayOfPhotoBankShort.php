<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhotoBankShort ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPhotoBankShort
 * @subpackage Arrays
 */
class ArrayOfPhotoBankShort extends AbstractStructArrayBase
{
    /**
     * The PhotoBankShort
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhotoBankShort[]
     */
    protected array $PhotoBankShort = [];
    /**
     * Constructor method for ArrayOfPhotoBankShort
     * @uses ArrayOfPhotoBankShort::setPhotoBankShort()
     * @param \StructType\PhotoBankShort[] $photoBankShort
     */
    public function __construct(array $photoBankShort = [])
    {
        $this
            ->setPhotoBankShort($photoBankShort);
    }
    /**
     * Get PhotoBankShort value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhotoBankShort[]
     */
    public function getPhotoBankShort(): ?array
    {
        return isset($this->PhotoBankShort) ? $this->PhotoBankShort : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPhotoBankShort method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhotoBankShort method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhotoBankShortForArrayConstraintsFromSetPhotoBankShort(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhotoBankShortPhotoBankShortItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhotoBankShortPhotoBankShortItem instanceof \StructType\PhotoBankShort) {
                $invalidValues[] = is_object($arrayOfPhotoBankShortPhotoBankShortItem) ? get_class($arrayOfPhotoBankShortPhotoBankShortItem) : sprintf('%s(%s)', gettype($arrayOfPhotoBankShortPhotoBankShortItem), var_export($arrayOfPhotoBankShortPhotoBankShortItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhotoBankShort property can only contain items of type \StructType\PhotoBankShort, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhotoBankShort value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\PhotoBankShort[] $photoBankShort
     * @return \ArrayType\ArrayOfPhotoBankShort
     */
    public function setPhotoBankShort(array $photoBankShort = []): self
    {
        // validation for constraint: array
        if ('' !== ($photoBankShortArrayErrorMessage = self::validatePhotoBankShortForArrayConstraintsFromSetPhotoBankShort($photoBankShort))) {
            throw new InvalidArgumentException($photoBankShortArrayErrorMessage, __LINE__);
        }
        if (is_null($photoBankShort) || (is_array($photoBankShort) && empty($photoBankShort))) {
            unset($this->PhotoBankShort);
        } else {
            $this->PhotoBankShort = $photoBankShort;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\PhotoBankShort|null
     */
    public function current(): ?\StructType\PhotoBankShort
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\PhotoBankShort|null
     */
    public function item($index): ?\StructType\PhotoBankShort
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\PhotoBankShort|null
     */
    public function first(): ?\StructType\PhotoBankShort
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\PhotoBankShort|null
     */
    public function last(): ?\StructType\PhotoBankShort
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\PhotoBankShort|null
     */
    public function offsetGet($offset): ?\StructType\PhotoBankShort
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\PhotoBankShort $item
     * @return \ArrayType\ArrayOfPhotoBankShort
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PhotoBankShort) {
            throw new InvalidArgumentException(sprintf('The PhotoBankShort property can only contain items of type \StructType\PhotoBankShort, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhotoBankShort
     */
    public function getAttributeName(): string
    {
        return 'PhotoBankShort';
    }
}
