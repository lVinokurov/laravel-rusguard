<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsEmployee ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsEmployee
 * @subpackage Arrays
 */
class ArrayOfAcsEmployee extends AbstractStructArrayBase
{
    /**
     * The AcsEmployee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployee[]
     */
    protected array $AcsEmployee = [];
    /**
     * Constructor method for ArrayOfAcsEmployee
     * @uses ArrayOfAcsEmployee::setAcsEmployee()
     * @param \StructType\AcsEmployee[] $acsEmployee
     */
    public function __construct(array $acsEmployee = [])
    {
        $this
            ->setAcsEmployee($acsEmployee);
    }
    /**
     * Get AcsEmployee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployee[]
     */
    public function getAcsEmployee(): ?array
    {
        return isset($this->AcsEmployee) ? $this->AcsEmployee : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsEmployee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsEmployee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsEmployeeForArrayConstraintsFromSetAcsEmployee(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsEmployeeAcsEmployeeItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsEmployeeAcsEmployeeItem instanceof \StructType\AcsEmployee) {
                $invalidValues[] = is_object($arrayOfAcsEmployeeAcsEmployeeItem) ? get_class($arrayOfAcsEmployeeAcsEmployeeItem) : sprintf('%s(%s)', gettype($arrayOfAcsEmployeeAcsEmployeeItem), var_export($arrayOfAcsEmployeeAcsEmployeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsEmployee property can only contain items of type \StructType\AcsEmployee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsEmployee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployee[] $acsEmployee
     * @return \ArrayType\ArrayOfAcsEmployee
     */
    public function setAcsEmployee(array $acsEmployee = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsEmployeeArrayErrorMessage = self::validateAcsEmployeeForArrayConstraintsFromSetAcsEmployee($acsEmployee))) {
            throw new InvalidArgumentException($acsEmployeeArrayErrorMessage, __LINE__);
        }
        if (is_null($acsEmployee) || (is_array($acsEmployee) && empty($acsEmployee))) {
            unset($this->AcsEmployee);
        } else {
            $this->AcsEmployee = $acsEmployee;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsEmployee|null
     */
    public function current(): ?\StructType\AcsEmployee
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsEmployee|null
     */
    public function item($index): ?\StructType\AcsEmployee
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsEmployee|null
     */
    public function first(): ?\StructType\AcsEmployee
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsEmployee|null
     */
    public function last(): ?\StructType\AcsEmployee
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsEmployee|null
     */
    public function offsetGet($offset): ?\StructType\AcsEmployee
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployee $item
     * @return \ArrayType\ArrayOfAcsEmployee
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsEmployee) {
            throw new InvalidArgumentException(sprintf('The AcsEmployee property can only contain items of type \StructType\AcsEmployee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsEmployee
     */
    public function getAttributeName(): string
    {
        return 'AcsEmployee';
    }
}
