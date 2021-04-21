<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLogMessage ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLogMessage
 * @subpackage Arrays
 */
class ArrayOfLogMessage extends AbstractStructArrayBase
{
    /**
     * The LogMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LogMessage[]
     */
    protected array $LogMessage = [];
    /**
     * Constructor method for ArrayOfLogMessage
     * @uses ArrayOfLogMessage::setLogMessage()
     * @param \StructType\LogMessage[] $logMessage
     */
    public function __construct(array $logMessage = [])
    {
        $this
            ->setLogMessage($logMessage);
    }
    /**
     * Get LogMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LogMessage[]
     */
    public function getLogMessage(): ?array
    {
        return isset($this->LogMessage) ? $this->LogMessage : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLogMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLogMessage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLogMessageForArrayConstraintsFromSetLogMessage(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLogMessageLogMessageItem) {
            // validation for constraint: itemType
            if (!$arrayOfLogMessageLogMessageItem instanceof \StructType\LogMessage) {
                $invalidValues[] = is_object($arrayOfLogMessageLogMessageItem) ? get_class($arrayOfLogMessageLogMessageItem) : sprintf('%s(%s)', gettype($arrayOfLogMessageLogMessageItem), var_export($arrayOfLogMessageLogMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LogMessage property can only contain items of type \StructType\LogMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LogMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LogMessage[] $logMessage
     * @return \ArrayType\ArrayOfLogMessage
     */
    public function setLogMessage(array $logMessage = []): self
    {
        // validation for constraint: array
        if ('' !== ($logMessageArrayErrorMessage = self::validateLogMessageForArrayConstraintsFromSetLogMessage($logMessage))) {
            throw new InvalidArgumentException($logMessageArrayErrorMessage, __LINE__);
        }
        if (is_null($logMessage) || (is_array($logMessage) && empty($logMessage))) {
            unset($this->LogMessage);
        } else {
            $this->LogMessage = $logMessage;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LogMessage|null
     */
    public function current(): ?\StructType\LogMessage
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LogMessage|null
     */
    public function item($index): ?\StructType\LogMessage
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LogMessage|null
     */
    public function first(): ?\StructType\LogMessage
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LogMessage|null
     */
    public function last(): ?\StructType\LogMessage
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LogMessage|null
     */
    public function offsetGet($offset): ?\StructType\LogMessage
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LogMessage $item
     * @return \ArrayType\ArrayOfLogMessage
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LogMessage) {
            throw new InvalidArgumentException(sprintf('The LogMessage property can only contain items of type \StructType\LogMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LogMessage
     */
    public function getAttributeName(): string
    {
        return 'LogMessage';
    }
}
