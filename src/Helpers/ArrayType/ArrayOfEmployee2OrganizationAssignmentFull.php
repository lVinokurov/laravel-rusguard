<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployee2OrganizationAssignmentFull ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployee2OrganizationAssignmentFull
 * @subpackage Arrays
 */
class ArrayOfEmployee2OrganizationAssignmentFull extends AbstractStructArrayBase
{
    /**
     * The Employee2OrganizationAssignmentFull
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Employee2OrganizationAssignmentFull[]
     */
    protected array $Employee2OrganizationAssignmentFull = [];
    /**
     * Constructor method for ArrayOfEmployee2OrganizationAssignmentFull
     * @uses ArrayOfEmployee2OrganizationAssignmentFull::setEmployee2OrganizationAssignmentFull()
     * @param \StructType\Employee2OrganizationAssignmentFull[] $employee2OrganizationAssignmentFull
     */
    public function __construct(array $employee2OrganizationAssignmentFull = [])
    {
        $this
            ->setEmployee2OrganizationAssignmentFull($employee2OrganizationAssignmentFull);
    }
    /**
     * Get Employee2OrganizationAssignmentFull value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Employee2OrganizationAssignmentFull[]
     */
    public function getEmployee2OrganizationAssignmentFull(): ?array
    {
        return isset($this->Employee2OrganizationAssignmentFull) ? $this->Employee2OrganizationAssignmentFull : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee2OrganizationAssignmentFull method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee2OrganizationAssignmentFull method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployee2OrganizationAssignmentFullForArrayConstraintsFromSetEmployee2OrganizationAssignmentFull(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployee2OrganizationAssignmentFullEmployee2OrganizationAssignmentFullItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployee2OrganizationAssignmentFullEmployee2OrganizationAssignmentFullItem instanceof \StructType\Employee2OrganizationAssignmentFull) {
                $invalidValues[] = is_object($arrayOfEmployee2OrganizationAssignmentFullEmployee2OrganizationAssignmentFullItem) ? get_class($arrayOfEmployee2OrganizationAssignmentFullEmployee2OrganizationAssignmentFullItem) : sprintf('%s(%s)', gettype($arrayOfEmployee2OrganizationAssignmentFullEmployee2OrganizationAssignmentFullItem), var_export($arrayOfEmployee2OrganizationAssignmentFullEmployee2OrganizationAssignmentFullItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Employee2OrganizationAssignmentFull property can only contain items of type \StructType\Employee2OrganizationAssignmentFull, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Employee2OrganizationAssignmentFull value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Employee2OrganizationAssignmentFull[] $employee2OrganizationAssignmentFull
     * @return \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull
     */
    public function setEmployee2OrganizationAssignmentFull(array $employee2OrganizationAssignmentFull = []): self
    {
        // validation for constraint: array
        if ('' !== ($employee2OrganizationAssignmentFullArrayErrorMessage = self::validateEmployee2OrganizationAssignmentFullForArrayConstraintsFromSetEmployee2OrganizationAssignmentFull($employee2OrganizationAssignmentFull))) {
            throw new InvalidArgumentException($employee2OrganizationAssignmentFullArrayErrorMessage, __LINE__);
        }
        if (is_null($employee2OrganizationAssignmentFull) || (is_array($employee2OrganizationAssignmentFull) && empty($employee2OrganizationAssignmentFull))) {
            unset($this->Employee2OrganizationAssignmentFull);
        } else {
            $this->Employee2OrganizationAssignmentFull = $employee2OrganizationAssignmentFull;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Employee2OrganizationAssignmentFull|null
     */
    public function current(): ?\StructType\Employee2OrganizationAssignmentFull
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Employee2OrganizationAssignmentFull|null
     */
    public function item($index): ?\StructType\Employee2OrganizationAssignmentFull
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Employee2OrganizationAssignmentFull|null
     */
    public function first(): ?\StructType\Employee2OrganizationAssignmentFull
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Employee2OrganizationAssignmentFull|null
     */
    public function last(): ?\StructType\Employee2OrganizationAssignmentFull
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Employee2OrganizationAssignmentFull|null
     */
    public function offsetGet($offset): ?\StructType\Employee2OrganizationAssignmentFull
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\Employee2OrganizationAssignmentFull $item
     * @return \ArrayType\ArrayOfEmployee2OrganizationAssignmentFull
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee2OrganizationAssignmentFull) {
            throw new InvalidArgumentException(sprintf('The Employee2OrganizationAssignmentFull property can only contain items of type \StructType\Employee2OrganizationAssignmentFull, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Employee2OrganizationAssignmentFull
     */
    public function getAttributeName(): string
    {
        return 'Employee2OrganizationAssignmentFull';
    }
}
