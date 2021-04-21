<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBranchInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBranchInfo
 * @subpackage Arrays
 */
class ArrayOfBranchInfo extends AbstractStructArrayBase
{
    /**
     * The BranchInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\BranchInfo[]
     */
    protected array $BranchInfo = [];
    /**
     * Constructor method for ArrayOfBranchInfo
     * @uses ArrayOfBranchInfo::setBranchInfo()
     * @param \StructType\BranchInfo[] $branchInfo
     */
    public function __construct(array $branchInfo = [])
    {
        $this
            ->setBranchInfo($branchInfo);
    }
    /**
     * Get BranchInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\BranchInfo[]
     */
    public function getBranchInfo(): ?array
    {
        return isset($this->BranchInfo) ? $this->BranchInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBranchInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBranchInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBranchInfoForArrayConstraintsFromSetBranchInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBranchInfoBranchInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfBranchInfoBranchInfoItem instanceof \StructType\BranchInfo) {
                $invalidValues[] = is_object($arrayOfBranchInfoBranchInfoItem) ? get_class($arrayOfBranchInfoBranchInfoItem) : sprintf('%s(%s)', gettype($arrayOfBranchInfoBranchInfoItem), var_export($arrayOfBranchInfoBranchInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BranchInfo property can only contain items of type \StructType\BranchInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BranchInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\BranchInfo[] $branchInfo
     * @return \ArrayType\ArrayOfBranchInfo
     */
    public function setBranchInfo(array $branchInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($branchInfoArrayErrorMessage = self::validateBranchInfoForArrayConstraintsFromSetBranchInfo($branchInfo))) {
            throw new InvalidArgumentException($branchInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($branchInfo) || (is_array($branchInfo) && empty($branchInfo))) {
            unset($this->BranchInfo);
        } else {
            $this->BranchInfo = $branchInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\BranchInfo|null
     */
    public function current(): ?\StructType\BranchInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\BranchInfo|null
     */
    public function item($index): ?\StructType\BranchInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\BranchInfo|null
     */
    public function first(): ?\StructType\BranchInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\BranchInfo|null
     */
    public function last(): ?\StructType\BranchInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\BranchInfo|null
     */
    public function offsetGet($offset): ?\StructType\BranchInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\BranchInfo $item
     * @return \ArrayType\ArrayOfBranchInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BranchInfo) {
            throw new InvalidArgumentException(sprintf('The BranchInfo property can only contain items of type \StructType\BranchInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BranchInfo
     */
    public function getAttributeName(): string
    {
        return 'BranchInfo';
    }
}
