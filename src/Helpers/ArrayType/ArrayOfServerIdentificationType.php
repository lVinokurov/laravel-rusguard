<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServerIdentificationType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfServerIdentificationType
 * @subpackage Arrays
 */
class ArrayOfServerIdentificationType extends AbstractStructArrayBase
{
    /**
     * The ServerIdentificationType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $ServerIdentificationType = [];
    /**
     * Constructor method for ArrayOfServerIdentificationType
     * @uses ArrayOfServerIdentificationType::setServerIdentificationType()
     * @param string[] $serverIdentificationType
     */
    public function __construct(array $serverIdentificationType = [])
    {
        $this
            ->setServerIdentificationType($serverIdentificationType);
    }
    /**
     * Get ServerIdentificationType value
     * @return string[]
     */
    public function getServerIdentificationType(): array
    {
        return $this->ServerIdentificationType;
    }
    /**
     * This method is responsible for validating the values passed to the setServerIdentificationType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServerIdentificationType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServerIdentificationTypeForArrayConstraintsFromSetServerIdentificationType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfServerIdentificationTypeServerIdentificationTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\ServerIdentificationType::valueIsValid($arrayOfServerIdentificationTypeServerIdentificationTypeItem)) {
                $invalidValues[] = is_object($arrayOfServerIdentificationTypeServerIdentificationTypeItem) ? get_class($arrayOfServerIdentificationTypeServerIdentificationTypeItem) : sprintf('%s(%s)', gettype($arrayOfServerIdentificationTypeServerIdentificationTypeItem), var_export($arrayOfServerIdentificationTypeServerIdentificationTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ServerIdentificationType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\ServerIdentificationType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ServerIdentificationType value
     * @uses \EnumType\ServerIdentificationType::valueIsValid()
     * @uses \EnumType\ServerIdentificationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $serverIdentificationType
     * @return \ArrayType\ArrayOfServerIdentificationType
     */
    public function setServerIdentificationType(array $serverIdentificationType = []): self
    {
        // validation for constraint: array
        if ('' !== ($serverIdentificationTypeArrayErrorMessage = self::validateServerIdentificationTypeForArrayConstraintsFromSetServerIdentificationType($serverIdentificationType))) {
            throw new InvalidArgumentException($serverIdentificationTypeArrayErrorMessage, __LINE__);
        }
        $this->ServerIdentificationType = $serverIdentificationType;
        
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
     * @return \ArrayType\ArrayOfServerIdentificationType
     */
    public function add($item): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ServerIdentificationType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ServerIdentificationType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\ServerIdentificationType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServerIdentificationType
     */
    public function getAttributeName(): string
    {
        return 'ServerIdentificationType';
    }
}
