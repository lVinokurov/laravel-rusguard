<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsBoxAccessElementSaveInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsBoxAccessElementSaveInfo
 * @subpackage Arrays
 */
class ArrayOfAcsBoxAccessElementSaveInfo extends AbstractStructArrayBase
{
    /**
     * The AcsBoxAccessElementSaveInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsBoxAccessElementSaveInfo[]
     */
    protected array $AcsBoxAccessElementSaveInfo = [];
    /**
     * Constructor method for ArrayOfAcsBoxAccessElementSaveInfo
     * @uses ArrayOfAcsBoxAccessElementSaveInfo::setAcsBoxAccessElementSaveInfo()
     * @param \StructType\AcsBoxAccessElementSaveInfo[] $acsBoxAccessElementSaveInfo
     */
    public function __construct(array $acsBoxAccessElementSaveInfo = [])
    {
        $this
            ->setAcsBoxAccessElementSaveInfo($acsBoxAccessElementSaveInfo);
    }
    /**
     * Get AcsBoxAccessElementSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsBoxAccessElementSaveInfo[]
     */
    public function getAcsBoxAccessElementSaveInfo(): ?array
    {
        return isset($this->AcsBoxAccessElementSaveInfo) ? $this->AcsBoxAccessElementSaveInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsBoxAccessElementSaveInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsBoxAccessElementSaveInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsBoxAccessElementSaveInfoForArrayConstraintsFromSetAcsBoxAccessElementSaveInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsBoxAccessElementSaveInfoAcsBoxAccessElementSaveInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsBoxAccessElementSaveInfoAcsBoxAccessElementSaveInfoItem instanceof \StructType\AcsBoxAccessElementSaveInfo) {
                $invalidValues[] = is_object($arrayOfAcsBoxAccessElementSaveInfoAcsBoxAccessElementSaveInfoItem) ? get_class($arrayOfAcsBoxAccessElementSaveInfoAcsBoxAccessElementSaveInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsBoxAccessElementSaveInfoAcsBoxAccessElementSaveInfoItem), var_export($arrayOfAcsBoxAccessElementSaveInfoAcsBoxAccessElementSaveInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsBoxAccessElementSaveInfo property can only contain items of type \StructType\AcsBoxAccessElementSaveInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsBoxAccessElementSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsBoxAccessElementSaveInfo[] $acsBoxAccessElementSaveInfo
     * @return \ArrayType\ArrayOfAcsBoxAccessElementSaveInfo
     */
    public function setAcsBoxAccessElementSaveInfo(array $acsBoxAccessElementSaveInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsBoxAccessElementSaveInfoArrayErrorMessage = self::validateAcsBoxAccessElementSaveInfoForArrayConstraintsFromSetAcsBoxAccessElementSaveInfo($acsBoxAccessElementSaveInfo))) {
            throw new InvalidArgumentException($acsBoxAccessElementSaveInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsBoxAccessElementSaveInfo) || (is_array($acsBoxAccessElementSaveInfo) && empty($acsBoxAccessElementSaveInfo))) {
            unset($this->AcsBoxAccessElementSaveInfo);
        } else {
            $this->AcsBoxAccessElementSaveInfo = $acsBoxAccessElementSaveInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsBoxAccessElementSaveInfo|null
     */
    public function current(): ?\StructType\AcsBoxAccessElementSaveInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsBoxAccessElementSaveInfo|null
     */
    public function item($index): ?\StructType\AcsBoxAccessElementSaveInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsBoxAccessElementSaveInfo|null
     */
    public function first(): ?\StructType\AcsBoxAccessElementSaveInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsBoxAccessElementSaveInfo|null
     */
    public function last(): ?\StructType\AcsBoxAccessElementSaveInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsBoxAccessElementSaveInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsBoxAccessElementSaveInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsBoxAccessElementSaveInfo $item
     * @return \ArrayType\ArrayOfAcsBoxAccessElementSaveInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsBoxAccessElementSaveInfo) {
            throw new InvalidArgumentException(sprintf('The AcsBoxAccessElementSaveInfo property can only contain items of type \StructType\AcsBoxAccessElementSaveInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsBoxAccessElementSaveInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsBoxAccessElementSaveInfo';
    }
}
