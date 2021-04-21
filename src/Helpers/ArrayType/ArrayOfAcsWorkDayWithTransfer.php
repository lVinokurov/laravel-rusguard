<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsWorkDayWithTransfer ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsWorkDayWithTransfer
 * @subpackage Arrays
 */
class ArrayOfAcsWorkDayWithTransfer extends AbstractStructArrayBase
{
    /**
     * The AcsWorkDayWithTransfer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsWorkDayWithTransfer[]
     */
    protected array $AcsWorkDayWithTransfer = [];
    /**
     * Constructor method for ArrayOfAcsWorkDayWithTransfer
     * @uses ArrayOfAcsWorkDayWithTransfer::setAcsWorkDayWithTransfer()
     * @param \StructType\AcsWorkDayWithTransfer[] $acsWorkDayWithTransfer
     */
    public function __construct(array $acsWorkDayWithTransfer = [])
    {
        $this
            ->setAcsWorkDayWithTransfer($acsWorkDayWithTransfer);
    }
    /**
     * Get AcsWorkDayWithTransfer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsWorkDayWithTransfer[]
     */
    public function getAcsWorkDayWithTransfer(): ?array
    {
        return isset($this->AcsWorkDayWithTransfer) ? $this->AcsWorkDayWithTransfer : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsWorkDayWithTransfer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsWorkDayWithTransfer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsWorkDayWithTransferForArrayConstraintsFromSetAcsWorkDayWithTransfer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsWorkDayWithTransferAcsWorkDayWithTransferItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsWorkDayWithTransferAcsWorkDayWithTransferItem instanceof \StructType\AcsWorkDayWithTransfer) {
                $invalidValues[] = is_object($arrayOfAcsWorkDayWithTransferAcsWorkDayWithTransferItem) ? get_class($arrayOfAcsWorkDayWithTransferAcsWorkDayWithTransferItem) : sprintf('%s(%s)', gettype($arrayOfAcsWorkDayWithTransferAcsWorkDayWithTransferItem), var_export($arrayOfAcsWorkDayWithTransferAcsWorkDayWithTransferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsWorkDayWithTransfer property can only contain items of type \StructType\AcsWorkDayWithTransfer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsWorkDayWithTransfer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsWorkDayWithTransfer[] $acsWorkDayWithTransfer
     * @return \ArrayType\ArrayOfAcsWorkDayWithTransfer
     */
    public function setAcsWorkDayWithTransfer(array $acsWorkDayWithTransfer = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsWorkDayWithTransferArrayErrorMessage = self::validateAcsWorkDayWithTransferForArrayConstraintsFromSetAcsWorkDayWithTransfer($acsWorkDayWithTransfer))) {
            throw new InvalidArgumentException($acsWorkDayWithTransferArrayErrorMessage, __LINE__);
        }
        if (is_null($acsWorkDayWithTransfer) || (is_array($acsWorkDayWithTransfer) && empty($acsWorkDayWithTransfer))) {
            unset($this->AcsWorkDayWithTransfer);
        } else {
            $this->AcsWorkDayWithTransfer = $acsWorkDayWithTransfer;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsWorkDayWithTransfer|null
     */
    public function current(): ?\StructType\AcsWorkDayWithTransfer
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsWorkDayWithTransfer|null
     */
    public function item($index): ?\StructType\AcsWorkDayWithTransfer
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsWorkDayWithTransfer|null
     */
    public function first(): ?\StructType\AcsWorkDayWithTransfer
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsWorkDayWithTransfer|null
     */
    public function last(): ?\StructType\AcsWorkDayWithTransfer
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsWorkDayWithTransfer|null
     */
    public function offsetGet($offset): ?\StructType\AcsWorkDayWithTransfer
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsWorkDayWithTransfer $item
     * @return \ArrayType\ArrayOfAcsWorkDayWithTransfer
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsWorkDayWithTransfer) {
            throw new InvalidArgumentException(sprintf('The AcsWorkDayWithTransfer property can only contain items of type \StructType\AcsWorkDayWithTransfer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsWorkDayWithTransfer
     */
    public function getAttributeName(): string
    {
        return 'AcsWorkDayWithTransfer';
    }
}
