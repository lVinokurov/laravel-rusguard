<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLanCanConverter ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLanCanConverter
 * @subpackage Arrays
 */
class ArrayOfLanCanConverter extends AbstractStructArrayBase
{
    /**
     * The LanCanConverter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LanCanConverter[]
     */
    protected array $LanCanConverter = [];
    /**
     * Constructor method for ArrayOfLanCanConverter
     * @uses ArrayOfLanCanConverter::setLanCanConverter()
     * @param \StructType\LanCanConverter[] $lanCanConverter
     */
    public function __construct(array $lanCanConverter = [])
    {
        $this
            ->setLanCanConverter($lanCanConverter);
    }
    /**
     * Get LanCanConverter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LanCanConverter[]
     */
    public function getLanCanConverter(): ?array
    {
        return isset($this->LanCanConverter) ? $this->LanCanConverter : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLanCanConverter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanCanConverter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanCanConverterForArrayConstraintsFromSetLanCanConverter(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLanCanConverterLanCanConverterItem) {
            // validation for constraint: itemType
            if (!$arrayOfLanCanConverterLanCanConverterItem instanceof \StructType\LanCanConverter) {
                $invalidValues[] = is_object($arrayOfLanCanConverterLanCanConverterItem) ? get_class($arrayOfLanCanConverterLanCanConverterItem) : sprintf('%s(%s)', gettype($arrayOfLanCanConverterLanCanConverterItem), var_export($arrayOfLanCanConverterLanCanConverterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LanCanConverter property can only contain items of type \StructType\LanCanConverter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LanCanConverter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LanCanConverter[] $lanCanConverter
     * @return \ArrayType\ArrayOfLanCanConverter
     */
    public function setLanCanConverter(array $lanCanConverter = []): self
    {
        // validation for constraint: array
        if ('' !== ($lanCanConverterArrayErrorMessage = self::validateLanCanConverterForArrayConstraintsFromSetLanCanConverter($lanCanConverter))) {
            throw new InvalidArgumentException($lanCanConverterArrayErrorMessage, __LINE__);
        }
        if (is_null($lanCanConverter) || (is_array($lanCanConverter) && empty($lanCanConverter))) {
            unset($this->LanCanConverter);
        } else {
            $this->LanCanConverter = $lanCanConverter;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LanCanConverter|null
     */
    public function current(): ?\StructType\LanCanConverter
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LanCanConverter|null
     */
    public function item($index): ?\StructType\LanCanConverter
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LanCanConverter|null
     */
    public function first(): ?\StructType\LanCanConverter
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LanCanConverter|null
     */
    public function last(): ?\StructType\LanCanConverter
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LanCanConverter|null
     */
    public function offsetGet($offset): ?\StructType\LanCanConverter
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LanCanConverter $item
     * @return \ArrayType\ArrayOfLanCanConverter
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LanCanConverter) {
            throw new InvalidArgumentException(sprintf('The LanCanConverter property can only contain items of type \StructType\LanCanConverter, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LanCanConverter
     */
    public function getAttributeName(): string
    {
        return 'LanCanConverter';
    }
}
