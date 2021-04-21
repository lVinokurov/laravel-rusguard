<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTangiblesFullInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTangiblesFullInfo
 * @subpackage Arrays
 */
class ArrayOfTangiblesFullInfo extends AbstractStructArrayBase
{
    /**
     * The TangiblesFullInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TangiblesFullInfo[]
     */
    protected array $TangiblesFullInfo = [];
    /**
     * Constructor method for ArrayOfTangiblesFullInfo
     * @uses ArrayOfTangiblesFullInfo::setTangiblesFullInfo()
     * @param \StructType\TangiblesFullInfo[] $tangiblesFullInfo
     */
    public function __construct(array $tangiblesFullInfo = [])
    {
        $this
            ->setTangiblesFullInfo($tangiblesFullInfo);
    }
    /**
     * Get TangiblesFullInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TangiblesFullInfo[]
     */
    public function getTangiblesFullInfo(): ?array
    {
        return isset($this->TangiblesFullInfo) ? $this->TangiblesFullInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTangiblesFullInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTangiblesFullInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTangiblesFullInfoForArrayConstraintsFromSetTangiblesFullInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTangiblesFullInfoTangiblesFullInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTangiblesFullInfoTangiblesFullInfoItem instanceof \StructType\TangiblesFullInfo) {
                $invalidValues[] = is_object($arrayOfTangiblesFullInfoTangiblesFullInfoItem) ? get_class($arrayOfTangiblesFullInfoTangiblesFullInfoItem) : sprintf('%s(%s)', gettype($arrayOfTangiblesFullInfoTangiblesFullInfoItem), var_export($arrayOfTangiblesFullInfoTangiblesFullInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TangiblesFullInfo property can only contain items of type \StructType\TangiblesFullInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TangiblesFullInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\TangiblesFullInfo[] $tangiblesFullInfo
     * @return \ArrayType\ArrayOfTangiblesFullInfo
     */
    public function setTangiblesFullInfo(array $tangiblesFullInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($tangiblesFullInfoArrayErrorMessage = self::validateTangiblesFullInfoForArrayConstraintsFromSetTangiblesFullInfo($tangiblesFullInfo))) {
            throw new InvalidArgumentException($tangiblesFullInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($tangiblesFullInfo) || (is_array($tangiblesFullInfo) && empty($tangiblesFullInfo))) {
            unset($this->TangiblesFullInfo);
        } else {
            $this->TangiblesFullInfo = $tangiblesFullInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TangiblesFullInfo|null
     */
    public function current(): ?\StructType\TangiblesFullInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TangiblesFullInfo|null
     */
    public function item($index): ?\StructType\TangiblesFullInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TangiblesFullInfo|null
     */
    public function first(): ?\StructType\TangiblesFullInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TangiblesFullInfo|null
     */
    public function last(): ?\StructType\TangiblesFullInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TangiblesFullInfo|null
     */
    public function offsetGet($offset): ?\StructType\TangiblesFullInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\TangiblesFullInfo $item
     * @return \ArrayType\ArrayOfTangiblesFullInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TangiblesFullInfo) {
            throw new InvalidArgumentException(sprintf('The TangiblesFullInfo property can only contain items of type \StructType\TangiblesFullInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TangiblesFullInfo
     */
    public function getAttributeName(): string
    {
        return 'TangiblesFullInfo';
    }
}
