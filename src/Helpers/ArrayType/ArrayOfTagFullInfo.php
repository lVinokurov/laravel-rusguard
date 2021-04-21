<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTagFullInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTagFullInfo
 * @subpackage Arrays
 */
class ArrayOfTagFullInfo extends AbstractStructArrayBase
{
    /**
     * The TagFullInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TagFullInfo[]
     */
    protected array $TagFullInfo = [];
    /**
     * Constructor method for ArrayOfTagFullInfo
     * @uses ArrayOfTagFullInfo::setTagFullInfo()
     * @param \StructType\TagFullInfo[] $tagFullInfo
     */
    public function __construct(array $tagFullInfo = [])
    {
        $this
            ->setTagFullInfo($tagFullInfo);
    }
    /**
     * Get TagFullInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TagFullInfo[]
     */
    public function getTagFullInfo(): ?array
    {
        return isset($this->TagFullInfo) ? $this->TagFullInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTagFullInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTagFullInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTagFullInfoForArrayConstraintsFromSetTagFullInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTagFullInfoTagFullInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTagFullInfoTagFullInfoItem instanceof \StructType\TagFullInfo) {
                $invalidValues[] = is_object($arrayOfTagFullInfoTagFullInfoItem) ? get_class($arrayOfTagFullInfoTagFullInfoItem) : sprintf('%s(%s)', gettype($arrayOfTagFullInfoTagFullInfoItem), var_export($arrayOfTagFullInfoTagFullInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TagFullInfo property can only contain items of type \StructType\TagFullInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TagFullInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\TagFullInfo[] $tagFullInfo
     * @return \ArrayType\ArrayOfTagFullInfo
     */
    public function setTagFullInfo(array $tagFullInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($tagFullInfoArrayErrorMessage = self::validateTagFullInfoForArrayConstraintsFromSetTagFullInfo($tagFullInfo))) {
            throw new InvalidArgumentException($tagFullInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($tagFullInfo) || (is_array($tagFullInfo) && empty($tagFullInfo))) {
            unset($this->TagFullInfo);
        } else {
            $this->TagFullInfo = $tagFullInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TagFullInfo|null
     */
    public function current(): ?\StructType\TagFullInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TagFullInfo|null
     */
    public function item($index): ?\StructType\TagFullInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TagFullInfo|null
     */
    public function first(): ?\StructType\TagFullInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TagFullInfo|null
     */
    public function last(): ?\StructType\TagFullInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TagFullInfo|null
     */
    public function offsetGet($offset): ?\StructType\TagFullInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\TagFullInfo $item
     * @return \ArrayType\ArrayOfTagFullInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TagFullInfo) {
            throw new InvalidArgumentException(sprintf('The TagFullInfo property can only contain items of type \StructType\TagFullInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TagFullInfo
     */
    public function getAttributeName(): string
    {
        return 'TagFullInfo';
    }
}
