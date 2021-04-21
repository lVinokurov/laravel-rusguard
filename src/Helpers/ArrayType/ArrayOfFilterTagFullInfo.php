<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFilterTagFullInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFilterTagFullInfo
 * @subpackage Arrays
 */
class ArrayOfFilterTagFullInfo extends AbstractStructArrayBase
{
    /**
     * The FilterTagFullInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FilterTagFullInfo[]
     */
    protected array $FilterTagFullInfo = [];
    /**
     * Constructor method for ArrayOfFilterTagFullInfo
     * @uses ArrayOfFilterTagFullInfo::setFilterTagFullInfo()
     * @param \StructType\FilterTagFullInfo[] $filterTagFullInfo
     */
    public function __construct(array $filterTagFullInfo = [])
    {
        $this
            ->setFilterTagFullInfo($filterTagFullInfo);
    }
    /**
     * Get FilterTagFullInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FilterTagFullInfo[]
     */
    public function getFilterTagFullInfo(): ?array
    {
        return isset($this->FilterTagFullInfo) ? $this->FilterTagFullInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFilterTagFullInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilterTagFullInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterTagFullInfoForArrayConstraintsFromSetFilterTagFullInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFilterTagFullInfoFilterTagFullInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfFilterTagFullInfoFilterTagFullInfoItem instanceof \StructType\FilterTagFullInfo) {
                $invalidValues[] = is_object($arrayOfFilterTagFullInfoFilterTagFullInfoItem) ? get_class($arrayOfFilterTagFullInfoFilterTagFullInfoItem) : sprintf('%s(%s)', gettype($arrayOfFilterTagFullInfoFilterTagFullInfoItem), var_export($arrayOfFilterTagFullInfoFilterTagFullInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FilterTagFullInfo property can only contain items of type \StructType\FilterTagFullInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FilterTagFullInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\FilterTagFullInfo[] $filterTagFullInfo
     * @return \ArrayType\ArrayOfFilterTagFullInfo
     */
    public function setFilterTagFullInfo(array $filterTagFullInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($filterTagFullInfoArrayErrorMessage = self::validateFilterTagFullInfoForArrayConstraintsFromSetFilterTagFullInfo($filterTagFullInfo))) {
            throw new InvalidArgumentException($filterTagFullInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($filterTagFullInfo) || (is_array($filterTagFullInfo) && empty($filterTagFullInfo))) {
            unset($this->FilterTagFullInfo);
        } else {
            $this->FilterTagFullInfo = $filterTagFullInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\FilterTagFullInfo|null
     */
    public function current(): ?\StructType\FilterTagFullInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\FilterTagFullInfo|null
     */
    public function item($index): ?\StructType\FilterTagFullInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\FilterTagFullInfo|null
     */
    public function first(): ?\StructType\FilterTagFullInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\FilterTagFullInfo|null
     */
    public function last(): ?\StructType\FilterTagFullInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\FilterTagFullInfo|null
     */
    public function offsetGet($offset): ?\StructType\FilterTagFullInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\FilterTagFullInfo $item
     * @return \ArrayType\ArrayOfFilterTagFullInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FilterTagFullInfo) {
            throw new InvalidArgumentException(sprintf('The FilterTagFullInfo property can only contain items of type \StructType\FilterTagFullInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FilterTagFullInfo
     */
    public function getAttributeName(): string
    {
        return 'FilterTagFullInfo';
    }
}
