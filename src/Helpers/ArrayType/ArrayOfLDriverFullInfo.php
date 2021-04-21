<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLDriverFullInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLDriverFullInfo
 * @subpackage Arrays
 */
class ArrayOfLDriverFullInfo extends AbstractStructArrayBase
{
    /**
     * The LDriverFullInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LDriverFullInfo[]
     */
    protected array $LDriverFullInfo = [];
    /**
     * Constructor method for ArrayOfLDriverFullInfo
     * @uses ArrayOfLDriverFullInfo::setLDriverFullInfo()
     * @param \StructType\LDriverFullInfo[] $lDriverFullInfo
     */
    public function __construct(array $lDriverFullInfo = [])
    {
        $this
            ->setLDriverFullInfo($lDriverFullInfo);
    }
    /**
     * Get LDriverFullInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LDriverFullInfo[]
     */
    public function getLDriverFullInfo(): ?array
    {
        return isset($this->LDriverFullInfo) ? $this->LDriverFullInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLDriverFullInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLDriverFullInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLDriverFullInfoForArrayConstraintsFromSetLDriverFullInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLDriverFullInfoLDriverFullInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfLDriverFullInfoLDriverFullInfoItem instanceof \StructType\LDriverFullInfo) {
                $invalidValues[] = is_object($arrayOfLDriverFullInfoLDriverFullInfoItem) ? get_class($arrayOfLDriverFullInfoLDriverFullInfoItem) : sprintf('%s(%s)', gettype($arrayOfLDriverFullInfoLDriverFullInfoItem), var_export($arrayOfLDriverFullInfoLDriverFullInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LDriverFullInfo property can only contain items of type \StructType\LDriverFullInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LDriverFullInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LDriverFullInfo[] $lDriverFullInfo
     * @return \ArrayType\ArrayOfLDriverFullInfo
     */
    public function setLDriverFullInfo(array $lDriverFullInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($lDriverFullInfoArrayErrorMessage = self::validateLDriverFullInfoForArrayConstraintsFromSetLDriverFullInfo($lDriverFullInfo))) {
            throw new InvalidArgumentException($lDriverFullInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($lDriverFullInfo) || (is_array($lDriverFullInfo) && empty($lDriverFullInfo))) {
            unset($this->LDriverFullInfo);
        } else {
            $this->LDriverFullInfo = $lDriverFullInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LDriverFullInfo|null
     */
    public function current(): ?\StructType\LDriverFullInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LDriverFullInfo|null
     */
    public function item($index): ?\StructType\LDriverFullInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LDriverFullInfo|null
     */
    public function first(): ?\StructType\LDriverFullInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LDriverFullInfo|null
     */
    public function last(): ?\StructType\LDriverFullInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LDriverFullInfo|null
     */
    public function offsetGet($offset): ?\StructType\LDriverFullInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LDriverFullInfo $item
     * @return \ArrayType\ArrayOfLDriverFullInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LDriverFullInfo) {
            throw new InvalidArgumentException(sprintf('The LDriverFullInfo property can only contain items of type \StructType\LDriverFullInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LDriverFullInfo
     */
    public function getAttributeName(): string
    {
        return 'LDriverFullInfo';
    }
}
