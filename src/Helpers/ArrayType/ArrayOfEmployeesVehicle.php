<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeesVehicle ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeesVehicle
 * @subpackage Arrays
 */
class ArrayOfEmployeesVehicle extends AbstractStructArrayBase
{
    /**
     * The EmployeesVehicle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeesVehicle[]
     */
    protected array $EmployeesVehicle = [];
    /**
     * Constructor method for ArrayOfEmployeesVehicle
     * @uses ArrayOfEmployeesVehicle::setEmployeesVehicle()
     * @param \StructType\EmployeesVehicle[] $employeesVehicle
     */
    public function __construct(array $employeesVehicle = [])
    {
        $this
            ->setEmployeesVehicle($employeesVehicle);
    }
    /**
     * Get EmployeesVehicle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeesVehicle[]
     */
    public function getEmployeesVehicle(): ?array
    {
        return isset($this->EmployeesVehicle) ? $this->EmployeesVehicle : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployeesVehicle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeesVehicle method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeesVehicleForArrayConstraintsFromSetEmployeesVehicle(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployeesVehicleEmployeesVehicleItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeesVehicleEmployeesVehicleItem instanceof \StructType\EmployeesVehicle) {
                $invalidValues[] = is_object($arrayOfEmployeesVehicleEmployeesVehicleItem) ? get_class($arrayOfEmployeesVehicleEmployeesVehicleItem) : sprintf('%s(%s)', gettype($arrayOfEmployeesVehicleEmployeesVehicleItem), var_export($arrayOfEmployeesVehicleEmployeesVehicleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeesVehicle property can only contain items of type \StructType\EmployeesVehicle, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmployeesVehicle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmployeesVehicle[] $employeesVehicle
     * @return \ArrayType\ArrayOfEmployeesVehicle
     */
    public function setEmployeesVehicle(array $employeesVehicle = []): self
    {
        // validation for constraint: array
        if ('' !== ($employeesVehicleArrayErrorMessage = self::validateEmployeesVehicleForArrayConstraintsFromSetEmployeesVehicle($employeesVehicle))) {
            throw new InvalidArgumentException($employeesVehicleArrayErrorMessage, __LINE__);
        }
        if (is_null($employeesVehicle) || (is_array($employeesVehicle) && empty($employeesVehicle))) {
            unset($this->EmployeesVehicle);
        } else {
            $this->EmployeesVehicle = $employeesVehicle;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmployeesVehicle|null
     */
    public function current(): ?\StructType\EmployeesVehicle
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmployeesVehicle|null
     */
    public function item($index): ?\StructType\EmployeesVehicle
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmployeesVehicle|null
     */
    public function first(): ?\StructType\EmployeesVehicle
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmployeesVehicle|null
     */
    public function last(): ?\StructType\EmployeesVehicle
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmployeesVehicle|null
     */
    public function offsetGet($offset): ?\StructType\EmployeesVehicle
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmployeesVehicle $item
     * @return \ArrayType\ArrayOfEmployeesVehicle
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmployeesVehicle) {
            throw new InvalidArgumentException(sprintf('The EmployeesVehicle property can only contain items of type \StructType\EmployeesVehicle, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmployeesVehicle
     */
    public function getAttributeName(): string
    {
        return 'EmployeesVehicle';
    }
}
