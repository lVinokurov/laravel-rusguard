<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReactionActionSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfReactionActionSlimInfo
 * @subpackage Arrays
 */
class ArrayOfReactionActionSlimInfo extends AbstractStructArrayBase
{
    /**
     * The ReactionActionSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionActionSlimInfo[]
     */
    protected array $ReactionActionSlimInfo = [];
    /**
     * Constructor method for ArrayOfReactionActionSlimInfo
     * @uses ArrayOfReactionActionSlimInfo::setReactionActionSlimInfo()
     * @param \StructType\ReactionActionSlimInfo[] $reactionActionSlimInfo
     */
    public function __construct(array $reactionActionSlimInfo = [])
    {
        $this
            ->setReactionActionSlimInfo($reactionActionSlimInfo);
    }
    /**
     * Get ReactionActionSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionActionSlimInfo[]
     */
    public function getReactionActionSlimInfo(): ?array
    {
        return isset($this->ReactionActionSlimInfo) ? $this->ReactionActionSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setReactionActionSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReactionActionSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReactionActionSlimInfoForArrayConstraintsFromSetReactionActionSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfReactionActionSlimInfoReactionActionSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfReactionActionSlimInfoReactionActionSlimInfoItem instanceof \StructType\ReactionActionSlimInfo) {
                $invalidValues[] = is_object($arrayOfReactionActionSlimInfoReactionActionSlimInfoItem) ? get_class($arrayOfReactionActionSlimInfoReactionActionSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfReactionActionSlimInfoReactionActionSlimInfoItem), var_export($arrayOfReactionActionSlimInfoReactionActionSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReactionActionSlimInfo property can only contain items of type \StructType\ReactionActionSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReactionActionSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ReactionActionSlimInfo[] $reactionActionSlimInfo
     * @return \ArrayType\ArrayOfReactionActionSlimInfo
     */
    public function setReactionActionSlimInfo(array $reactionActionSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($reactionActionSlimInfoArrayErrorMessage = self::validateReactionActionSlimInfoForArrayConstraintsFromSetReactionActionSlimInfo($reactionActionSlimInfo))) {
            throw new InvalidArgumentException($reactionActionSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($reactionActionSlimInfo) || (is_array($reactionActionSlimInfo) && empty($reactionActionSlimInfo))) {
            unset($this->ReactionActionSlimInfo);
        } else {
            $this->ReactionActionSlimInfo = $reactionActionSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ReactionActionSlimInfo|null
     */
    public function current(): ?\StructType\ReactionActionSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ReactionActionSlimInfo|null
     */
    public function item($index): ?\StructType\ReactionActionSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ReactionActionSlimInfo|null
     */
    public function first(): ?\StructType\ReactionActionSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ReactionActionSlimInfo|null
     */
    public function last(): ?\StructType\ReactionActionSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ReactionActionSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ReactionActionSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ReactionActionSlimInfo $item
     * @return \ArrayType\ArrayOfReactionActionSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ReactionActionSlimInfo) {
            throw new InvalidArgumentException(sprintf('The ReactionActionSlimInfo property can only contain items of type \StructType\ReactionActionSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ReactionActionSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'ReactionActionSlimInfo';
    }
}
