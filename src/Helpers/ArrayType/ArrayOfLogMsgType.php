<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLogMsgType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLogMsgType
 * @subpackage Arrays
 */
class ArrayOfLogMsgType extends AbstractStructArrayBase
{
    /**
     * The LogMsgType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $LogMsgType = [];
    /**
     * Constructor method for ArrayOfLogMsgType
     * @uses ArrayOfLogMsgType::setLogMsgType()
     * @param string[] $logMsgType
     */
    public function __construct(array $logMsgType = [])
    {
        $this
            ->setLogMsgType($logMsgType);
    }
    /**
     * Get LogMsgType value
     * @return string[]
     */
    public function getLogMsgType(): array
    {
        return $this->LogMsgType;
    }
    /**
     * This method is responsible for validating the values passed to the setLogMsgType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLogMsgType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLogMsgTypeForArrayConstraintsFromSetLogMsgType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLogMsgTypeLogMsgTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\LogMsgType::valueIsValid($arrayOfLogMsgTypeLogMsgTypeItem)) {
                $invalidValues[] = is_object($arrayOfLogMsgTypeLogMsgTypeItem) ? get_class($arrayOfLogMsgTypeLogMsgTypeItem) : sprintf('%s(%s)', gettype($arrayOfLogMsgTypeLogMsgTypeItem), var_export($arrayOfLogMsgTypeLogMsgTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMsgType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\LogMsgType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LogMsgType value
     * @uses \EnumType\LogMsgType::valueIsValid()
     * @uses \EnumType\LogMsgType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $logMsgType
     * @return \ArrayType\ArrayOfLogMsgType
     */
    public function setLogMsgType(array $logMsgType = []): self
    {
        // validation for constraint: array
        if ('' !== ($logMsgTypeArrayErrorMessage = self::validateLogMsgTypeForArrayConstraintsFromSetLogMsgType($logMsgType))) {
            throw new InvalidArgumentException($logMsgTypeArrayErrorMessage, __LINE__);
        }
        $this->LogMsgType = $logMsgType;
        
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
     * @return \ArrayType\ArrayOfLogMsgType
     */
    public function add($item): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogMsgType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMsgType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\LogMsgType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LogMsgType
     */
    public function getAttributeName(): string
    {
        return 'LogMsgType';
    }
}
