<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFavoriteFolderInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFavoriteFolderInfo
 * @subpackage Arrays
 */
class ArrayOfFavoriteFolderInfo extends AbstractStructArrayBase
{
    /**
     * The FavoriteFolderInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FavoriteFolderInfo[]
     */
    protected array $FavoriteFolderInfo = [];
    /**
     * Constructor method for ArrayOfFavoriteFolderInfo
     * @uses ArrayOfFavoriteFolderInfo::setFavoriteFolderInfo()
     * @param \StructType\FavoriteFolderInfo[] $favoriteFolderInfo
     */
    public function __construct(array $favoriteFolderInfo = [])
    {
        $this
            ->setFavoriteFolderInfo($favoriteFolderInfo);
    }
    /**
     * Get FavoriteFolderInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FavoriteFolderInfo[]
     */
    public function getFavoriteFolderInfo(): ?array
    {
        return isset($this->FavoriteFolderInfo) ? $this->FavoriteFolderInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFavoriteFolderInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFavoriteFolderInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFavoriteFolderInfoForArrayConstraintsFromSetFavoriteFolderInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFavoriteFolderInfoFavoriteFolderInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfFavoriteFolderInfoFavoriteFolderInfoItem instanceof \StructType\FavoriteFolderInfo) {
                $invalidValues[] = is_object($arrayOfFavoriteFolderInfoFavoriteFolderInfoItem) ? get_class($arrayOfFavoriteFolderInfoFavoriteFolderInfoItem) : sprintf('%s(%s)', gettype($arrayOfFavoriteFolderInfoFavoriteFolderInfoItem), var_export($arrayOfFavoriteFolderInfoFavoriteFolderInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FavoriteFolderInfo property can only contain items of type \StructType\FavoriteFolderInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FavoriteFolderInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\FavoriteFolderInfo[] $favoriteFolderInfo
     * @return \ArrayType\ArrayOfFavoriteFolderInfo
     */
    public function setFavoriteFolderInfo(array $favoriteFolderInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($favoriteFolderInfoArrayErrorMessage = self::validateFavoriteFolderInfoForArrayConstraintsFromSetFavoriteFolderInfo($favoriteFolderInfo))) {
            throw new InvalidArgumentException($favoriteFolderInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($favoriteFolderInfo) || (is_array($favoriteFolderInfo) && empty($favoriteFolderInfo))) {
            unset($this->FavoriteFolderInfo);
        } else {
            $this->FavoriteFolderInfo = $favoriteFolderInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function current(): ?\StructType\FavoriteFolderInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function item($index): ?\StructType\FavoriteFolderInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function first(): ?\StructType\FavoriteFolderInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function last(): ?\StructType\FavoriteFolderInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function offsetGet($offset): ?\StructType\FavoriteFolderInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\FavoriteFolderInfo $item
     * @return \ArrayType\ArrayOfFavoriteFolderInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FavoriteFolderInfo) {
            throw new InvalidArgumentException(sprintf('The FavoriteFolderInfo property can only contain items of type \StructType\FavoriteFolderInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FavoriteFolderInfo
     */
    public function getAttributeName(): string
    {
        return 'FavoriteFolderInfo';
    }
}
