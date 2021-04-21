<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLogMsgSubType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLogMsgSubType
 * @subpackage Arrays
 */
class ArrayOfLogMsgSubType extends AbstractStructArrayBase
{
    /**
     * The LogMsgSubType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $LogMsgSubType = [];
    /**
     * Constructor method for ArrayOfLogMsgSubType
     * @uses ArrayOfLogMsgSubType::setLogMsgSubType()
     * @param string[] $logMsgSubType
     */
    public function __construct(array $logMsgSubType = [])
    {
        $this
            ->setLogMsgSubType($logMsgSubType);
    }
    /**
     * Get LogMsgSubType value
     * @return string[]
     */
    public function getLogMsgSubType(): array
    {
        return $this->LogMsgSubType;
    }
    /**
     * This method is responsible for validating the values passed to the setLogMsgSubType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLogMsgSubType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLogMsgSubTypeForArrayConstraintsFromSetLogMsgSubType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLogMsgSubTypeLogMsgSubTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\LogMsgSubType::valueIsValid($arrayOfLogMsgSubTypeLogMsgSubTypeItem)) {
                $invalidValues[] = is_object($arrayOfLogMsgSubTypeLogMsgSubTypeItem) ? get_class($arrayOfLogMsgSubTypeLogMsgSubTypeItem) : sprintf('%s(%s)', gettype($arrayOfLogMsgSubTypeLogMsgSubTypeItem), var_export($arrayOfLogMsgSubTypeLogMsgSubTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMsgSubType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\LogMsgSubType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LogMsgSubType value
     * @uses \EnumType\LogMsgSubType::valueIsValid()
     * @uses \EnumType\LogMsgSubType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $logMsgSubType
     * @return \ArrayType\ArrayOfLogMsgSubType
     */
    public function setLogMsgSubType(array $logMsgSubType = []): self
    {
        // validation for constraint: array
        if ('' !== ($logMsgSubTypeArrayErrorMessage = self::validateLogMsgSubTypeForArrayConstraintsFromSetLogMsgSubType($logMsgSubType))) {
            throw new InvalidArgumentException($logMsgSubTypeArrayErrorMessage, __LINE__);
        }
        $this->LogMsgSubType = $logMsgSubType;
        
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
     * @return \ArrayType\ArrayOfLogMsgSubType
     */
    public function add($item): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogMsgSubType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMsgSubType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\LogMsgSubType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LogMsgSubType
     */
    public function getAttributeName(): string
    {
        return 'LogMsgSubType';
    }
}
