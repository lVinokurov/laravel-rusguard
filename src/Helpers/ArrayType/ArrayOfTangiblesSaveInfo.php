<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTangiblesSaveInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTangiblesSaveInfo
 * @subpackage Arrays
 */
class ArrayOfTangiblesSaveInfo extends AbstractStructArrayBase
{
    /**
     * The TangiblesSaveInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TangiblesSaveInfo[]
     */
    protected array $TangiblesSaveInfo = [];
    /**
     * Constructor method for ArrayOfTangiblesSaveInfo
     * @uses ArrayOfTangiblesSaveInfo::setTangiblesSaveInfo()
     * @param \StructType\TangiblesSaveInfo[] $tangiblesSaveInfo
     */
    public function __construct(array $tangiblesSaveInfo = [])
    {
        $this
            ->setTangiblesSaveInfo($tangiblesSaveInfo);
    }
    /**
     * Get TangiblesSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TangiblesSaveInfo[]
     */
    public function getTangiblesSaveInfo(): ?array
    {
        return isset($this->TangiblesSaveInfo) ? $this->TangiblesSaveInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTangiblesSaveInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTangiblesSaveInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTangiblesSaveInfoForArrayConstraintsFromSetTangiblesSaveInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTangiblesSaveInfoTangiblesSaveInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTangiblesSaveInfoTangiblesSaveInfoItem instanceof \StructType\TangiblesSaveInfo) {
                $invalidValues[] = is_object($arrayOfTangiblesSaveInfoTangiblesSaveInfoItem) ? get_class($arrayOfTangiblesSaveInfoTangiblesSaveInfoItem) : sprintf('%s(%s)', gettype($arrayOfTangiblesSaveInfoTangiblesSaveInfoItem), var_export($arrayOfTangiblesSaveInfoTangiblesSaveInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TangiblesSaveInfo property can only contain items of type \StructType\TangiblesSaveInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TangiblesSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\TangiblesSaveInfo[] $tangiblesSaveInfo
     * @return \ArrayType\ArrayOfTangiblesSaveInfo
     */
    public function setTangiblesSaveInfo(array $tangiblesSaveInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($tangiblesSaveInfoArrayErrorMessage = self::validateTangiblesSaveInfoForArrayConstraintsFromSetTangiblesSaveInfo($tangiblesSaveInfo))) {
            throw new InvalidArgumentException($tangiblesSaveInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($tangiblesSaveInfo) || (is_array($tangiblesSaveInfo) && empty($tangiblesSaveInfo))) {
            unset($this->TangiblesSaveInfo);
        } else {
            $this->TangiblesSaveInfo = $tangiblesSaveInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TangiblesSaveInfo|null
     */
    public function current(): ?\StructType\TangiblesSaveInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TangiblesSaveInfo|null
     */
    public function item($index): ?\StructType\TangiblesSaveInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TangiblesSaveInfo|null
     */
    public function first(): ?\StructType\TangiblesSaveInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TangiblesSaveInfo|null
     */
    public function last(): ?\StructType\TangiblesSaveInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TangiblesSaveInfo|null
     */
    public function offsetGet($offset): ?\StructType\TangiblesSaveInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\TangiblesSaveInfo $item
     * @return \ArrayType\ArrayOfTangiblesSaveInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TangiblesSaveInfo) {
            throw new InvalidArgumentException(sprintf('The TangiblesSaveInfo property can only contain items of type \StructType\TangiblesSaveInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TangiblesSaveInfo
     */
    public function getAttributeName(): string
    {
        return 'TangiblesSaveInfo';
    }
}
