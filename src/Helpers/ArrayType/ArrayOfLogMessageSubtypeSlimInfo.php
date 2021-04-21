<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLogMessageSubtypeSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLogMessageSubtypeSlimInfo
 * @subpackage Arrays
 */
class ArrayOfLogMessageSubtypeSlimInfo extends AbstractStructArrayBase
{
    /**
     * The LogMessageSubtypeSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LogMessageSubtypeSlimInfo[]
     */
    protected array $LogMessageSubtypeSlimInfo = [];
    /**
     * Constructor method for ArrayOfLogMessageSubtypeSlimInfo
     * @uses ArrayOfLogMessageSubtypeSlimInfo::setLogMessageSubtypeSlimInfo()
     * @param \StructType\LogMessageSubtypeSlimInfo[] $logMessageSubtypeSlimInfo
     */
    public function __construct(array $logMessageSubtypeSlimInfo = [])
    {
        $this
            ->setLogMessageSubtypeSlimInfo($logMessageSubtypeSlimInfo);
    }
    /**
     * Get LogMessageSubtypeSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LogMessageSubtypeSlimInfo[]
     */
    public function getLogMessageSubtypeSlimInfo(): ?array
    {
        return isset($this->LogMessageSubtypeSlimInfo) ? $this->LogMessageSubtypeSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLogMessageSubtypeSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLogMessageSubtypeSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLogMessageSubtypeSlimInfoForArrayConstraintsFromSetLogMessageSubtypeSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLogMessageSubtypeSlimInfoLogMessageSubtypeSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfLogMessageSubtypeSlimInfoLogMessageSubtypeSlimInfoItem instanceof \StructType\LogMessageSubtypeSlimInfo) {
                $invalidValues[] = is_object($arrayOfLogMessageSubtypeSlimInfoLogMessageSubtypeSlimInfoItem) ? get_class($arrayOfLogMessageSubtypeSlimInfoLogMessageSubtypeSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfLogMessageSubtypeSlimInfoLogMessageSubtypeSlimInfoItem), var_export($arrayOfLogMessageSubtypeSlimInfoLogMessageSubtypeSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LogMessageSubtypeSlimInfo property can only contain items of type \StructType\LogMessageSubtypeSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LogMessageSubtypeSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LogMessageSubtypeSlimInfo[] $logMessageSubtypeSlimInfo
     * @return \ArrayType\ArrayOfLogMessageSubtypeSlimInfo
     */
    public function setLogMessageSubtypeSlimInfo(array $logMessageSubtypeSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($logMessageSubtypeSlimInfoArrayErrorMessage = self::validateLogMessageSubtypeSlimInfoForArrayConstraintsFromSetLogMessageSubtypeSlimInfo($logMessageSubtypeSlimInfo))) {
            throw new InvalidArgumentException($logMessageSubtypeSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($logMessageSubtypeSlimInfo) || (is_array($logMessageSubtypeSlimInfo) && empty($logMessageSubtypeSlimInfo))) {
            unset($this->LogMessageSubtypeSlimInfo);
        } else {
            $this->LogMessageSubtypeSlimInfo = $logMessageSubtypeSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LogMessageSubtypeSlimInfo|null
     */
    public function current(): ?\StructType\LogMessageSubtypeSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LogMessageSubtypeSlimInfo|null
     */
    public function item($index): ?\StructType\LogMessageSubtypeSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LogMessageSubtypeSlimInfo|null
     */
    public function first(): ?\StructType\LogMessageSubtypeSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LogMessageSubtypeSlimInfo|null
     */
    public function last(): ?\StructType\LogMessageSubtypeSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LogMessageSubtypeSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\LogMessageSubtypeSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LogMessageSubtypeSlimInfo $item
     * @return \ArrayType\ArrayOfLogMessageSubtypeSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LogMessageSubtypeSlimInfo) {
            throw new InvalidArgumentException(sprintf('The LogMessageSubtypeSlimInfo property can only contain items of type \StructType\LogMessageSubtypeSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LogMessageSubtypeSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'LogMessageSubtypeSlimInfo';
    }
}
