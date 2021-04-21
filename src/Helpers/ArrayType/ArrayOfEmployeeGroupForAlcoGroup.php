<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeeGroupForAlcoGroup ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeeGroupForAlcoGroup
 * @subpackage Arrays
 */
class ArrayOfEmployeeGroupForAlcoGroup extends AbstractStructArrayBase
{
    /**
     * The EmployeeGroupForAlcoGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeeGroupForAlcoGroup[]
     */
    protected array $EmployeeGroupForAlcoGroup = [];
    /**
     * Constructor method for ArrayOfEmployeeGroupForAlcoGroup
     * @uses ArrayOfEmployeeGroupForAlcoGroup::setEmployeeGroupForAlcoGroup()
     * @param \StructType\EmployeeGroupForAlcoGroup[] $employeeGroupForAlcoGroup
     */
    public function __construct(array $employeeGroupForAlcoGroup = [])
    {
        $this
            ->setEmployeeGroupForAlcoGroup($employeeGroupForAlcoGroup);
    }
    /**
     * Get EmployeeGroupForAlcoGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeeGroupForAlcoGroup[]
     */
    public function getEmployeeGroupForAlcoGroup(): ?array
    {
        return isset($this->EmployeeGroupForAlcoGroup) ? $this->EmployeeGroupForAlcoGroup : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployeeGroupForAlcoGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeeGroupForAlcoGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeGroupForAlcoGroupForArrayConstraintsFromSetEmployeeGroupForAlcoGroup(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployeeGroupForAlcoGroupEmployeeGroupForAlcoGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeeGroupForAlcoGroupEmployeeGroupForAlcoGroupItem instanceof \StructType\EmployeeGroupForAlcoGroup) {
                $invalidValues[] = is_object($arrayOfEmployeeGroupForAlcoGroupEmployeeGroupForAlcoGroupItem) ? get_class($arrayOfEmployeeGroupForAlcoGroupEmployeeGroupForAlcoGroupItem) : sprintf('%s(%s)', gettype($arrayOfEmployeeGroupForAlcoGroupEmployeeGroupForAlcoGroupItem), var_export($arrayOfEmployeeGroupForAlcoGroupEmployeeGroupForAlcoGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeeGroupForAlcoGroup property can only contain items of type \StructType\EmployeeGroupForAlcoGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmployeeGroupForAlcoGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeGroupForAlcoGroup[] $employeeGroupForAlcoGroup
     * @return \ArrayType\ArrayOfEmployeeGroupForAlcoGroup
     */
    public function setEmployeeGroupForAlcoGroup(array $employeeGroupForAlcoGroup = []): self
    {
        // validation for constraint: array
        if ('' !== ($employeeGroupForAlcoGroupArrayErrorMessage = self::validateEmployeeGroupForAlcoGroupForArrayConstraintsFromSetEmployeeGroupForAlcoGroup($employeeGroupForAlcoGroup))) {
            throw new InvalidArgumentException($employeeGroupForAlcoGroupArrayErrorMessage, __LINE__);
        }
        if (is_null($employeeGroupForAlcoGroup) || (is_array($employeeGroupForAlcoGroup) && empty($employeeGroupForAlcoGroup))) {
            unset($this->EmployeeGroupForAlcoGroup);
        } else {
            $this->EmployeeGroupForAlcoGroup = $employeeGroupForAlcoGroup;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmployeeGroupForAlcoGroup|null
     */
    public function current(): ?\StructType\EmployeeGroupForAlcoGroup
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmployeeGroupForAlcoGroup|null
     */
    public function item($index): ?\StructType\EmployeeGroupForAlcoGroup
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmployeeGroupForAlcoGroup|null
     */
    public function first(): ?\StructType\EmployeeGroupForAlcoGroup
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmployeeGroupForAlcoGroup|null
     */
    public function last(): ?\StructType\EmployeeGroupForAlcoGroup
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmployeeGroupForAlcoGroup|null
     */
    public function offsetGet($offset): ?\StructType\EmployeeGroupForAlcoGroup
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeGroupForAlcoGroup $item
     * @return \ArrayType\ArrayOfEmployeeGroupForAlcoGroup
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmployeeGroupForAlcoGroup) {
            throw new InvalidArgumentException(sprintf('The EmployeeGroupForAlcoGroup property can only contain items of type \StructType\EmployeeGroupForAlcoGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmployeeGroupForAlcoGroup
     */
    public function getAttributeName(): string
    {
        return 'EmployeeGroupForAlcoGroup';
    }
}
