<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfScreenCellTreeInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfScreenCellTreeInfo
 * @subpackage Arrays
 */
class ArrayOfScreenCellTreeInfo extends AbstractStructArrayBase
{
    /**
     * The ScreenCellTreeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ScreenCellTreeInfo[]
     */
    protected array $ScreenCellTreeInfo = [];
    /**
     * Constructor method for ArrayOfScreenCellTreeInfo
     * @uses ArrayOfScreenCellTreeInfo::setScreenCellTreeInfo()
     * @param \StructType\ScreenCellTreeInfo[] $screenCellTreeInfo
     */
    public function __construct(array $screenCellTreeInfo = [])
    {
        $this
            ->setScreenCellTreeInfo($screenCellTreeInfo);
    }
    /**
     * Get ScreenCellTreeInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ScreenCellTreeInfo[]
     */
    public function getScreenCellTreeInfo(): ?array
    {
        return isset($this->ScreenCellTreeInfo) ? $this->ScreenCellTreeInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setScreenCellTreeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScreenCellTreeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScreenCellTreeInfoForArrayConstraintsFromSetScreenCellTreeInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfScreenCellTreeInfoScreenCellTreeInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfScreenCellTreeInfoScreenCellTreeInfoItem instanceof \StructType\ScreenCellTreeInfo) {
                $invalidValues[] = is_object($arrayOfScreenCellTreeInfoScreenCellTreeInfoItem) ? get_class($arrayOfScreenCellTreeInfoScreenCellTreeInfoItem) : sprintf('%s(%s)', gettype($arrayOfScreenCellTreeInfoScreenCellTreeInfoItem), var_export($arrayOfScreenCellTreeInfoScreenCellTreeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ScreenCellTreeInfo property can only contain items of type \StructType\ScreenCellTreeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ScreenCellTreeInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ScreenCellTreeInfo[] $screenCellTreeInfo
     * @return \ArrayType\ArrayOfScreenCellTreeInfo
     */
    public function setScreenCellTreeInfo(array $screenCellTreeInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($screenCellTreeInfoArrayErrorMessage = self::validateScreenCellTreeInfoForArrayConstraintsFromSetScreenCellTreeInfo($screenCellTreeInfo))) {
            throw new InvalidArgumentException($screenCellTreeInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($screenCellTreeInfo) || (is_array($screenCellTreeInfo) && empty($screenCellTreeInfo))) {
            unset($this->ScreenCellTreeInfo);
        } else {
            $this->ScreenCellTreeInfo = $screenCellTreeInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ScreenCellTreeInfo|null
     */
    public function current(): ?\StructType\ScreenCellTreeInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ScreenCellTreeInfo|null
     */
    public function item($index): ?\StructType\ScreenCellTreeInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ScreenCellTreeInfo|null
     */
    public function first(): ?\StructType\ScreenCellTreeInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ScreenCellTreeInfo|null
     */
    public function last(): ?\StructType\ScreenCellTreeInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ScreenCellTreeInfo|null
     */
    public function offsetGet($offset): ?\StructType\ScreenCellTreeInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ScreenCellTreeInfo $item
     * @return \ArrayType\ArrayOfScreenCellTreeInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ScreenCellTreeInfo) {
            throw new InvalidArgumentException(sprintf('The ScreenCellTreeInfo property can only contain items of type \StructType\ScreenCellTreeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ScreenCellTreeInfo
     */
    public function getAttributeName(): string
    {
        return 'ScreenCellTreeInfo';
    }
}
