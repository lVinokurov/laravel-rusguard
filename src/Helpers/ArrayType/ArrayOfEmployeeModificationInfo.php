<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeeModificationInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeeModificationInfo
 * @subpackage Arrays
 */
class ArrayOfEmployeeModificationInfo extends AbstractStructArrayBase
{
    /**
     * The EmployeeModificationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeeModificationInfo[]
     */
    protected array $EmployeeModificationInfo = [];
    /**
     * Constructor method for ArrayOfEmployeeModificationInfo
     * @uses ArrayOfEmployeeModificationInfo::setEmployeeModificationInfo()
     * @param \StructType\EmployeeModificationInfo[] $employeeModificationInfo
     */
    public function __construct(array $employeeModificationInfo = [])
    {
        $this
            ->setEmployeeModificationInfo($employeeModificationInfo);
    }
    /**
     * Get EmployeeModificationInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeeModificationInfo[]
     */
    public function getEmployeeModificationInfo(): ?array
    {
        return isset($this->EmployeeModificationInfo) ? $this->EmployeeModificationInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployeeModificationInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeeModificationInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeModificationInfoForArrayConstraintsFromSetEmployeeModificationInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployeeModificationInfoEmployeeModificationInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeeModificationInfoEmployeeModificationInfoItem instanceof \StructType\EmployeeModificationInfo) {
                $invalidValues[] = is_object($arrayOfEmployeeModificationInfoEmployeeModificationInfoItem) ? get_class($arrayOfEmployeeModificationInfoEmployeeModificationInfoItem) : sprintf('%s(%s)', gettype($arrayOfEmployeeModificationInfoEmployeeModificationInfoItem), var_export($arrayOfEmployeeModificationInfoEmployeeModificationInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeeModificationInfo property can only contain items of type \StructType\EmployeeModificationInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmployeeModificationInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeModificationInfo[] $employeeModificationInfo
     * @return \ArrayType\ArrayOfEmployeeModificationInfo
     */
    public function setEmployeeModificationInfo(array $employeeModificationInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($employeeModificationInfoArrayErrorMessage = self::validateEmployeeModificationInfoForArrayConstraintsFromSetEmployeeModificationInfo($employeeModificationInfo))) {
            throw new InvalidArgumentException($employeeModificationInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($employeeModificationInfo) || (is_array($employeeModificationInfo) && empty($employeeModificationInfo))) {
            unset($this->EmployeeModificationInfo);
        } else {
            $this->EmployeeModificationInfo = $employeeModificationInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmployeeModificationInfo|null
     */
    public function current(): ?\StructType\EmployeeModificationInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmployeeModificationInfo|null
     */
    public function item($index): ?\StructType\EmployeeModificationInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmployeeModificationInfo|null
     */
    public function first(): ?\StructType\EmployeeModificationInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmployeeModificationInfo|null
     */
    public function last(): ?\StructType\EmployeeModificationInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmployeeModificationInfo|null
     */
    public function offsetGet($offset): ?\StructType\EmployeeModificationInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeModificationInfo $item
     * @return \ArrayType\ArrayOfEmployeeModificationInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmployeeModificationInfo) {
            throw new InvalidArgumentException(sprintf('The EmployeeModificationInfo property can only contain items of type \StructType\EmployeeModificationInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmployeeModificationInfo
     */
    public function getAttributeName(): string
    {
        return 'EmployeeModificationInfo';
    }
}
