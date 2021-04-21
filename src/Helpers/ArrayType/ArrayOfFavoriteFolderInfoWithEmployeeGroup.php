<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFavoriteFolderInfoWithEmployeeGroup ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFavoriteFolderInfoWithEmployeeGroup
 * @subpackage Arrays
 */
class ArrayOfFavoriteFolderInfoWithEmployeeGroup extends AbstractStructArrayBase
{
    /**
     * The FavoriteFolderInfoWithEmployeeGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FavoriteFolderInfoWithEmployeeGroup[]
     */
    protected array $FavoriteFolderInfoWithEmployeeGroup = [];
    /**
     * Constructor method for ArrayOfFavoriteFolderInfoWithEmployeeGroup
     * @uses ArrayOfFavoriteFolderInfoWithEmployeeGroup::setFavoriteFolderInfoWithEmployeeGroup()
     * @param \StructType\FavoriteFolderInfoWithEmployeeGroup[] $favoriteFolderInfoWithEmployeeGroup
     */
    public function __construct(array $favoriteFolderInfoWithEmployeeGroup = [])
    {
        $this
            ->setFavoriteFolderInfoWithEmployeeGroup($favoriteFolderInfoWithEmployeeGroup);
    }
    /**
     * Get FavoriteFolderInfoWithEmployeeGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FavoriteFolderInfoWithEmployeeGroup[]
     */
    public function getFavoriteFolderInfoWithEmployeeGroup(): ?array
    {
        return isset($this->FavoriteFolderInfoWithEmployeeGroup) ? $this->FavoriteFolderInfoWithEmployeeGroup : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFavoriteFolderInfoWithEmployeeGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFavoriteFolderInfoWithEmployeeGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFavoriteFolderInfoWithEmployeeGroupForArrayConstraintsFromSetFavoriteFolderInfoWithEmployeeGroup(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFavoriteFolderInfoWithEmployeeGroupFavoriteFolderInfoWithEmployeeGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfFavoriteFolderInfoWithEmployeeGroupFavoriteFolderInfoWithEmployeeGroupItem instanceof \StructType\FavoriteFolderInfoWithEmployeeGroup) {
                $invalidValues[] = is_object($arrayOfFavoriteFolderInfoWithEmployeeGroupFavoriteFolderInfoWithEmployeeGroupItem) ? get_class($arrayOfFavoriteFolderInfoWithEmployeeGroupFavoriteFolderInfoWithEmployeeGroupItem) : sprintf('%s(%s)', gettype($arrayOfFavoriteFolderInfoWithEmployeeGroupFavoriteFolderInfoWithEmployeeGroupItem), var_export($arrayOfFavoriteFolderInfoWithEmployeeGroupFavoriteFolderInfoWithEmployeeGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FavoriteFolderInfoWithEmployeeGroup property can only contain items of type \StructType\FavoriteFolderInfoWithEmployeeGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FavoriteFolderInfoWithEmployeeGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\FavoriteFolderInfoWithEmployeeGroup[] $favoriteFolderInfoWithEmployeeGroup
     * @return \ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup
     */
    public function setFavoriteFolderInfoWithEmployeeGroup(array $favoriteFolderInfoWithEmployeeGroup = []): self
    {
        // validation for constraint: array
        if ('' !== ($favoriteFolderInfoWithEmployeeGroupArrayErrorMessage = self::validateFavoriteFolderInfoWithEmployeeGroupForArrayConstraintsFromSetFavoriteFolderInfoWithEmployeeGroup($favoriteFolderInfoWithEmployeeGroup))) {
            throw new InvalidArgumentException($favoriteFolderInfoWithEmployeeGroupArrayErrorMessage, __LINE__);
        }
        if (is_null($favoriteFolderInfoWithEmployeeGroup) || (is_array($favoriteFolderInfoWithEmployeeGroup) && empty($favoriteFolderInfoWithEmployeeGroup))) {
            unset($this->FavoriteFolderInfoWithEmployeeGroup);
        } else {
            $this->FavoriteFolderInfoWithEmployeeGroup = $favoriteFolderInfoWithEmployeeGroup;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\FavoriteFolderInfoWithEmployeeGroup|null
     */
    public function current(): ?\StructType\FavoriteFolderInfoWithEmployeeGroup
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\FavoriteFolderInfoWithEmployeeGroup|null
     */
    public function item($index): ?\StructType\FavoriteFolderInfoWithEmployeeGroup
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\FavoriteFolderInfoWithEmployeeGroup|null
     */
    public function first(): ?\StructType\FavoriteFolderInfoWithEmployeeGroup
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\FavoriteFolderInfoWithEmployeeGroup|null
     */
    public function last(): ?\StructType\FavoriteFolderInfoWithEmployeeGroup
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\FavoriteFolderInfoWithEmployeeGroup|null
     */
    public function offsetGet($offset): ?\StructType\FavoriteFolderInfoWithEmployeeGroup
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\FavoriteFolderInfoWithEmployeeGroup $item
     * @return \ArrayType\ArrayOfFavoriteFolderInfoWithEmployeeGroup
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FavoriteFolderInfoWithEmployeeGroup) {
            throw new InvalidArgumentException(sprintf('The FavoriteFolderInfoWithEmployeeGroup property can only contain items of type \StructType\FavoriteFolderInfoWithEmployeeGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FavoriteFolderInfoWithEmployeeGroup
     */
    public function getAttributeName(): string
    {
        return 'FavoriteFolderInfoWithEmployeeGroup';
    }
}
