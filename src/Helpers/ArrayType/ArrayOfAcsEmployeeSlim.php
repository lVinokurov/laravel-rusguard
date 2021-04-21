<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsEmployeeSlim ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsEmployeeSlim
 * @subpackage Arrays
 */
class ArrayOfAcsEmployeeSlim extends AbstractStructArrayBase
{
    /**
     * The AcsEmployeeSlim
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeSlim[]
     */
    protected array $AcsEmployeeSlim = [];
    /**
     * Constructor method for ArrayOfAcsEmployeeSlim
     * @uses ArrayOfAcsEmployeeSlim::setAcsEmployeeSlim()
     * @param \StructType\AcsEmployeeSlim[] $acsEmployeeSlim
     */
    public function __construct(array $acsEmployeeSlim = [])
    {
        $this
            ->setAcsEmployeeSlim($acsEmployeeSlim);
    }
    /**
     * Get AcsEmployeeSlim value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeSlim[]
     */
    public function getAcsEmployeeSlim(): ?array
    {
        return isset($this->AcsEmployeeSlim) ? $this->AcsEmployeeSlim : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsEmployeeSlim method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsEmployeeSlim method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsEmployeeSlimForArrayConstraintsFromSetAcsEmployeeSlim(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsEmployeeSlimAcsEmployeeSlimItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsEmployeeSlimAcsEmployeeSlimItem instanceof \StructType\AcsEmployeeSlim) {
                $invalidValues[] = is_object($arrayOfAcsEmployeeSlimAcsEmployeeSlimItem) ? get_class($arrayOfAcsEmployeeSlimAcsEmployeeSlimItem) : sprintf('%s(%s)', gettype($arrayOfAcsEmployeeSlimAcsEmployeeSlimItem), var_export($arrayOfAcsEmployeeSlimAcsEmployeeSlimItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsEmployeeSlim property can only contain items of type \StructType\AcsEmployeeSlim, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsEmployeeSlim value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeSlim[] $acsEmployeeSlim
     * @return \ArrayType\ArrayOfAcsEmployeeSlim
     */
    public function setAcsEmployeeSlim(array $acsEmployeeSlim = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsEmployeeSlimArrayErrorMessage = self::validateAcsEmployeeSlimForArrayConstraintsFromSetAcsEmployeeSlim($acsEmployeeSlim))) {
            throw new InvalidArgumentException($acsEmployeeSlimArrayErrorMessage, __LINE__);
        }
        if (is_null($acsEmployeeSlim) || (is_array($acsEmployeeSlim) && empty($acsEmployeeSlim))) {
            unset($this->AcsEmployeeSlim);
        } else {
            $this->AcsEmployeeSlim = $acsEmployeeSlim;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsEmployeeSlim|null
     */
    public function current(): ?\StructType\AcsEmployeeSlim
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsEmployeeSlim|null
     */
    public function item($index): ?\StructType\AcsEmployeeSlim
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsEmployeeSlim|null
     */
    public function first(): ?\StructType\AcsEmployeeSlim
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsEmployeeSlim|null
     */
    public function last(): ?\StructType\AcsEmployeeSlim
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsEmployeeSlim|null
     */
    public function offsetGet($offset): ?\StructType\AcsEmployeeSlim
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeSlim $item
     * @return \ArrayType\ArrayOfAcsEmployeeSlim
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsEmployeeSlim) {
            throw new InvalidArgumentException(sprintf('The AcsEmployeeSlim property can only contain items of type \StructType\AcsEmployeeSlim, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsEmployeeSlim
     */
    public function getAttributeName(): string
    {
        return 'AcsEmployeeSlim';
    }
}
