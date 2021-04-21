<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeeViewFieldMetadata ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeeViewFieldMetadata
 * @subpackage Arrays
 */
class ArrayOfEmployeeViewFieldMetadata extends AbstractStructArrayBase
{
    /**
     * The EmployeeViewFieldMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeeViewFieldMetadata[]
     */
    protected array $EmployeeViewFieldMetadata = [];
    /**
     * Constructor method for ArrayOfEmployeeViewFieldMetadata
     * @uses ArrayOfEmployeeViewFieldMetadata::setEmployeeViewFieldMetadata()
     * @param \StructType\EmployeeViewFieldMetadata[] $employeeViewFieldMetadata
     */
    public function __construct(array $employeeViewFieldMetadata = [])
    {
        $this
            ->setEmployeeViewFieldMetadata($employeeViewFieldMetadata);
    }
    /**
     * Get EmployeeViewFieldMetadata value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeeViewFieldMetadata[]
     */
    public function getEmployeeViewFieldMetadata(): ?array
    {
        return isset($this->EmployeeViewFieldMetadata) ? $this->EmployeeViewFieldMetadata : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployeeViewFieldMetadata method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeeViewFieldMetadata method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeViewFieldMetadataForArrayConstraintsFromSetEmployeeViewFieldMetadata(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployeeViewFieldMetadataEmployeeViewFieldMetadataItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeeViewFieldMetadataEmployeeViewFieldMetadataItem instanceof \StructType\EmployeeViewFieldMetadata) {
                $invalidValues[] = is_object($arrayOfEmployeeViewFieldMetadataEmployeeViewFieldMetadataItem) ? get_class($arrayOfEmployeeViewFieldMetadataEmployeeViewFieldMetadataItem) : sprintf('%s(%s)', gettype($arrayOfEmployeeViewFieldMetadataEmployeeViewFieldMetadataItem), var_export($arrayOfEmployeeViewFieldMetadataEmployeeViewFieldMetadataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeeViewFieldMetadata property can only contain items of type \StructType\EmployeeViewFieldMetadata, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmployeeViewFieldMetadata value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeViewFieldMetadata[] $employeeViewFieldMetadata
     * @return \ArrayType\ArrayOfEmployeeViewFieldMetadata
     */
    public function setEmployeeViewFieldMetadata(array $employeeViewFieldMetadata = []): self
    {
        // validation for constraint: array
        if ('' !== ($employeeViewFieldMetadataArrayErrorMessage = self::validateEmployeeViewFieldMetadataForArrayConstraintsFromSetEmployeeViewFieldMetadata($employeeViewFieldMetadata))) {
            throw new InvalidArgumentException($employeeViewFieldMetadataArrayErrorMessage, __LINE__);
        }
        if (is_null($employeeViewFieldMetadata) || (is_array($employeeViewFieldMetadata) && empty($employeeViewFieldMetadata))) {
            unset($this->EmployeeViewFieldMetadata);
        } else {
            $this->EmployeeViewFieldMetadata = $employeeViewFieldMetadata;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmployeeViewFieldMetadata|null
     */
    public function current(): ?\StructType\EmployeeViewFieldMetadata
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmployeeViewFieldMetadata|null
     */
    public function item($index): ?\StructType\EmployeeViewFieldMetadata
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmployeeViewFieldMetadata|null
     */
    public function first(): ?\StructType\EmployeeViewFieldMetadata
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmployeeViewFieldMetadata|null
     */
    public function last(): ?\StructType\EmployeeViewFieldMetadata
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmployeeViewFieldMetadata|null
     */
    public function offsetGet($offset): ?\StructType\EmployeeViewFieldMetadata
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeViewFieldMetadata $item
     * @return \ArrayType\ArrayOfEmployeeViewFieldMetadata
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmployeeViewFieldMetadata) {
            throw new InvalidArgumentException(sprintf('The EmployeeViewFieldMetadata property can only contain items of type \StructType\EmployeeViewFieldMetadata, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmployeeViewFieldMetadata
     */
    public function getAttributeName(): string
    {
        return 'EmployeeViewFieldMetadata';
    }
}
