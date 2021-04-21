<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeeGroupTagsData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeeGroupTagsData
 * @subpackage Arrays
 */
class ArrayOfEmployeeGroupTagsData extends AbstractStructArrayBase
{
    /**
     * The EmployeeGroupTagsData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeeGroupTagsData[]
     */
    protected array $EmployeeGroupTagsData = [];
    /**
     * Constructor method for ArrayOfEmployeeGroupTagsData
     * @uses ArrayOfEmployeeGroupTagsData::setEmployeeGroupTagsData()
     * @param \StructType\EmployeeGroupTagsData[] $employeeGroupTagsData
     */
    public function __construct(array $employeeGroupTagsData = [])
    {
        $this
            ->setEmployeeGroupTagsData($employeeGroupTagsData);
    }
    /**
     * Get EmployeeGroupTagsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeeGroupTagsData[]
     */
    public function getEmployeeGroupTagsData(): ?array
    {
        return isset($this->EmployeeGroupTagsData) ? $this->EmployeeGroupTagsData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployeeGroupTagsData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeeGroupTagsData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeGroupTagsDataForArrayConstraintsFromSetEmployeeGroupTagsData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployeeGroupTagsDataEmployeeGroupTagsDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeeGroupTagsDataEmployeeGroupTagsDataItem instanceof \StructType\EmployeeGroupTagsData) {
                $invalidValues[] = is_object($arrayOfEmployeeGroupTagsDataEmployeeGroupTagsDataItem) ? get_class($arrayOfEmployeeGroupTagsDataEmployeeGroupTagsDataItem) : sprintf('%s(%s)', gettype($arrayOfEmployeeGroupTagsDataEmployeeGroupTagsDataItem), var_export($arrayOfEmployeeGroupTagsDataEmployeeGroupTagsDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeeGroupTagsData property can only contain items of type \StructType\EmployeeGroupTagsData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmployeeGroupTagsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeGroupTagsData[] $employeeGroupTagsData
     * @return \ArrayType\ArrayOfEmployeeGroupTagsData
     */
    public function setEmployeeGroupTagsData(array $employeeGroupTagsData = []): self
    {
        // validation for constraint: array
        if ('' !== ($employeeGroupTagsDataArrayErrorMessage = self::validateEmployeeGroupTagsDataForArrayConstraintsFromSetEmployeeGroupTagsData($employeeGroupTagsData))) {
            throw new InvalidArgumentException($employeeGroupTagsDataArrayErrorMessage, __LINE__);
        }
        if (is_null($employeeGroupTagsData) || (is_array($employeeGroupTagsData) && empty($employeeGroupTagsData))) {
            unset($this->EmployeeGroupTagsData);
        } else {
            $this->EmployeeGroupTagsData = $employeeGroupTagsData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmployeeGroupTagsData|null
     */
    public function current(): ?\StructType\EmployeeGroupTagsData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmployeeGroupTagsData|null
     */
    public function item($index): ?\StructType\EmployeeGroupTagsData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmployeeGroupTagsData|null
     */
    public function first(): ?\StructType\EmployeeGroupTagsData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmployeeGroupTagsData|null
     */
    public function last(): ?\StructType\EmployeeGroupTagsData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmployeeGroupTagsData|null
     */
    public function offsetGet($offset): ?\StructType\EmployeeGroupTagsData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeGroupTagsData $item
     * @return \ArrayType\ArrayOfEmployeeGroupTagsData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmployeeGroupTagsData) {
            throw new InvalidArgumentException(sprintf('The EmployeeGroupTagsData property can only contain items of type \StructType\EmployeeGroupTagsData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmployeeGroupTagsData
     */
    public function getAttributeName(): string
    {
        return 'EmployeeGroupTagsData';
    }
}
