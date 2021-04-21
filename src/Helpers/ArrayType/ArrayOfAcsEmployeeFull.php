<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsEmployeeFull ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsEmployeeFull
 * @subpackage Arrays
 */
class ArrayOfAcsEmployeeFull extends AbstractStructArrayBase
{
    /**
     * The AcsEmployeeFull
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeFull[]
     */
    protected array $AcsEmployeeFull = [];
    /**
     * Constructor method for ArrayOfAcsEmployeeFull
     * @uses ArrayOfAcsEmployeeFull::setAcsEmployeeFull()
     * @param \StructType\AcsEmployeeFull[] $acsEmployeeFull
     */
    public function __construct(array $acsEmployeeFull = [])
    {
        $this
            ->setAcsEmployeeFull($acsEmployeeFull);
    }
    /**
     * Get AcsEmployeeFull value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeFull[]
     */
    public function getAcsEmployeeFull(): ?array
    {
        return isset($this->AcsEmployeeFull) ? $this->AcsEmployeeFull : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsEmployeeFull method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsEmployeeFull method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsEmployeeFullForArrayConstraintsFromSetAcsEmployeeFull(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsEmployeeFullAcsEmployeeFullItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsEmployeeFullAcsEmployeeFullItem instanceof \StructType\AcsEmployeeFull) {
                $invalidValues[] = is_object($arrayOfAcsEmployeeFullAcsEmployeeFullItem) ? get_class($arrayOfAcsEmployeeFullAcsEmployeeFullItem) : sprintf('%s(%s)', gettype($arrayOfAcsEmployeeFullAcsEmployeeFullItem), var_export($arrayOfAcsEmployeeFullAcsEmployeeFullItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsEmployeeFull property can only contain items of type \StructType\AcsEmployeeFull, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsEmployeeFull value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeFull[] $acsEmployeeFull
     * @return \ArrayType\ArrayOfAcsEmployeeFull
     */
    public function setAcsEmployeeFull(array $acsEmployeeFull = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsEmployeeFullArrayErrorMessage = self::validateAcsEmployeeFullForArrayConstraintsFromSetAcsEmployeeFull($acsEmployeeFull))) {
            throw new InvalidArgumentException($acsEmployeeFullArrayErrorMessage, __LINE__);
        }
        if (is_null($acsEmployeeFull) || (is_array($acsEmployeeFull) && empty($acsEmployeeFull))) {
            unset($this->AcsEmployeeFull);
        } else {
            $this->AcsEmployeeFull = $acsEmployeeFull;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsEmployeeFull|null
     */
    public function current(): ?\StructType\AcsEmployeeFull
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsEmployeeFull|null
     */
    public function item($index): ?\StructType\AcsEmployeeFull
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsEmployeeFull|null
     */
    public function first(): ?\StructType\AcsEmployeeFull
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsEmployeeFull|null
     */
    public function last(): ?\StructType\AcsEmployeeFull
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsEmployeeFull|null
     */
    public function offsetGet($offset): ?\StructType\AcsEmployeeFull
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeFull $item
     * @return \ArrayType\ArrayOfAcsEmployeeFull
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsEmployeeFull) {
            throw new InvalidArgumentException(sprintf('The AcsEmployeeFull property can only contain items of type \StructType\AcsEmployeeFull, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsEmployeeFull
     */
    public function getAttributeName(): string
    {
        return 'AcsEmployeeFull';
    }
}
