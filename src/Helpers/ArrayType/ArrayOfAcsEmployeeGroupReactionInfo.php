<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsEmployeeGroupReactionInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsEmployeeGroupReactionInfo
 * @subpackage Arrays
 */
class ArrayOfAcsEmployeeGroupReactionInfo extends AbstractStructArrayBase
{
    /**
     * The AcsEmployeeGroupReactionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeGroupReactionInfo[]
     */
    protected array $AcsEmployeeGroupReactionInfo = [];
    /**
     * Constructor method for ArrayOfAcsEmployeeGroupReactionInfo
     * @uses ArrayOfAcsEmployeeGroupReactionInfo::setAcsEmployeeGroupReactionInfo()
     * @param \StructType\AcsEmployeeGroupReactionInfo[] $acsEmployeeGroupReactionInfo
     */
    public function __construct(array $acsEmployeeGroupReactionInfo = [])
    {
        $this
            ->setAcsEmployeeGroupReactionInfo($acsEmployeeGroupReactionInfo);
    }
    /**
     * Get AcsEmployeeGroupReactionInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeGroupReactionInfo[]
     */
    public function getAcsEmployeeGroupReactionInfo(): ?array
    {
        return isset($this->AcsEmployeeGroupReactionInfo) ? $this->AcsEmployeeGroupReactionInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsEmployeeGroupReactionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsEmployeeGroupReactionInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsEmployeeGroupReactionInfoForArrayConstraintsFromSetAcsEmployeeGroupReactionInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsEmployeeGroupReactionInfoAcsEmployeeGroupReactionInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsEmployeeGroupReactionInfoAcsEmployeeGroupReactionInfoItem instanceof \StructType\AcsEmployeeGroupReactionInfo) {
                $invalidValues[] = is_object($arrayOfAcsEmployeeGroupReactionInfoAcsEmployeeGroupReactionInfoItem) ? get_class($arrayOfAcsEmployeeGroupReactionInfoAcsEmployeeGroupReactionInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsEmployeeGroupReactionInfoAcsEmployeeGroupReactionInfoItem), var_export($arrayOfAcsEmployeeGroupReactionInfoAcsEmployeeGroupReactionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsEmployeeGroupReactionInfo property can only contain items of type \StructType\AcsEmployeeGroupReactionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsEmployeeGroupReactionInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeGroupReactionInfo[] $acsEmployeeGroupReactionInfo
     * @return \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo
     */
    public function setAcsEmployeeGroupReactionInfo(array $acsEmployeeGroupReactionInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsEmployeeGroupReactionInfoArrayErrorMessage = self::validateAcsEmployeeGroupReactionInfoForArrayConstraintsFromSetAcsEmployeeGroupReactionInfo($acsEmployeeGroupReactionInfo))) {
            throw new InvalidArgumentException($acsEmployeeGroupReactionInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsEmployeeGroupReactionInfo) || (is_array($acsEmployeeGroupReactionInfo) && empty($acsEmployeeGroupReactionInfo))) {
            unset($this->AcsEmployeeGroupReactionInfo);
        } else {
            $this->AcsEmployeeGroupReactionInfo = $acsEmployeeGroupReactionInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsEmployeeGroupReactionInfo|null
     */
    public function current(): ?\StructType\AcsEmployeeGroupReactionInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsEmployeeGroupReactionInfo|null
     */
    public function item($index): ?\StructType\AcsEmployeeGroupReactionInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsEmployeeGroupReactionInfo|null
     */
    public function first(): ?\StructType\AcsEmployeeGroupReactionInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsEmployeeGroupReactionInfo|null
     */
    public function last(): ?\StructType\AcsEmployeeGroupReactionInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsEmployeeGroupReactionInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsEmployeeGroupReactionInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeGroupReactionInfo $item
     * @return \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsEmployeeGroupReactionInfo) {
            throw new InvalidArgumentException(sprintf('The AcsEmployeeGroupReactionInfo property can only contain items of type \StructType\AcsEmployeeGroupReactionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsEmployeeGroupReactionInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsEmployeeGroupReactionInfo';
    }
}
