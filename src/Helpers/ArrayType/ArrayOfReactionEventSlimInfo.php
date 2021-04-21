<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReactionEventSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfReactionEventSlimInfo
 * @subpackage Arrays
 */
class ArrayOfReactionEventSlimInfo extends AbstractStructArrayBase
{
    /**
     * The ReactionEventSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionEventSlimInfo[]
     */
    protected array $ReactionEventSlimInfo = [];
    /**
     * Constructor method for ArrayOfReactionEventSlimInfo
     * @uses ArrayOfReactionEventSlimInfo::setReactionEventSlimInfo()
     * @param \StructType\ReactionEventSlimInfo[] $reactionEventSlimInfo
     */
    public function __construct(array $reactionEventSlimInfo = [])
    {
        $this
            ->setReactionEventSlimInfo($reactionEventSlimInfo);
    }
    /**
     * Get ReactionEventSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionEventSlimInfo[]
     */
    public function getReactionEventSlimInfo(): ?array
    {
        return isset($this->ReactionEventSlimInfo) ? $this->ReactionEventSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setReactionEventSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReactionEventSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReactionEventSlimInfoForArrayConstraintsFromSetReactionEventSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfReactionEventSlimInfoReactionEventSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfReactionEventSlimInfoReactionEventSlimInfoItem instanceof \StructType\ReactionEventSlimInfo) {
                $invalidValues[] = is_object($arrayOfReactionEventSlimInfoReactionEventSlimInfoItem) ? get_class($arrayOfReactionEventSlimInfoReactionEventSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfReactionEventSlimInfoReactionEventSlimInfoItem), var_export($arrayOfReactionEventSlimInfoReactionEventSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReactionEventSlimInfo property can only contain items of type \StructType\ReactionEventSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReactionEventSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ReactionEventSlimInfo[] $reactionEventSlimInfo
     * @return \ArrayType\ArrayOfReactionEventSlimInfo
     */
    public function setReactionEventSlimInfo(array $reactionEventSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($reactionEventSlimInfoArrayErrorMessage = self::validateReactionEventSlimInfoForArrayConstraintsFromSetReactionEventSlimInfo($reactionEventSlimInfo))) {
            throw new InvalidArgumentException($reactionEventSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($reactionEventSlimInfo) || (is_array($reactionEventSlimInfo) && empty($reactionEventSlimInfo))) {
            unset($this->ReactionEventSlimInfo);
        } else {
            $this->ReactionEventSlimInfo = $reactionEventSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ReactionEventSlimInfo|null
     */
    public function current(): ?\StructType\ReactionEventSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ReactionEventSlimInfo|null
     */
    public function item($index): ?\StructType\ReactionEventSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ReactionEventSlimInfo|null
     */
    public function first(): ?\StructType\ReactionEventSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ReactionEventSlimInfo|null
     */
    public function last(): ?\StructType\ReactionEventSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ReactionEventSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ReactionEventSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ReactionEventSlimInfo $item
     * @return \ArrayType\ArrayOfReactionEventSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReactionEventSlimInfo) {
            throw new InvalidArgumentException(sprintf('The ReactionEventSlimInfo property can only contain items of type \StructType\ReactionEventSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ReactionEventSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'ReactionEventSlimInfo';
    }
}
