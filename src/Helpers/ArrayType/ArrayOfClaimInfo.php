<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfClaimInfo
 * @subpackage Arrays
 */
class ArrayOfClaimInfo extends AbstractStructArrayBase
{
    /**
     * The ClaimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaimInfo[]
     */
    protected array $ClaimInfo = [];
    /**
     * Constructor method for ArrayOfClaimInfo
     * @uses ArrayOfClaimInfo::setClaimInfo()
     * @param \StructType\ClaimInfo[] $claimInfo
     */
    public function __construct(array $claimInfo = [])
    {
        $this
            ->setClaimInfo($claimInfo);
    }
    /**
     * Get ClaimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaimInfo[]
     */
    public function getClaimInfo(): ?array
    {
        return isset($this->ClaimInfo) ? $this->ClaimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setClaimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClaimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClaimInfoForArrayConstraintsFromSetClaimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClaimInfoClaimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaimInfoClaimInfoItem instanceof \StructType\ClaimInfo) {
                $invalidValues[] = is_object($arrayOfClaimInfoClaimInfoItem) ? get_class($arrayOfClaimInfoClaimInfoItem) : sprintf('%s(%s)', gettype($arrayOfClaimInfoClaimInfoItem), var_export($arrayOfClaimInfoClaimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClaimInfo property can only contain items of type \StructType\ClaimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClaimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ClaimInfo[] $claimInfo
     * @return \ArrayType\ArrayOfClaimInfo
     */
    public function setClaimInfo(array $claimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($claimInfoArrayErrorMessage = self::validateClaimInfoForArrayConstraintsFromSetClaimInfo($claimInfo))) {
            throw new InvalidArgumentException($claimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($claimInfo) || (is_array($claimInfo) && empty($claimInfo))) {
            unset($this->ClaimInfo);
        } else {
            $this->ClaimInfo = $claimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ClaimInfo|null
     */
    public function current(): ?\StructType\ClaimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ClaimInfo|null
     */
    public function item($index): ?\StructType\ClaimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ClaimInfo|null
     */
    public function first(): ?\StructType\ClaimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ClaimInfo|null
     */
    public function last(): ?\StructType\ClaimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ClaimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ClaimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ClaimInfo $item
     * @return \ArrayType\ArrayOfClaimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClaimInfo) {
            throw new InvalidArgumentException(sprintf('The ClaimInfo property can only contain items of type \StructType\ClaimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaimInfo
     */
    public function getAttributeName(): string
    {
        return 'ClaimInfo';
    }
}
