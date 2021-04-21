<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfScreenCellInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfScreenCellInfo
 * @subpackage Arrays
 */
class ArrayOfScreenCellInfo extends AbstractStructArrayBase
{
    /**
     * The ScreenCellInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ScreenCellInfo[]
     */
    protected array $ScreenCellInfo = [];
    /**
     * Constructor method for ArrayOfScreenCellInfo
     * @uses ArrayOfScreenCellInfo::setScreenCellInfo()
     * @param \StructType\ScreenCellInfo[] $screenCellInfo
     */
    public function __construct(array $screenCellInfo = [])
    {
        $this
            ->setScreenCellInfo($screenCellInfo);
    }
    /**
     * Get ScreenCellInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ScreenCellInfo[]
     */
    public function getScreenCellInfo(): ?array
    {
        return isset($this->ScreenCellInfo) ? $this->ScreenCellInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setScreenCellInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScreenCellInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScreenCellInfoForArrayConstraintsFromSetScreenCellInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfScreenCellInfoScreenCellInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfScreenCellInfoScreenCellInfoItem instanceof \StructType\ScreenCellInfo) {
                $invalidValues[] = is_object($arrayOfScreenCellInfoScreenCellInfoItem) ? get_class($arrayOfScreenCellInfoScreenCellInfoItem) : sprintf('%s(%s)', gettype($arrayOfScreenCellInfoScreenCellInfoItem), var_export($arrayOfScreenCellInfoScreenCellInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ScreenCellInfo property can only contain items of type \StructType\ScreenCellInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ScreenCellInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ScreenCellInfo[] $screenCellInfo
     * @return \ArrayType\ArrayOfScreenCellInfo
     */
    public function setScreenCellInfo(array $screenCellInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($screenCellInfoArrayErrorMessage = self::validateScreenCellInfoForArrayConstraintsFromSetScreenCellInfo($screenCellInfo))) {
            throw new InvalidArgumentException($screenCellInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($screenCellInfo) || (is_array($screenCellInfo) && empty($screenCellInfo))) {
            unset($this->ScreenCellInfo);
        } else {
            $this->ScreenCellInfo = $screenCellInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ScreenCellInfo|null
     */
    public function current(): ?\StructType\ScreenCellInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ScreenCellInfo|null
     */
    public function item($index): ?\StructType\ScreenCellInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ScreenCellInfo|null
     */
    public function first(): ?\StructType\ScreenCellInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ScreenCellInfo|null
     */
    public function last(): ?\StructType\ScreenCellInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ScreenCellInfo|null
     */
    public function offsetGet($offset): ?\StructType\ScreenCellInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ScreenCellInfo $item
     * @return \ArrayType\ArrayOfScreenCellInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ScreenCellInfo) {
            throw new InvalidArgumentException(sprintf('The ScreenCellInfo property can only contain items of type \StructType\ScreenCellInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ScreenCellInfo
     */
    public function getAttributeName(): string
    {
        return 'ScreenCellInfo';
    }
}
