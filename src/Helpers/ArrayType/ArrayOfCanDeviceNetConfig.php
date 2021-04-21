<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCanDeviceNetConfig ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCanDeviceNetConfig
 * @subpackage Arrays
 */
class ArrayOfCanDeviceNetConfig extends AbstractStructArrayBase
{
    /**
     * The CanDeviceNetConfig
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CanDeviceNetConfig[]
     */
    protected array $CanDeviceNetConfig = [];
    /**
     * Constructor method for ArrayOfCanDeviceNetConfig
     * @uses ArrayOfCanDeviceNetConfig::setCanDeviceNetConfig()
     * @param \StructType\CanDeviceNetConfig[] $canDeviceNetConfig
     */
    public function __construct(array $canDeviceNetConfig = [])
    {
        $this
            ->setCanDeviceNetConfig($canDeviceNetConfig);
    }
    /**
     * Get CanDeviceNetConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CanDeviceNetConfig[]
     */
    public function getCanDeviceNetConfig(): ?array
    {
        return isset($this->CanDeviceNetConfig) ? $this->CanDeviceNetConfig : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCanDeviceNetConfig method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCanDeviceNetConfig method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCanDeviceNetConfigForArrayConstraintsFromSetCanDeviceNetConfig(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCanDeviceNetConfigCanDeviceNetConfigItem) {
            // validation for constraint: itemType
            if (!$arrayOfCanDeviceNetConfigCanDeviceNetConfigItem instanceof \StructType\CanDeviceNetConfig) {
                $invalidValues[] = is_object($arrayOfCanDeviceNetConfigCanDeviceNetConfigItem) ? get_class($arrayOfCanDeviceNetConfigCanDeviceNetConfigItem) : sprintf('%s(%s)', gettype($arrayOfCanDeviceNetConfigCanDeviceNetConfigItem), var_export($arrayOfCanDeviceNetConfigCanDeviceNetConfigItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CanDeviceNetConfig property can only contain items of type \StructType\CanDeviceNetConfig, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CanDeviceNetConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\CanDeviceNetConfig[] $canDeviceNetConfig
     * @return \ArrayType\ArrayOfCanDeviceNetConfig
     */
    public function setCanDeviceNetConfig(array $canDeviceNetConfig = []): self
    {
        // validation for constraint: array
        if ('' !== ($canDeviceNetConfigArrayErrorMessage = self::validateCanDeviceNetConfigForArrayConstraintsFromSetCanDeviceNetConfig($canDeviceNetConfig))) {
            throw new InvalidArgumentException($canDeviceNetConfigArrayErrorMessage, __LINE__);
        }
        if (is_null($canDeviceNetConfig) || (is_array($canDeviceNetConfig) && empty($canDeviceNetConfig))) {
            unset($this->CanDeviceNetConfig);
        } else {
            $this->CanDeviceNetConfig = $canDeviceNetConfig;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\CanDeviceNetConfig|null
     */
    public function current(): ?\StructType\CanDeviceNetConfig
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\CanDeviceNetConfig|null
     */
    public function item($index): ?\StructType\CanDeviceNetConfig
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\CanDeviceNetConfig|null
     */
    public function first(): ?\StructType\CanDeviceNetConfig
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\CanDeviceNetConfig|null
     */
    public function last(): ?\StructType\CanDeviceNetConfig
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\CanDeviceNetConfig|null
     */
    public function offsetGet($offset): ?\StructType\CanDeviceNetConfig
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\CanDeviceNetConfig $item
     * @return \ArrayType\ArrayOfCanDeviceNetConfig
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CanDeviceNetConfig) {
            throw new InvalidArgumentException(sprintf('The CanDeviceNetConfig property can only contain items of type \StructType\CanDeviceNetConfig, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CanDeviceNetConfig
     */
    public function getAttributeName(): string
    {
        return 'CanDeviceNetConfig';
    }
}
