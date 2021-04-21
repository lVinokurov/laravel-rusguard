<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeeCurentInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeeCurentInfo
 * @subpackage Arrays
 */
class ArrayOfEmployeeCurentInfo extends AbstractStructArrayBase
{
    /**
     * The EmployeeCurentInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeeCurentInfo[]
     */
    protected array $EmployeeCurentInfo = [];
    /**
     * Constructor method for ArrayOfEmployeeCurentInfo
     * @uses ArrayOfEmployeeCurentInfo::setEmployeeCurentInfo()
     * @param \StructType\EmployeeCurentInfo[] $employeeCurentInfo
     */
    public function __construct(array $employeeCurentInfo = [])
    {
        $this
            ->setEmployeeCurentInfo($employeeCurentInfo);
    }
    /**
     * Get EmployeeCurentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeeCurentInfo[]
     */
    public function getEmployeeCurentInfo(): ?array
    {
        return isset($this->EmployeeCurentInfo) ? $this->EmployeeCurentInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployeeCurentInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeeCurentInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeCurentInfoForArrayConstraintsFromSetEmployeeCurentInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmployeeCurentInfoEmployeeCurentInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeeCurentInfoEmployeeCurentInfoItem instanceof \StructType\EmployeeCurentInfo) {
                $invalidValues[] = is_object($arrayOfEmployeeCurentInfoEmployeeCurentInfoItem) ? get_class($arrayOfEmployeeCurentInfoEmployeeCurentInfoItem) : sprintf('%s(%s)', gettype($arrayOfEmployeeCurentInfoEmployeeCurentInfoItem), var_export($arrayOfEmployeeCurentInfoEmployeeCurentInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeeCurentInfo property can only contain items of type \StructType\EmployeeCurentInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmployeeCurentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeCurentInfo[] $employeeCurentInfo
     * @return \ArrayType\ArrayOfEmployeeCurentInfo
     */
    public function setEmployeeCurentInfo(array $employeeCurentInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($employeeCurentInfoArrayErrorMessage = self::validateEmployeeCurentInfoForArrayConstraintsFromSetEmployeeCurentInfo($employeeCurentInfo))) {
            throw new InvalidArgumentException($employeeCurentInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($employeeCurentInfo) || (is_array($employeeCurentInfo) && empty($employeeCurentInfo))) {
            unset($this->EmployeeCurentInfo);
        } else {
            $this->EmployeeCurentInfo = $employeeCurentInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmployeeCurentInfo|null
     */
    public function current(): ?\StructType\EmployeeCurentInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmployeeCurentInfo|null
     */
    public function item($index): ?\StructType\EmployeeCurentInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmployeeCurentInfo|null
     */
    public function first(): ?\StructType\EmployeeCurentInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmployeeCurentInfo|null
     */
    public function last(): ?\StructType\EmployeeCurentInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmployeeCurentInfo|null
     */
    public function offsetGet($offset): ?\StructType\EmployeeCurentInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmployeeCurentInfo $item
     * @return \ArrayType\ArrayOfEmployeeCurentInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmployeeCurentInfo) {
            throw new InvalidArgumentException(sprintf('The EmployeeCurentInfo property can only contain items of type \StructType\EmployeeCurentInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmployeeCurentInfo
     */
    public function getAttributeName(): string
    {
        return 'EmployeeCurentInfo';
    }
}
