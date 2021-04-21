<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCardTypeInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCardTypeInfo
 * @subpackage Arrays
 */
class ArrayOfCardTypeInfo extends AbstractStructArrayBase
{
    /**
     * The CardTypeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CardTypeInfo[]
     */
    protected array $CardTypeInfo = [];
    /**
     * Constructor method for ArrayOfCardTypeInfo
     * @uses ArrayOfCardTypeInfo::setCardTypeInfo()
     * @param \StructType\CardTypeInfo[] $cardTypeInfo
     */
    public function __construct(array $cardTypeInfo = [])
    {
        $this
            ->setCardTypeInfo($cardTypeInfo);
    }
    /**
     * Get CardTypeInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CardTypeInfo[]
     */
    public function getCardTypeInfo(): ?array
    {
        return isset($this->CardTypeInfo) ? $this->CardTypeInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCardTypeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCardTypeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCardTypeInfoForArrayConstraintsFromSetCardTypeInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCardTypeInfoCardTypeInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfCardTypeInfoCardTypeInfoItem instanceof \StructType\CardTypeInfo) {
                $invalidValues[] = is_object($arrayOfCardTypeInfoCardTypeInfoItem) ? get_class($arrayOfCardTypeInfoCardTypeInfoItem) : sprintf('%s(%s)', gettype($arrayOfCardTypeInfoCardTypeInfoItem), var_export($arrayOfCardTypeInfoCardTypeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CardTypeInfo property can only contain items of type \StructType\CardTypeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CardTypeInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\CardTypeInfo[] $cardTypeInfo
     * @return \ArrayType\ArrayOfCardTypeInfo
     */
    public function setCardTypeInfo(array $cardTypeInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($cardTypeInfoArrayErrorMessage = self::validateCardTypeInfoForArrayConstraintsFromSetCardTypeInfo($cardTypeInfo))) {
            throw new InvalidArgumentException($cardTypeInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($cardTypeInfo) || (is_array($cardTypeInfo) && empty($cardTypeInfo))) {
            unset($this->CardTypeInfo);
        } else {
            $this->CardTypeInfo = $cardTypeInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\CardTypeInfo|null
     */
    public function current(): ?\StructType\CardTypeInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\CardTypeInfo|null
     */
    public function item($index): ?\StructType\CardTypeInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\CardTypeInfo|null
     */
    public function first(): ?\StructType\CardTypeInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\CardTypeInfo|null
     */
    public function last(): ?\StructType\CardTypeInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\CardTypeInfo|null
     */
    public function offsetGet($offset): ?\StructType\CardTypeInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\CardTypeInfo $item
     * @return \ArrayType\ArrayOfCardTypeInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CardTypeInfo) {
            throw new InvalidArgumentException(sprintf('The CardTypeInfo property can only contain items of type \StructType\CardTypeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CardTypeInfo
     */
    public function getAttributeName(): string
    {
        return 'CardTypeInfo';
    }
}
