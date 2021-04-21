<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployee2OrganizationAssignment ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployee2OrganizationAssignment
 * @subpackage Arrays
 */
class ArrayOfEmployee2OrganizationAssignment extends AbstractStructArrayBase
{
    /**
     * The Employee2OrganizationAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Employee2OrganizationAssignment[]
     */
    protected array $Employee2OrganizationAssignment = [];
    /**
     * Constructor method for ArrayOfEmployee2OrganizationAssignment
     * @uses ArrayOfEmployee2OrganizationAssignment::setEmployee2OrganizationAssignment()
     * @param \StructType\Employee2OrganizationAssignment[] $employee2OrganizationAssignment
     */
    public function __construct(array $employee2OrganizationAssignment = [])
    {
        $this
            ->setEmployee2OrganizationAssignment($employee2OrganizationAssignment);
    }
    /**
     * Get Employee2OrganizationAssignment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Employee2OrganizationAssignment[]
     */
    public function getEmployee2OrganizationAssignment(): ?array
    {
        return isset($this->Employee2OrganizationAssignment) ? $this->Employee2OrganizationAssignment : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee2OrganizationAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee2OrganizationAssignment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployee2OrganizationAssignmentForArrayConstraintsFromSetEmployee2OrganizationAssignment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployee2OrganizationAssignmentEmployee2OrganizationAssignmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployee2OrganizationAssignmentEmployee2OrganizationAssignmentItem instanceof \StructType\Employee2OrganizationAssignment) {
                $invalidValues[] = is_object($arrayOfEmployee2OrganizationAssignmentEmployee2OrganizationAssignmentItem) ? get_class($arrayOfEmployee2OrganizationAssignmentEmployee2OrganizationAssignmentItem) : sprintf('%s(%s)', gettype($arrayOfEmployee2OrganizationAssignmentEmployee2OrganizationAssignmentItem), var_export($arrayOfEmployee2OrganizationAssignmentEmployee2OrganizationAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Employee2OrganizationAssignment property can only contain items of type \StructType\Employee2OrganizationAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Employee2OrganizationAssignment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Employee2OrganizationAssignment[] $employee2OrganizationAssignment
     * @return \ArrayType\ArrayOfEmployee2OrganizationAssignment
     */
    public function setEmployee2OrganizationAssignment(array $employee2OrganizationAssignment = []): self
    {
        // validation for constraint: array
        if ('' !== ($employee2OrganizationAssignmentArrayErrorMessage = self::validateEmployee2OrganizationAssignmentForArrayConstraintsFromSetEmployee2OrganizationAssignment($employee2OrganizationAssignment))) {
            throw new InvalidArgumentException($employee2OrganizationAssignmentArrayErrorMessage, __LINE__);
        }
        if (is_null($employee2OrganizationAssignment) || (is_array($employee2OrganizationAssignment) && empty($employee2OrganizationAssignment))) {
            unset($this->Employee2OrganizationAssignment);
        } else {
            $this->Employee2OrganizationAssignment = $employee2OrganizationAssignment;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Employee2OrganizationAssignment|null
     */
    public function current(): ?\StructType\Employee2OrganizationAssignment
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Employee2OrganizationAssignment|null
     */
    public function item($index): ?\StructType\Employee2OrganizationAssignment
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Employee2OrganizationAssignment|null
     */
    public function first(): ?\StructType\Employee2OrganizationAssignment
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Employee2OrganizationAssignment|null
     */
    public function last(): ?\StructType\Employee2OrganizationAssignment
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Employee2OrganizationAssignment|null
     */
    public function offsetGet($offset): ?\StructType\Employee2OrganizationAssignment
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\Employee2OrganizationAssignment $item
     * @return \ArrayType\ArrayOfEmployee2OrganizationAssignment
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee2OrganizationAssignment) {
            throw new InvalidArgumentException(sprintf('The Employee2OrganizationAssignment property can only contain items of type \StructType\Employee2OrganizationAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Employee2OrganizationAssignment
     */
    public function getAttributeName(): string
    {
        return 'Employee2OrganizationAssignment';
    }
}
