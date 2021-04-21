<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeeGroupForAlcoGroupFull ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeeGroupForAlcoGroupFull
 * @subpackage Arrays
 */
class ArrayOfEmployeeGroupForAlcoGroupFull extends AbstractStructArrayBase
{
    /**
     * The EmployeeGroupForAlcoGroupFull
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeeGroupForAlcoGroupFull[]
     */
    protected array $EmployeeGroupForAlcoGroupFull = [];
    /**
     * Constructor method for ArrayOfEmployeeGroupForAlcoGroupFull
     * @uses ArrayOfEmployeeGroupForAlcoGroupFull::setEmployeeGroupForAlcoGroupFull()
     * @param \StructType\EmployeeGroupForAlcoGroupFull[] $employeeGroupForAlcoGroupFull
     */
    public function __construct(array $employeeGroupForAlcoGroupFull = [])
    {
        $this
            ->setEmployeeGroupForAlcoGroupFull($employeeGroupForAlcoGroupFull);
    }
    /**
     * Get EmployeeGroupForAlcoGroupFull value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeeGroupForAlcoGroupFull[]
     */
    public function getEmployeeGroupForAlcoGroupFull(): ?array
    {
        return isset($this->EmployeeGroupForAlcoGroupFull) ? $this->EmployeeGroupForAlcoGroupFull : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployeeGroupForAlcoGroupFull method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeeGroupForAlcoGroupFull method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeGroupForAlcoGroupFullForArrayConstraintsFromSetEmployeeGroupForAlcoGroupFull(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployeeGroupForAlcoGroupFullEmployeeGroupForAlcoGroupFullItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeeGroupForAlcoGroupFullEmployeeGroupForAlcoGroupFullItem instanceof \StructType\EmployeeGroupForAlcoGroupFull) {
                $invalidValues[] = is_object($arrayOfEmployeeGroupForAlcoGroupFullEmployeeGroupForAlcoGroupFullItem) ? get_class($arrayOfEmployeeGroupForAlcoGroupFullEmployeeGroupForAlcoGroupFullItem) : sprintf('%s(%s)', gettype($arrayOfEmployeeGroupForAlcoGroupFullEmployeeGroupForAlcoGroupFullItem), var_export($arrayOfEmployeeGroupForAlcoGroupFullEmployeeGroupForAlcoGroupFullItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeeGroupForAlcoGroupFull property can only contain items of type \StructType\EmployeeGroupForAlcoGroupFull, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmployeeGroupForAlcoGroupFull value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeGroupForAlcoGroupFull[] $employeeGroupForAlcoGroupFull
     * @return \ArrayType\ArrayOfEmployeeGroupForAlcoGroupFull
     */
    public function setEmployeeGroupForAlcoGroupFull(array $employeeGroupForAlcoGroupFull = []): self
    {
        // validation for constraint: array
        if ('' !== ($employeeGroupForAlcoGroupFullArrayErrorMessage = self::validateEmployeeGroupForAlcoGroupFullForArrayConstraintsFromSetEmployeeGroupForAlcoGroupFull($employeeGroupForAlcoGroupFull))) {
            throw new InvalidArgumentException($employeeGroupForAlcoGroupFullArrayErrorMessage, __LINE__);
        }
        if (is_null($employeeGroupForAlcoGroupFull) || (is_array($employeeGroupForAlcoGroupFull) && empty($employeeGroupForAlcoGroupFull))) {
            unset($this->EmployeeGroupForAlcoGroupFull);
        } else {
            $this->EmployeeGroupForAlcoGroupFull = $employeeGroupForAlcoGroupFull;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmployeeGroupForAlcoGroupFull|null
     */
    public function current(): ?\StructType\EmployeeGroupForAlcoGroupFull
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmployeeGroupForAlcoGroupFull|null
     */
    public function item($index): ?\StructType\EmployeeGroupForAlcoGroupFull
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmployeeGroupForAlcoGroupFull|null
     */
    public function first(): ?\StructType\EmployeeGroupForAlcoGroupFull
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmployeeGroupForAlcoGroupFull|null
     */
    public function last(): ?\StructType\EmployeeGroupForAlcoGroupFull
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmployeeGroupForAlcoGroupFull|null
     */
    public function offsetGet($offset): ?\StructType\EmployeeGroupForAlcoGroupFull
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeGroupForAlcoGroupFull $item
     * @return \ArrayType\ArrayOfEmployeeGroupForAlcoGroupFull
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmployeeGroupForAlcoGroupFull) {
            throw new InvalidArgumentException(sprintf('The EmployeeGroupForAlcoGroupFull property can only contain items of type \StructType\EmployeeGroupForAlcoGroupFull, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmployeeGroupForAlcoGroupFull
     */
    public function getAttributeName(): string
    {
        return 'EmployeeGroupForAlcoGroupFull';
    }
}
