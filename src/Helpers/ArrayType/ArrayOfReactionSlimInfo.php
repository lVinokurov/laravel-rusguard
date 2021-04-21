<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReactionSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfReactionSlimInfo
 * @subpackage Arrays
 */
class ArrayOfReactionSlimInfo extends AbstractStructArrayBase
{
    /**
     * The ReactionSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionSlimInfo[]
     */
    protected array $ReactionSlimInfo = [];
    /**
     * Constructor method for ArrayOfReactionSlimInfo
     * @uses ArrayOfReactionSlimInfo::setReactionSlimInfo()
     * @param \StructType\ReactionSlimInfo[] $reactionSlimInfo
     */
    public function __construct(array $reactionSlimInfo = [])
    {
        $this
            ->setReactionSlimInfo($reactionSlimInfo);
    }
    /**
     * Get ReactionSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionSlimInfo[]
     */
    public function getReactionSlimInfo(): ?array
    {
        return isset($this->ReactionSlimInfo) ? $this->ReactionSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setReactionSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReactionSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReactionSlimInfoForArrayConstraintsFromSetReactionSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfReactionSlimInfoReactionSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfReactionSlimInfoReactionSlimInfoItem instanceof \StructType\ReactionSlimInfo) {
                $invalidValues[] = is_object($arrayOfReactionSlimInfoReactionSlimInfoItem) ? get_class($arrayOfReactionSlimInfoReactionSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfReactionSlimInfoReactionSlimInfoItem), var_export($arrayOfReactionSlimInfoReactionSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReactionSlimInfo property can only contain items of type \StructType\ReactionSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReactionSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ReactionSlimInfo[] $reactionSlimInfo
     * @return \ArrayType\ArrayOfReactionSlimInfo
     */
    public function setReactionSlimInfo(array $reactionSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($reactionSlimInfoArrayErrorMessage = self::validateReactionSlimInfoForArrayConstraintsFromSetReactionSlimInfo($reactionSlimInfo))) {
            throw new InvalidArgumentException($reactionSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($reactionSlimInfo) || (is_array($reactionSlimInfo) && empty($reactionSlimInfo))) {
            unset($this->ReactionSlimInfo);
        } else {
            $this->ReactionSlimInfo = $reactionSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ReactionSlimInfo|null
     */
    public function current(): ?\StructType\ReactionSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ReactionSlimInfo|null
     */
    public function item($index): ?\StructType\ReactionSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ReactionSlimInfo|null
     */
    public function first(): ?\StructType\ReactionSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ReactionSlimInfo|null
     */
    public function last(): ?\StructType\ReactionSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ReactionSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ReactionSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ReactionSlimInfo $item
     * @return \ArrayType\ArrayOfReactionSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReactionSlimInfo) {
            throw new InvalidArgumentException(sprintf('The ReactionSlimInfo property can only contain items of type \StructType\ReactionSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ReactionSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'ReactionSlimInfo';
    }
}
