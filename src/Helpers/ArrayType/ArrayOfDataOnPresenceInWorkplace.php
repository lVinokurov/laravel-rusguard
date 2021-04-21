<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDataOnPresenceInWorkplace ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDataOnPresenceInWorkplace
 * @subpackage Arrays
 */
class ArrayOfDataOnPresenceInWorkplace extends AbstractStructArrayBase
{
    /**
     * The DataOnPresenceInWorkplace
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DataOnPresenceInWorkplace[]
     */
    protected array $DataOnPresenceInWorkplace = [];
    /**
     * Constructor method for ArrayOfDataOnPresenceInWorkplace
     * @uses ArrayOfDataOnPresenceInWorkplace::setDataOnPresenceInWorkplace()
     * @param \StructType\DataOnPresenceInWorkplace[] $dataOnPresenceInWorkplace
     */
    public function __construct(array $dataOnPresenceInWorkplace = [])
    {
        $this
            ->setDataOnPresenceInWorkplace($dataOnPresenceInWorkplace);
    }
    /**
     * Get DataOnPresenceInWorkplace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DataOnPresenceInWorkplace[]
     */
    public function getDataOnPresenceInWorkplace(): ?array
    {
        return isset($this->DataOnPresenceInWorkplace) ? $this->DataOnPresenceInWorkplace : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDataOnPresenceInWorkplace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDataOnPresenceInWorkplace method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataOnPresenceInWorkplaceForArrayConstraintsFromSetDataOnPresenceInWorkplace(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDataOnPresenceInWorkplaceDataOnPresenceInWorkplaceItem) {
            // validation for constraint: itemType
            if (!$arrayOfDataOnPresenceInWorkplaceDataOnPresenceInWorkplaceItem instanceof \StructType\DataOnPresenceInWorkplace) {
                $invalidValues[] = is_object($arrayOfDataOnPresenceInWorkplaceDataOnPresenceInWorkplaceItem) ? get_class($arrayOfDataOnPresenceInWorkplaceDataOnPresenceInWorkplaceItem) : sprintf('%s(%s)', gettype($arrayOfDataOnPresenceInWorkplaceDataOnPresenceInWorkplaceItem), var_export($arrayOfDataOnPresenceInWorkplaceDataOnPresenceInWorkplaceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DataOnPresenceInWorkplace property can only contain items of type \StructType\DataOnPresenceInWorkplace, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DataOnPresenceInWorkplace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DataOnPresenceInWorkplace[] $dataOnPresenceInWorkplace
     * @return \ArrayType\ArrayOfDataOnPresenceInWorkplace
     */
    public function setDataOnPresenceInWorkplace(array $dataOnPresenceInWorkplace = []): self
    {
        // validation for constraint: array
        if ('' !== ($dataOnPresenceInWorkplaceArrayErrorMessage = self::validateDataOnPresenceInWorkplaceForArrayConstraintsFromSetDataOnPresenceInWorkplace($dataOnPresenceInWorkplace))) {
            throw new InvalidArgumentException($dataOnPresenceInWorkplaceArrayErrorMessage, __LINE__);
        }
        if (is_null($dataOnPresenceInWorkplace) || (is_array($dataOnPresenceInWorkplace) && empty($dataOnPresenceInWorkplace))) {
            unset($this->DataOnPresenceInWorkplace);
        } else {
            $this->DataOnPresenceInWorkplace = $dataOnPresenceInWorkplace;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DataOnPresenceInWorkplace|null
     */
    public function current(): ?\StructType\DataOnPresenceInWorkplace
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DataOnPresenceInWorkplace|null
     */
    public function item($index): ?\StructType\DataOnPresenceInWorkplace
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DataOnPresenceInWorkplace|null
     */
    public function first(): ?\StructType\DataOnPresenceInWorkplace
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DataOnPresenceInWorkplace|null
     */
    public function last(): ?\StructType\DataOnPresenceInWorkplace
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DataOnPresenceInWorkplace|null
     */
    public function offsetGet($offset): ?\StructType\DataOnPresenceInWorkplace
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DataOnPresenceInWorkplace $item
     * @return \ArrayType\ArrayOfDataOnPresenceInWorkplace
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DataOnPresenceInWorkplace) {
            throw new InvalidArgumentException(sprintf('The DataOnPresenceInWorkplace property can only contain items of type \StructType\DataOnPresenceInWorkplace, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DataOnPresenceInWorkplace
     */
    public function getAttributeName(): string
    {
        return 'DataOnPresenceInWorkplace';
    }
}
