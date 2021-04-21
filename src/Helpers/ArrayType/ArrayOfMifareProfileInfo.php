<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMifareProfileInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMifareProfileInfo
 * @subpackage Arrays
 */
class ArrayOfMifareProfileInfo extends AbstractStructArrayBase
{
    /**
     * The MifareProfileInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MifareProfileInfo[]
     */
    protected array $MifareProfileInfo = [];
    /**
     * Constructor method for ArrayOfMifareProfileInfo
     * @uses ArrayOfMifareProfileInfo::setMifareProfileInfo()
     * @param \StructType\MifareProfileInfo[] $mifareProfileInfo
     */
    public function __construct(array $mifareProfileInfo = [])
    {
        $this
            ->setMifareProfileInfo($mifareProfileInfo);
    }
    /**
     * Get MifareProfileInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MifareProfileInfo[]
     */
    public function getMifareProfileInfo(): ?array
    {
        return isset($this->MifareProfileInfo) ? $this->MifareProfileInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setMifareProfileInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMifareProfileInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMifareProfileInfoForArrayConstraintsFromSetMifareProfileInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMifareProfileInfoMifareProfileInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfMifareProfileInfoMifareProfileInfoItem instanceof \StructType\MifareProfileInfo) {
                $invalidValues[] = is_object($arrayOfMifareProfileInfoMifareProfileInfoItem) ? get_class($arrayOfMifareProfileInfoMifareProfileInfoItem) : sprintf('%s(%s)', gettype($arrayOfMifareProfileInfoMifareProfileInfoItem), var_export($arrayOfMifareProfileInfoMifareProfileInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MifareProfileInfo property can only contain items of type \StructType\MifareProfileInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MifareProfileInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\MifareProfileInfo[] $mifareProfileInfo
     * @return \ArrayType\ArrayOfMifareProfileInfo
     */
    public function setMifareProfileInfo(array $mifareProfileInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($mifareProfileInfoArrayErrorMessage = self::validateMifareProfileInfoForArrayConstraintsFromSetMifareProfileInfo($mifareProfileInfo))) {
            throw new InvalidArgumentException($mifareProfileInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($mifareProfileInfo) || (is_array($mifareProfileInfo) && empty($mifareProfileInfo))) {
            unset($this->MifareProfileInfo);
        } else {
            $this->MifareProfileInfo = $mifareProfileInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\MifareProfileInfo|null
     */
    public function current(): ?\StructType\MifareProfileInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\MifareProfileInfo|null
     */
    public function item($index): ?\StructType\MifareProfileInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\MifareProfileInfo|null
     */
    public function first(): ?\StructType\MifareProfileInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\MifareProfileInfo|null
     */
    public function last(): ?\StructType\MifareProfileInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\MifareProfileInfo|null
     */
    public function offsetGet($offset): ?\StructType\MifareProfileInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\MifareProfileInfo $item
     * @return \ArrayType\ArrayOfMifareProfileInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MifareProfileInfo) {
            throw new InvalidArgumentException(sprintf('The MifareProfileInfo property can only contain items of type \StructType\MifareProfileInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MifareProfileInfo
     */
    public function getAttributeName(): string
    {
        return 'MifareProfileInfo';
    }
}
