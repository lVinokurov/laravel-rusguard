<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfViolationSaveInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfViolationSaveInfo
 * @subpackage Arrays
 */
class ArrayOfViolationSaveInfo extends AbstractStructArrayBase
{
    /**
     * The ViolationSaveInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ViolationSaveInfo[]
     */
    protected array $ViolationSaveInfo = [];
    /**
     * Constructor method for ArrayOfViolationSaveInfo
     * @uses ArrayOfViolationSaveInfo::setViolationSaveInfo()
     * @param \StructType\ViolationSaveInfo[] $violationSaveInfo
     */
    public function __construct(array $violationSaveInfo = [])
    {
        $this
            ->setViolationSaveInfo($violationSaveInfo);
    }
    /**
     * Get ViolationSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ViolationSaveInfo[]
     */
    public function getViolationSaveInfo(): ?array
    {
        return isset($this->ViolationSaveInfo) ? $this->ViolationSaveInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setViolationSaveInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setViolationSaveInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateViolationSaveInfoForArrayConstraintsFromSetViolationSaveInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfViolationSaveInfoViolationSaveInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfViolationSaveInfoViolationSaveInfoItem instanceof \StructType\ViolationSaveInfo) {
                $invalidValues[] = is_object($arrayOfViolationSaveInfoViolationSaveInfoItem) ? get_class($arrayOfViolationSaveInfoViolationSaveInfoItem) : sprintf('%s(%s)', gettype($arrayOfViolationSaveInfoViolationSaveInfoItem), var_export($arrayOfViolationSaveInfoViolationSaveInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ViolationSaveInfo property can only contain items of type \StructType\ViolationSaveInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ViolationSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ViolationSaveInfo[] $violationSaveInfo
     * @return \ArrayType\ArrayOfViolationSaveInfo
     */
    public function setViolationSaveInfo(array $violationSaveInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($violationSaveInfoArrayErrorMessage = self::validateViolationSaveInfoForArrayConstraintsFromSetViolationSaveInfo($violationSaveInfo))) {
            throw new InvalidArgumentException($violationSaveInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($violationSaveInfo) || (is_array($violationSaveInfo) && empty($violationSaveInfo))) {
            unset($this->ViolationSaveInfo);
        } else {
            $this->ViolationSaveInfo = $violationSaveInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ViolationSaveInfo|null
     */
    public function current(): ?\StructType\ViolationSaveInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ViolationSaveInfo|null
     */
    public function item($index): ?\StructType\ViolationSaveInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ViolationSaveInfo|null
     */
    public function first(): ?\StructType\ViolationSaveInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ViolationSaveInfo|null
     */
    public function last(): ?\StructType\ViolationSaveInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ViolationSaveInfo|null
     */
    public function offsetGet($offset): ?\StructType\ViolationSaveInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ViolationSaveInfo $item
     * @return \ArrayType\ArrayOfViolationSaveInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ViolationSaveInfo) {
            throw new InvalidArgumentException(sprintf('The ViolationSaveInfo property can only contain items of type \StructType\ViolationSaveInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ViolationSaveInfo
     */
    public function getAttributeName(): string
    {
        return 'ViolationSaveInfo';
    }
}
