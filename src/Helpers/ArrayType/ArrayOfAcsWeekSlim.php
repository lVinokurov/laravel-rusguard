<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsWeekSlim ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsWeekSlim
 * @subpackage Arrays
 */
class ArrayOfAcsWeekSlim extends AbstractStructArrayBase
{
    /**
     * The AcsWeekSlim
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsWeekSlim[]
     */
    protected array $AcsWeekSlim = [];
    /**
     * Constructor method for ArrayOfAcsWeekSlim
     * @uses ArrayOfAcsWeekSlim::setAcsWeekSlim()
     * @param \StructType\AcsWeekSlim[] $acsWeekSlim
     */
    public function __construct(array $acsWeekSlim = [])
    {
        $this
            ->setAcsWeekSlim($acsWeekSlim);
    }
    /**
     * Get AcsWeekSlim value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsWeekSlim[]
     */
    public function getAcsWeekSlim(): ?array
    {
        return isset($this->AcsWeekSlim) ? $this->AcsWeekSlim : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsWeekSlim method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsWeekSlim method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsWeekSlimForArrayConstraintsFromSetAcsWeekSlim(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsWeekSlimAcsWeekSlimItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsWeekSlimAcsWeekSlimItem instanceof \StructType\AcsWeekSlim) {
                $invalidValues[] = is_object($arrayOfAcsWeekSlimAcsWeekSlimItem) ? get_class($arrayOfAcsWeekSlimAcsWeekSlimItem) : sprintf('%s(%s)', gettype($arrayOfAcsWeekSlimAcsWeekSlimItem), var_export($arrayOfAcsWeekSlimAcsWeekSlimItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsWeekSlim property can only contain items of type \StructType\AcsWeekSlim, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsWeekSlim value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsWeekSlim[] $acsWeekSlim
     * @return \ArrayType\ArrayOfAcsWeekSlim
     */
    public function setAcsWeekSlim(array $acsWeekSlim = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsWeekSlimArrayErrorMessage = self::validateAcsWeekSlimForArrayConstraintsFromSetAcsWeekSlim($acsWeekSlim))) {
            throw new InvalidArgumentException($acsWeekSlimArrayErrorMessage, __LINE__);
        }
        if (is_null($acsWeekSlim) || (is_array($acsWeekSlim) && empty($acsWeekSlim))) {
            unset($this->AcsWeekSlim);
        } else {
            $this->AcsWeekSlim = $acsWeekSlim;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsWeekSlim|null
     */
    public function current(): ?\StructType\AcsWeekSlim
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsWeekSlim|null
     */
    public function item($index): ?\StructType\AcsWeekSlim
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsWeekSlim|null
     */
    public function first(): ?\StructType\AcsWeekSlim
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsWeekSlim|null
     */
    public function last(): ?\StructType\AcsWeekSlim
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsWeekSlim|null
     */
    public function offsetGet($offset): ?\StructType\AcsWeekSlim
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsWeekSlim $item
     * @return \ArrayType\ArrayOfAcsWeekSlim
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsWeekSlim) {
            throw new InvalidArgumentException(sprintf('The AcsWeekSlim property can only contain items of type \StructType\AcsWeekSlim, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsWeekSlim
     */
    public function getAttributeName(): string
    {
        return 'AcsWeekSlim';
    }
}
