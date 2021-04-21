<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserPassSlimData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfUserPassSlimData
 * @subpackage Arrays
 */
class ArrayOfUserPassSlimData extends AbstractStructArrayBase
{
    /**
     * The UserPassSlimData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\UserPassSlimData[]
     */
    protected array $UserPassSlimData = [];
    /**
     * Constructor method for ArrayOfUserPassSlimData
     * @uses ArrayOfUserPassSlimData::setUserPassSlimData()
     * @param \StructType\UserPassSlimData[] $userPassSlimData
     */
    public function __construct(array $userPassSlimData = [])
    {
        $this
            ->setUserPassSlimData($userPassSlimData);
    }
    /**
     * Get UserPassSlimData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\UserPassSlimData[]
     */
    public function getUserPassSlimData(): ?array
    {
        return isset($this->UserPassSlimData) ? $this->UserPassSlimData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUserPassSlimData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserPassSlimData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserPassSlimDataForArrayConstraintsFromSetUserPassSlimData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserPassSlimDataUserPassSlimDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserPassSlimDataUserPassSlimDataItem instanceof \StructType\UserPassSlimData) {
                $invalidValues[] = is_object($arrayOfUserPassSlimDataUserPassSlimDataItem) ? get_class($arrayOfUserPassSlimDataUserPassSlimDataItem) : sprintf('%s(%s)', gettype($arrayOfUserPassSlimDataUserPassSlimDataItem), var_export($arrayOfUserPassSlimDataUserPassSlimDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserPassSlimData property can only contain items of type \StructType\UserPassSlimData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UserPassSlimData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\UserPassSlimData[] $userPassSlimData
     * @return \ArrayType\ArrayOfUserPassSlimData
     */
    public function setUserPassSlimData(array $userPassSlimData = []): self
    {
        // validation for constraint: array
        if ('' !== ($userPassSlimDataArrayErrorMessage = self::validateUserPassSlimDataForArrayConstraintsFromSetUserPassSlimData($userPassSlimData))) {
            throw new InvalidArgumentException($userPassSlimDataArrayErrorMessage, __LINE__);
        }
        if (is_null($userPassSlimData) || (is_array($userPassSlimData) && empty($userPassSlimData))) {
            unset($this->UserPassSlimData);
        } else {
            $this->UserPassSlimData = $userPassSlimData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\UserPassSlimData|null
     */
    public function current(): ?\StructType\UserPassSlimData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\UserPassSlimData|null
     */
    public function item($index): ?\StructType\UserPassSlimData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\UserPassSlimData|null
     */
    public function first(): ?\StructType\UserPassSlimData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\UserPassSlimData|null
     */
    public function last(): ?\StructType\UserPassSlimData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\UserPassSlimData|null
     */
    public function offsetGet($offset): ?\StructType\UserPassSlimData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\UserPassSlimData $item
     * @return \ArrayType\ArrayOfUserPassSlimData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UserPassSlimData) {
            throw new InvalidArgumentException(sprintf('The UserPassSlimData property can only contain items of type \StructType\UserPassSlimData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserPassSlimData
     */
    public function getAttributeName(): string
    {
        return 'UserPassSlimData';
    }
}
