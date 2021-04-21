<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfViolatorSaveInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfViolatorSaveInfo
 * @subpackage Arrays
 */
class ArrayOfViolatorSaveInfo extends AbstractStructArrayBase
{
    /**
     * The ViolatorSaveInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ViolatorSaveInfo[]
     */
    protected array $ViolatorSaveInfo = [];
    /**
     * Constructor method for ArrayOfViolatorSaveInfo
     * @uses ArrayOfViolatorSaveInfo::setViolatorSaveInfo()
     * @param \StructType\ViolatorSaveInfo[] $violatorSaveInfo
     */
    public function __construct(array $violatorSaveInfo = [])
    {
        $this
            ->setViolatorSaveInfo($violatorSaveInfo);
    }
    /**
     * Get ViolatorSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ViolatorSaveInfo[]
     */
    public function getViolatorSaveInfo(): ?array
    {
        return isset($this->ViolatorSaveInfo) ? $this->ViolatorSaveInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setViolatorSaveInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setViolatorSaveInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateViolatorSaveInfoForArrayConstraintsFromSetViolatorSaveInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfViolatorSaveInfoViolatorSaveInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfViolatorSaveInfoViolatorSaveInfoItem instanceof \StructType\ViolatorSaveInfo) {
                $invalidValues[] = is_object($arrayOfViolatorSaveInfoViolatorSaveInfoItem) ? get_class($arrayOfViolatorSaveInfoViolatorSaveInfoItem) : sprintf('%s(%s)', gettype($arrayOfViolatorSaveInfoViolatorSaveInfoItem), var_export($arrayOfViolatorSaveInfoViolatorSaveInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ViolatorSaveInfo property can only contain items of type \StructType\ViolatorSaveInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ViolatorSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ViolatorSaveInfo[] $violatorSaveInfo
     * @return \ArrayType\ArrayOfViolatorSaveInfo
     */
    public function setViolatorSaveInfo(array $violatorSaveInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($violatorSaveInfoArrayErrorMessage = self::validateViolatorSaveInfoForArrayConstraintsFromSetViolatorSaveInfo($violatorSaveInfo))) {
            throw new InvalidArgumentException($violatorSaveInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($violatorSaveInfo) || (is_array($violatorSaveInfo) && empty($violatorSaveInfo))) {
            unset($this->ViolatorSaveInfo);
        } else {
            $this->ViolatorSaveInfo = $violatorSaveInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ViolatorSaveInfo|null
     */
    public function current(): ?\StructType\ViolatorSaveInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ViolatorSaveInfo|null
     */
    public function item($index): ?\StructType\ViolatorSaveInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ViolatorSaveInfo|null
     */
    public function first(): ?\StructType\ViolatorSaveInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ViolatorSaveInfo|null
     */
    public function last(): ?\StructType\ViolatorSaveInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ViolatorSaveInfo|null
     */
    public function offsetGet($offset): ?\StructType\ViolatorSaveInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ViolatorSaveInfo $item
     * @return \ArrayType\ArrayOfViolatorSaveInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ViolatorSaveInfo) {
            throw new InvalidArgumentException(sprintf('The ViolatorSaveInfo property can only contain items of type \StructType\ViolatorSaveInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ViolatorSaveInfo
     */
    public function getAttributeName(): string
    {
        return 'ViolatorSaveInfo';
    }
}
