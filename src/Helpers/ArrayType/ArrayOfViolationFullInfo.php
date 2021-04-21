<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfViolationFullInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfViolationFullInfo
 * @subpackage Arrays
 */
class ArrayOfViolationFullInfo extends AbstractStructArrayBase
{
    /**
     * The ViolationFullInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ViolationFullInfo[]
     */
    protected array $ViolationFullInfo = [];
    /**
     * Constructor method for ArrayOfViolationFullInfo
     * @uses ArrayOfViolationFullInfo::setViolationFullInfo()
     * @param \StructType\ViolationFullInfo[] $violationFullInfo
     */
    public function __construct(array $violationFullInfo = [])
    {
        $this
            ->setViolationFullInfo($violationFullInfo);
    }
    /**
     * Get ViolationFullInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ViolationFullInfo[]
     */
    public function getViolationFullInfo(): ?array
    {
        return isset($this->ViolationFullInfo) ? $this->ViolationFullInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setViolationFullInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setViolationFullInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateViolationFullInfoForArrayConstraintsFromSetViolationFullInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfViolationFullInfoViolationFullInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfViolationFullInfoViolationFullInfoItem instanceof \StructType\ViolationFullInfo) {
                $invalidValues[] = is_object($arrayOfViolationFullInfoViolationFullInfoItem) ? get_class($arrayOfViolationFullInfoViolationFullInfoItem) : sprintf('%s(%s)', gettype($arrayOfViolationFullInfoViolationFullInfoItem), var_export($arrayOfViolationFullInfoViolationFullInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ViolationFullInfo property can only contain items of type \StructType\ViolationFullInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ViolationFullInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ViolationFullInfo[] $violationFullInfo
     * @return \ArrayType\ArrayOfViolationFullInfo
     */
    public function setViolationFullInfo(array $violationFullInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($violationFullInfoArrayErrorMessage = self::validateViolationFullInfoForArrayConstraintsFromSetViolationFullInfo($violationFullInfo))) {
            throw new InvalidArgumentException($violationFullInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($violationFullInfo) || (is_array($violationFullInfo) && empty($violationFullInfo))) {
            unset($this->ViolationFullInfo);
        } else {
            $this->ViolationFullInfo = $violationFullInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ViolationFullInfo|null
     */
    public function current(): ?\StructType\ViolationFullInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ViolationFullInfo|null
     */
    public function item($index): ?\StructType\ViolationFullInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ViolationFullInfo|null
     */
    public function first(): ?\StructType\ViolationFullInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ViolationFullInfo|null
     */
    public function last(): ?\StructType\ViolationFullInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ViolationFullInfo|null
     */
    public function offsetGet($offset): ?\StructType\ViolationFullInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ViolationFullInfo $item
     * @return \ArrayType\ArrayOfViolationFullInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ViolationFullInfo) {
            throw new InvalidArgumentException(sprintf('The ViolationFullInfo property can only contain items of type \StructType\ViolationFullInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ViolationFullInfo
     */
    public function getAttributeName(): string
    {
        return 'ViolationFullInfo';
    }
}
