<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeeShortInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeeShortInfo
 * @subpackage Arrays
 */
class ArrayOfEmployeeShortInfo extends AbstractStructArrayBase
{
    /**
     * The EmployeeShortInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeeShortInfo[]
     */
    protected array $EmployeeShortInfo = [];
    /**
     * Constructor method for ArrayOfEmployeeShortInfo
     * @uses ArrayOfEmployeeShortInfo::setEmployeeShortInfo()
     * @param \StructType\EmployeeShortInfo[] $employeeShortInfo
     */
    public function __construct(array $employeeShortInfo = [])
    {
        $this
            ->setEmployeeShortInfo($employeeShortInfo);
    }
    /**
     * Get EmployeeShortInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeeShortInfo[]
     */
    public function getEmployeeShortInfo(): ?array
    {
        return isset($this->EmployeeShortInfo) ? $this->EmployeeShortInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployeeShortInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeeShortInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeShortInfoForArrayConstraintsFromSetEmployeeShortInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployeeShortInfoEmployeeShortInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeeShortInfoEmployeeShortInfoItem instanceof \StructType\EmployeeShortInfo) {
                $invalidValues[] = is_object($arrayOfEmployeeShortInfoEmployeeShortInfoItem) ? get_class($arrayOfEmployeeShortInfoEmployeeShortInfoItem) : sprintf('%s(%s)', gettype($arrayOfEmployeeShortInfoEmployeeShortInfoItem), var_export($arrayOfEmployeeShortInfoEmployeeShortInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeeShortInfo property can only contain items of type \StructType\EmployeeShortInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmployeeShortInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeShortInfo[] $employeeShortInfo
     * @return \ArrayType\ArrayOfEmployeeShortInfo
     */
    public function setEmployeeShortInfo(array $employeeShortInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($employeeShortInfoArrayErrorMessage = self::validateEmployeeShortInfoForArrayConstraintsFromSetEmployeeShortInfo($employeeShortInfo))) {
            throw new InvalidArgumentException($employeeShortInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($employeeShortInfo) || (is_array($employeeShortInfo) && empty($employeeShortInfo))) {
            unset($this->EmployeeShortInfo);
        } else {
            $this->EmployeeShortInfo = $employeeShortInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmployeeShortInfo|null
     */
    public function current(): ?\StructType\EmployeeShortInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmployeeShortInfo|null
     */
    public function item($index): ?\StructType\EmployeeShortInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmployeeShortInfo|null
     */
    public function first(): ?\StructType\EmployeeShortInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmployeeShortInfo|null
     */
    public function last(): ?\StructType\EmployeeShortInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmployeeShortInfo|null
     */
    public function offsetGet($offset): ?\StructType\EmployeeShortInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeShortInfo $item
     * @return \ArrayType\ArrayOfEmployeeShortInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmployeeShortInfo) {
            throw new InvalidArgumentException(sprintf('The EmployeeShortInfo property can only contain items of type \StructType\EmployeeShortInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmployeeShortInfo
     */
    public function getAttributeName(): string
    {
        return 'EmployeeShortInfo';
    }
}
