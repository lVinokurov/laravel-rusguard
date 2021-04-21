<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfViolatorFullInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfViolatorFullInfo
 * @subpackage Arrays
 */
class ArrayOfViolatorFullInfo extends AbstractStructArrayBase
{
    /**
     * The ViolatorFullInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ViolatorFullInfo[]
     */
    protected array $ViolatorFullInfo = [];
    /**
     * Constructor method for ArrayOfViolatorFullInfo
     * @uses ArrayOfViolatorFullInfo::setViolatorFullInfo()
     * @param \StructType\ViolatorFullInfo[] $violatorFullInfo
     */
    public function __construct(array $violatorFullInfo = [])
    {
        $this
            ->setViolatorFullInfo($violatorFullInfo);
    }
    /**
     * Get ViolatorFullInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ViolatorFullInfo[]
     */
    public function getViolatorFullInfo(): ?array
    {
        return isset($this->ViolatorFullInfo) ? $this->ViolatorFullInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setViolatorFullInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setViolatorFullInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateViolatorFullInfoForArrayConstraintsFromSetViolatorFullInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfViolatorFullInfoViolatorFullInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfViolatorFullInfoViolatorFullInfoItem instanceof \StructType\ViolatorFullInfo) {
                $invalidValues[] = is_object($arrayOfViolatorFullInfoViolatorFullInfoItem) ? get_class($arrayOfViolatorFullInfoViolatorFullInfoItem) : sprintf('%s(%s)', gettype($arrayOfViolatorFullInfoViolatorFullInfoItem), var_export($arrayOfViolatorFullInfoViolatorFullInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ViolatorFullInfo property can only contain items of type \StructType\ViolatorFullInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ViolatorFullInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ViolatorFullInfo[] $violatorFullInfo
     * @return \ArrayType\ArrayOfViolatorFullInfo
     */
    public function setViolatorFullInfo(array $violatorFullInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($violatorFullInfoArrayErrorMessage = self::validateViolatorFullInfoForArrayConstraintsFromSetViolatorFullInfo($violatorFullInfo))) {
            throw new InvalidArgumentException($violatorFullInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($violatorFullInfo) || (is_array($violatorFullInfo) && empty($violatorFullInfo))) {
            unset($this->ViolatorFullInfo);
        } else {
            $this->ViolatorFullInfo = $violatorFullInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ViolatorFullInfo|null
     */
    public function current(): ?\StructType\ViolatorFullInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ViolatorFullInfo|null
     */
    public function item($index): ?\StructType\ViolatorFullInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ViolatorFullInfo|null
     */
    public function first(): ?\StructType\ViolatorFullInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ViolatorFullInfo|null
     */
    public function last(): ?\StructType\ViolatorFullInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ViolatorFullInfo|null
     */
    public function offsetGet($offset): ?\StructType\ViolatorFullInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ViolatorFullInfo $item
     * @return \ArrayType\ArrayOfViolatorFullInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ViolatorFullInfo) {
            throw new InvalidArgumentException(sprintf('The ViolatorFullInfo property can only contain items of type \StructType\ViolatorFullInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ViolatorFullInfo
     */
    public function getAttributeName(): string
    {
        return 'ViolatorFullInfo';
    }
}
