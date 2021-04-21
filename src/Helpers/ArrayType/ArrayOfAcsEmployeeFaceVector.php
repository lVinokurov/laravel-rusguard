<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsEmployeeFaceVector ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsEmployeeFaceVector
 * @subpackage Arrays
 */
class ArrayOfAcsEmployeeFaceVector extends AbstractStructArrayBase
{
    /**
     * The AcsEmployeeFaceVector
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeFaceVector[]
     */
    protected array $AcsEmployeeFaceVector = [];
    /**
     * Constructor method for ArrayOfAcsEmployeeFaceVector
     * @uses ArrayOfAcsEmployeeFaceVector::setAcsEmployeeFaceVector()
     * @param \StructType\AcsEmployeeFaceVector[] $acsEmployeeFaceVector
     */
    public function __construct(array $acsEmployeeFaceVector = [])
    {
        $this
            ->setAcsEmployeeFaceVector($acsEmployeeFaceVector);
    }
    /**
     * Get AcsEmployeeFaceVector value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeFaceVector[]
     */
    public function getAcsEmployeeFaceVector(): ?array
    {
        return isset($this->AcsEmployeeFaceVector) ? $this->AcsEmployeeFaceVector : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsEmployeeFaceVector method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsEmployeeFaceVector method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsEmployeeFaceVectorForArrayConstraintsFromSetAcsEmployeeFaceVector(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsEmployeeFaceVectorAcsEmployeeFaceVectorItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsEmployeeFaceVectorAcsEmployeeFaceVectorItem instanceof \StructType\AcsEmployeeFaceVector) {
                $invalidValues[] = is_object($arrayOfAcsEmployeeFaceVectorAcsEmployeeFaceVectorItem) ? get_class($arrayOfAcsEmployeeFaceVectorAcsEmployeeFaceVectorItem) : sprintf('%s(%s)', gettype($arrayOfAcsEmployeeFaceVectorAcsEmployeeFaceVectorItem), var_export($arrayOfAcsEmployeeFaceVectorAcsEmployeeFaceVectorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsEmployeeFaceVector property can only contain items of type \StructType\AcsEmployeeFaceVector, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsEmployeeFaceVector value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeFaceVector[] $acsEmployeeFaceVector
     * @return \ArrayType\ArrayOfAcsEmployeeFaceVector
     */
    public function setAcsEmployeeFaceVector(array $acsEmployeeFaceVector = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsEmployeeFaceVectorArrayErrorMessage = self::validateAcsEmployeeFaceVectorForArrayConstraintsFromSetAcsEmployeeFaceVector($acsEmployeeFaceVector))) {
            throw new InvalidArgumentException($acsEmployeeFaceVectorArrayErrorMessage, __LINE__);
        }
        if (is_null($acsEmployeeFaceVector) || (is_array($acsEmployeeFaceVector) && empty($acsEmployeeFaceVector))) {
            unset($this->AcsEmployeeFaceVector);
        } else {
            $this->AcsEmployeeFaceVector = $acsEmployeeFaceVector;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsEmployeeFaceVector|null
     */
    public function current(): ?\StructType\AcsEmployeeFaceVector
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsEmployeeFaceVector|null
     */
    public function item($index): ?\StructType\AcsEmployeeFaceVector
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsEmployeeFaceVector|null
     */
    public function first(): ?\StructType\AcsEmployeeFaceVector
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsEmployeeFaceVector|null
     */
    public function last(): ?\StructType\AcsEmployeeFaceVector
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsEmployeeFaceVector|null
     */
    public function offsetGet($offset): ?\StructType\AcsEmployeeFaceVector
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeFaceVector $item
     * @return \ArrayType\ArrayOfAcsEmployeeFaceVector
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsEmployeeFaceVector) {
            throw new InvalidArgumentException(sprintf('The AcsEmployeeFaceVector property can only contain items of type \StructType\AcsEmployeeFaceVector, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsEmployeeFaceVector
     */
    public function getAttributeName(): string
    {
        return 'AcsEmployeeFaceVector';
    }
}
