<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLogMessageTypeSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLogMessageTypeSlimInfo
 * @subpackage Arrays
 */
class ArrayOfLogMessageTypeSlimInfo extends AbstractStructArrayBase
{
    /**
     * The LogMessageTypeSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LogMessageTypeSlimInfo[]
     */
    protected array $LogMessageTypeSlimInfo = [];
    /**
     * Constructor method for ArrayOfLogMessageTypeSlimInfo
     * @uses ArrayOfLogMessageTypeSlimInfo::setLogMessageTypeSlimInfo()
     * @param \StructType\LogMessageTypeSlimInfo[] $logMessageTypeSlimInfo
     */
    public function __construct(array $logMessageTypeSlimInfo = [])
    {
        $this
            ->setLogMessageTypeSlimInfo($logMessageTypeSlimInfo);
    }
    /**
     * Get LogMessageTypeSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LogMessageTypeSlimInfo[]
     */
    public function getLogMessageTypeSlimInfo(): ?array
    {
        return isset($this->LogMessageTypeSlimInfo) ? $this->LogMessageTypeSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLogMessageTypeSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLogMessageTypeSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLogMessageTypeSlimInfoForArrayConstraintsFromSetLogMessageTypeSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLogMessageTypeSlimInfoLogMessageTypeSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfLogMessageTypeSlimInfoLogMessageTypeSlimInfoItem instanceof \StructType\LogMessageTypeSlimInfo) {
                $invalidValues[] = is_object($arrayOfLogMessageTypeSlimInfoLogMessageTypeSlimInfoItem) ? get_class($arrayOfLogMessageTypeSlimInfoLogMessageTypeSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfLogMessageTypeSlimInfoLogMessageTypeSlimInfoItem), var_export($arrayOfLogMessageTypeSlimInfoLogMessageTypeSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LogMessageTypeSlimInfo property can only contain items of type \StructType\LogMessageTypeSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LogMessageTypeSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LogMessageTypeSlimInfo[] $logMessageTypeSlimInfo
     * @return \ArrayType\ArrayOfLogMessageTypeSlimInfo
     */
    public function setLogMessageTypeSlimInfo(array $logMessageTypeSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($logMessageTypeSlimInfoArrayErrorMessage = self::validateLogMessageTypeSlimInfoForArrayConstraintsFromSetLogMessageTypeSlimInfo($logMessageTypeSlimInfo))) {
            throw new InvalidArgumentException($logMessageTypeSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($logMessageTypeSlimInfo) || (is_array($logMessageTypeSlimInfo) && empty($logMessageTypeSlimInfo))) {
            unset($this->LogMessageTypeSlimInfo);
        } else {
            $this->LogMessageTypeSlimInfo = $logMessageTypeSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LogMessageTypeSlimInfo|null
     */
    public function current(): ?\StructType\LogMessageTypeSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LogMessageTypeSlimInfo|null
     */
    public function item($index): ?\StructType\LogMessageTypeSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LogMessageTypeSlimInfo|null
     */
    public function first(): ?\StructType\LogMessageTypeSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LogMessageTypeSlimInfo|null
     */
    public function last(): ?\StructType\LogMessageTypeSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LogMessageTypeSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\LogMessageTypeSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LogMessageTypeSlimInfo $item
     * @return \ArrayType\ArrayOfLogMessageTypeSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LogMessageTypeSlimInfo) {
            throw new InvalidArgumentException(sprintf('The LogMessageTypeSlimInfo property can only contain items of type \StructType\LogMessageTypeSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LogMessageTypeSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'LogMessageTypeSlimInfo';
    }
}
