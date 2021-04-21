<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeePositionSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeePositionSlimInfo
 * @subpackage Arrays
 */
class ArrayOfEmployeePositionSlimInfo extends AbstractStructArrayBase
{
    /**
     * The EmployeePositionSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeePositionSlimInfo[]
     */
    protected array $EmployeePositionSlimInfo = [];
    /**
     * Constructor method for ArrayOfEmployeePositionSlimInfo
     * @uses ArrayOfEmployeePositionSlimInfo::setEmployeePositionSlimInfo()
     * @param \StructType\EmployeePositionSlimInfo[] $employeePositionSlimInfo
     */
    public function __construct(array $employeePositionSlimInfo = [])
    {
        $this
            ->setEmployeePositionSlimInfo($employeePositionSlimInfo);
    }
    /**
     * Get EmployeePositionSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeePositionSlimInfo[]
     */
    public function getEmployeePositionSlimInfo(): ?array
    {
        return isset($this->EmployeePositionSlimInfo) ? $this->EmployeePositionSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployeePositionSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeePositionSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeePositionSlimInfoForArrayConstraintsFromSetEmployeePositionSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployeePositionSlimInfoEmployeePositionSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeePositionSlimInfoEmployeePositionSlimInfoItem instanceof \StructType\EmployeePositionSlimInfo) {
                $invalidValues[] = is_object($arrayOfEmployeePositionSlimInfoEmployeePositionSlimInfoItem) ? get_class($arrayOfEmployeePositionSlimInfoEmployeePositionSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfEmployeePositionSlimInfoEmployeePositionSlimInfoItem), var_export($arrayOfEmployeePositionSlimInfoEmployeePositionSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeePositionSlimInfo property can only contain items of type \StructType\EmployeePositionSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmployeePositionSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmployeePositionSlimInfo[] $employeePositionSlimInfo
     * @return \ArrayType\ArrayOfEmployeePositionSlimInfo
     */
    public function setEmployeePositionSlimInfo(array $employeePositionSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($employeePositionSlimInfoArrayErrorMessage = self::validateEmployeePositionSlimInfoForArrayConstraintsFromSetEmployeePositionSlimInfo($employeePositionSlimInfo))) {
            throw new InvalidArgumentException($employeePositionSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($employeePositionSlimInfo) || (is_array($employeePositionSlimInfo) && empty($employeePositionSlimInfo))) {
            unset($this->EmployeePositionSlimInfo);
        } else {
            $this->EmployeePositionSlimInfo = $employeePositionSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmployeePositionSlimInfo|null
     */
    public function current(): ?\StructType\EmployeePositionSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmployeePositionSlimInfo|null
     */
    public function item($index): ?\StructType\EmployeePositionSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmployeePositionSlimInfo|null
     */
    public function first(): ?\StructType\EmployeePositionSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmployeePositionSlimInfo|null
     */
    public function last(): ?\StructType\EmployeePositionSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmployeePositionSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\EmployeePositionSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmployeePositionSlimInfo $item
     * @return \ArrayType\ArrayOfEmployeePositionSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmployeePositionSlimInfo) {
            throw new InvalidArgumentException(sprintf('The EmployeePositionSlimInfo property can only contain items of type \StructType\EmployeePositionSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmployeePositionSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'EmployeePositionSlimInfo';
    }
}
