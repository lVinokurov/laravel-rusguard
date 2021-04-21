<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsEmployeeFaceVectorFull ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsEmployeeFaceVectorFull
 * @subpackage Arrays
 */
class ArrayOfAcsEmployeeFaceVectorFull extends AbstractStructArrayBase
{
    /**
     * The AcsEmployeeFaceVectorFull
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeFaceVectorFull[]
     */
    protected array $AcsEmployeeFaceVectorFull = [];
    /**
     * Constructor method for ArrayOfAcsEmployeeFaceVectorFull
     * @uses ArrayOfAcsEmployeeFaceVectorFull::setAcsEmployeeFaceVectorFull()
     * @param \StructType\AcsEmployeeFaceVectorFull[] $acsEmployeeFaceVectorFull
     */
    public function __construct(array $acsEmployeeFaceVectorFull = [])
    {
        $this
            ->setAcsEmployeeFaceVectorFull($acsEmployeeFaceVectorFull);
    }
    /**
     * Get AcsEmployeeFaceVectorFull value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeFaceVectorFull[]
     */
    public function getAcsEmployeeFaceVectorFull(): ?array
    {
        return isset($this->AcsEmployeeFaceVectorFull) ? $this->AcsEmployeeFaceVectorFull : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsEmployeeFaceVectorFull method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsEmployeeFaceVectorFull method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsEmployeeFaceVectorFullForArrayConstraintsFromSetAcsEmployeeFaceVectorFull(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsEmployeeFaceVectorFullAcsEmployeeFaceVectorFullItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsEmployeeFaceVectorFullAcsEmployeeFaceVectorFullItem instanceof \StructType\AcsEmployeeFaceVectorFull) {
                $invalidValues[] = is_object($arrayOfAcsEmployeeFaceVectorFullAcsEmployeeFaceVectorFullItem) ? get_class($arrayOfAcsEmployeeFaceVectorFullAcsEmployeeFaceVectorFullItem) : sprintf('%s(%s)', gettype($arrayOfAcsEmployeeFaceVectorFullAcsEmployeeFaceVectorFullItem), var_export($arrayOfAcsEmployeeFaceVectorFullAcsEmployeeFaceVectorFullItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsEmployeeFaceVectorFull property can only contain items of type \StructType\AcsEmployeeFaceVectorFull, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsEmployeeFaceVectorFull value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeFaceVectorFull[] $acsEmployeeFaceVectorFull
     * @return \ArrayType\ArrayOfAcsEmployeeFaceVectorFull
     */
    public function setAcsEmployeeFaceVectorFull(array $acsEmployeeFaceVectorFull = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsEmployeeFaceVectorFullArrayErrorMessage = self::validateAcsEmployeeFaceVectorFullForArrayConstraintsFromSetAcsEmployeeFaceVectorFull($acsEmployeeFaceVectorFull))) {
            throw new InvalidArgumentException($acsEmployeeFaceVectorFullArrayErrorMessage, __LINE__);
        }
        if (is_null($acsEmployeeFaceVectorFull) || (is_array($acsEmployeeFaceVectorFull) && empty($acsEmployeeFaceVectorFull))) {
            unset($this->AcsEmployeeFaceVectorFull);
        } else {
            $this->AcsEmployeeFaceVectorFull = $acsEmployeeFaceVectorFull;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsEmployeeFaceVectorFull|null
     */
    public function current(): ?\StructType\AcsEmployeeFaceVectorFull
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsEmployeeFaceVectorFull|null
     */
    public function item($index): ?\StructType\AcsEmployeeFaceVectorFull
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsEmployeeFaceVectorFull|null
     */
    public function first(): ?\StructType\AcsEmployeeFaceVectorFull
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsEmployeeFaceVectorFull|null
     */
    public function last(): ?\StructType\AcsEmployeeFaceVectorFull
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsEmployeeFaceVectorFull|null
     */
    public function offsetGet($offset): ?\StructType\AcsEmployeeFaceVectorFull
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeFaceVectorFull $item
     * @return \ArrayType\ArrayOfAcsEmployeeFaceVectorFull
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsEmployeeFaceVectorFull) {
            throw new InvalidArgumentException(sprintf('The AcsEmployeeFaceVectorFull property can only contain items of type \StructType\AcsEmployeeFaceVectorFull, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsEmployeeFaceVectorFull
     */
    public function getAttributeName(): string
    {
        return 'AcsEmployeeFaceVectorFull';
    }
}
