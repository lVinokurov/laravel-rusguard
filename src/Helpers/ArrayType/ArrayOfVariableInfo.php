<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVariableInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVariableInfo
 * @subpackage Arrays
 */
class ArrayOfVariableInfo extends AbstractStructArrayBase
{
    /**
     * The VariableInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\VariableInfo[]
     */
    protected array $VariableInfo = [];
    /**
     * Constructor method for ArrayOfVariableInfo
     * @uses ArrayOfVariableInfo::setVariableInfo()
     * @param \StructType\VariableInfo[] $variableInfo
     */
    public function __construct(array $variableInfo = [])
    {
        $this
            ->setVariableInfo($variableInfo);
    }
    /**
     * Get VariableInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\VariableInfo[]
     */
    public function getVariableInfo(): ?array
    {
        return isset($this->VariableInfo) ? $this->VariableInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setVariableInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariableInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariableInfoForArrayConstraintsFromSetVariableInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfVariableInfoVariableInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfVariableInfoVariableInfoItem instanceof \StructType\VariableInfo) {
                $invalidValues[] = is_object($arrayOfVariableInfoVariableInfoItem) ? get_class($arrayOfVariableInfoVariableInfoItem) : sprintf('%s(%s)', gettype($arrayOfVariableInfoVariableInfoItem), var_export($arrayOfVariableInfoVariableInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VariableInfo property can only contain items of type \StructType\VariableInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VariableInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\VariableInfo[] $variableInfo
     * @return \ArrayType\ArrayOfVariableInfo
     */
    public function setVariableInfo(array $variableInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($variableInfoArrayErrorMessage = self::validateVariableInfoForArrayConstraintsFromSetVariableInfo($variableInfo))) {
            throw new InvalidArgumentException($variableInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($variableInfo) || (is_array($variableInfo) && empty($variableInfo))) {
            unset($this->VariableInfo);
        } else {
            $this->VariableInfo = $variableInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\VariableInfo|null
     */
    public function current(): ?\StructType\VariableInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\VariableInfo|null
     */
    public function item($index): ?\StructType\VariableInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\VariableInfo|null
     */
    public function first(): ?\StructType\VariableInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\VariableInfo|null
     */
    public function last(): ?\StructType\VariableInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\VariableInfo|null
     */
    public function offsetGet($offset): ?\StructType\VariableInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\VariableInfo $item
     * @return \ArrayType\ArrayOfVariableInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VariableInfo) {
            throw new InvalidArgumentException(sprintf('The VariableInfo property can only contain items of type \StructType\VariableInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VariableInfo
     */
    public function getAttributeName(): string
    {
        return 'VariableInfo';
    }
}
