<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfguid ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfguid
 * @subpackage Arrays
 */
class ArrayOfguid extends AbstractStructArrayBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string[]
     */
    protected array $guid = [];
    /**
     * Constructor method for ArrayOfguid
     * @uses ArrayOfguid::setGuid()
     * @param string[] $guid
     */
    public function __construct(array $guid = [])
    {
        $this
            ->setGuid($guid);
    }
    /**
     * Get guid value
     * @return string[]
     */
    public function getGuid(): array
    {
        return $this->guid;
    }
    /**
     * This method is responsible for validating the values passed to the setGuid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuid method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGuidForArrayConstraintsFromSetGuid(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfguidGuidItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfguidGuidItem)) {
                $invalidValues[] = is_object($arrayOfguidGuidItem) ? get_class($arrayOfguidGuidItem) : sprintf('%s(%s)', gettype($arrayOfguidGuidItem), var_export($arrayOfguidGuidItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The guid property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set guid value
     * @throws InvalidArgumentException
     * @param string[] $guid
     * @return \ArrayType\ArrayOfguid
     */
    public function setGuid(array $guid = []): self
    {
        // validation for constraint: array
        if ('' !== ($guidArrayErrorMessage = self::validateGuidForArrayConstraintsFromSetGuid($guid))) {
            throw new InvalidArgumentException($guidArrayErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($guid) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($guid, true)), __LINE__);
        }
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ArrayType\ArrayOfguid
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The guid property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string guid
     */
    public function getAttributeName(): string
    {
        return 'guid';
    }
}
