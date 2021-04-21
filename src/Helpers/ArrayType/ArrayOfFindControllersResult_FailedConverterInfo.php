<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFindControllersResult.FailedConverterInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFindControllersResult.FailedConverterInfo
 * @subpackage Arrays
 */
class ArrayOfFindControllersResult_FailedConverterInfo extends AbstractStructArrayBase
{
    /**
     * The FindControllersResult_FailedConverterInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FindControllersResult_FailedConverterInfo[]
     */
    protected array $FindControllersResult_FailedConverterInfo = [];
    /**
     * Constructor method for ArrayOfFindControllersResult.FailedConverterInfo
     * @uses ArrayOfFindControllersResult_FailedConverterInfo::setFindControllersResult_FailedConverterInfo()
     * @param \StructType\FindControllersResult_FailedConverterInfo[] $findControllersResult_FailedConverterInfo
     */
    public function __construct(array $findControllersResult_FailedConverterInfo = [])
    {
        $this
            ->setFindControllersResult_FailedConverterInfo($findControllersResult_FailedConverterInfo);
    }
    /**
     * Get FindControllersResult_FailedConverterInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FindControllersResult_FailedConverterInfo[]
     */
    public function getFindControllersResult_FailedConverterInfo(): ?array
    {
        return isset($this->{'FindControllersResult.FailedConverterInfo'}) ? $this->{'FindControllersResult.FailedConverterInfo'} : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFindControllersResult_FailedConverterInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFindControllersResult_FailedConverterInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFindControllersResult_FailedConverterInfoForArrayConstraintsFromSetFindControllersResult_FailedConverterInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFindControllersResult_FailedConverterInfoFindControllersResult_FailedConverterInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfFindControllersResult_FailedConverterInfoFindControllersResult_FailedConverterInfoItem instanceof \StructType\FindControllersResult_FailedConverterInfo) {
                $invalidValues[] = is_object($arrayOfFindControllersResult_FailedConverterInfoFindControllersResult_FailedConverterInfoItem) ? get_class($arrayOfFindControllersResult_FailedConverterInfoFindControllersResult_FailedConverterInfoItem) : sprintf('%s(%s)', gettype($arrayOfFindControllersResult_FailedConverterInfoFindControllersResult_FailedConverterInfoItem), var_export($arrayOfFindControllersResult_FailedConverterInfoFindControllersResult_FailedConverterInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FindControllersResult_FailedConverterInfo property can only contain items of type \StructType\FindControllersResult_FailedConverterInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FindControllersResult_FailedConverterInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\FindControllersResult_FailedConverterInfo[] $findControllersResult_FailedConverterInfo
     * @return \ArrayType\ArrayOfFindControllersResult_FailedConverterInfo
     */
    public function setFindControllersResult_FailedConverterInfo(array $findControllersResult_FailedConverterInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($findControllersResult_FailedConverterInfoArrayErrorMessage = self::validateFindControllersResult_FailedConverterInfoForArrayConstraintsFromSetFindControllersResult_FailedConverterInfo($findControllersResult_FailedConverterInfo))) {
            throw new InvalidArgumentException($findControllersResult_FailedConverterInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($findControllersResult_FailedConverterInfo) || (is_array($findControllersResult_FailedConverterInfo) && empty($findControllersResult_FailedConverterInfo))) {
            unset($this->FindControllersResult_FailedConverterInfo, $this->{'FindControllersResult.FailedConverterInfo'});
        } else {
            $this->FindControllersResult_FailedConverterInfo = $this->{'FindControllersResult.FailedConverterInfo'} = $findControllersResult_FailedConverterInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\FindControllersResult_FailedConverterInfo|null
     */
    public function current(): ?\StructType\FindControllersResult_FailedConverterInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\FindControllersResult_FailedConverterInfo|null
     */
    public function item($index): ?\StructType\FindControllersResult_FailedConverterInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\FindControllersResult_FailedConverterInfo|null
     */
    public function first(): ?\StructType\FindControllersResult_FailedConverterInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\FindControllersResult_FailedConverterInfo|null
     */
    public function last(): ?\StructType\FindControllersResult_FailedConverterInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\FindControllersResult_FailedConverterInfo|null
     */
    public function offsetGet($offset): ?\StructType\FindControllersResult_FailedConverterInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\FindControllersResult_FailedConverterInfo $item
     * @return \ArrayType\ArrayOfFindControllersResult_FailedConverterInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FindControllersResult_FailedConverterInfo) {
            throw new InvalidArgumentException(sprintf('The FindControllersResult_FailedConverterInfo property can only contain items of type \StructType\FindControllersResult_FailedConverterInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FindControllersResult.FailedConverterInfo
     */
    public function getAttributeName(): string
    {
        return 'FindControllersResult.FailedConverterInfo';
    }
}
