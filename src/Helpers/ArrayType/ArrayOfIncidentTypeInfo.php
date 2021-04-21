<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIncidentTypeInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIncidentTypeInfo
 * @subpackage Arrays
 */
class ArrayOfIncidentTypeInfo extends AbstractStructArrayBase
{
    /**
     * The IncidentTypeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentTypeInfo[]
     */
    protected array $IncidentTypeInfo = [];
    /**
     * Constructor method for ArrayOfIncidentTypeInfo
     * @uses ArrayOfIncidentTypeInfo::setIncidentTypeInfo()
     * @param \StructType\IncidentTypeInfo[] $incidentTypeInfo
     */
    public function __construct(array $incidentTypeInfo = [])
    {
        $this
            ->setIncidentTypeInfo($incidentTypeInfo);
    }
    /**
     * Get IncidentTypeInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentTypeInfo[]
     */
    public function getIncidentTypeInfo(): ?array
    {
        return isset($this->IncidentTypeInfo) ? $this->IncidentTypeInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setIncidentTypeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncidentTypeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncidentTypeInfoForArrayConstraintsFromSetIncidentTypeInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfIncidentTypeInfoIncidentTypeInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfIncidentTypeInfoIncidentTypeInfoItem instanceof \StructType\IncidentTypeInfo) {
                $invalidValues[] = is_object($arrayOfIncidentTypeInfoIncidentTypeInfoItem) ? get_class($arrayOfIncidentTypeInfoIncidentTypeInfoItem) : sprintf('%s(%s)', gettype($arrayOfIncidentTypeInfoIncidentTypeInfoItem), var_export($arrayOfIncidentTypeInfoIncidentTypeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IncidentTypeInfo property can only contain items of type \StructType\IncidentTypeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IncidentTypeInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\IncidentTypeInfo[] $incidentTypeInfo
     * @return \ArrayType\ArrayOfIncidentTypeInfo
     */
    public function setIncidentTypeInfo(array $incidentTypeInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($incidentTypeInfoArrayErrorMessage = self::validateIncidentTypeInfoForArrayConstraintsFromSetIncidentTypeInfo($incidentTypeInfo))) {
            throw new InvalidArgumentException($incidentTypeInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($incidentTypeInfo) || (is_array($incidentTypeInfo) && empty($incidentTypeInfo))) {
            unset($this->IncidentTypeInfo);
        } else {
            $this->IncidentTypeInfo = $incidentTypeInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\IncidentTypeInfo|null
     */
    public function current(): ?\StructType\IncidentTypeInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\IncidentTypeInfo|null
     */
    public function item($index): ?\StructType\IncidentTypeInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\IncidentTypeInfo|null
     */
    public function first(): ?\StructType\IncidentTypeInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\IncidentTypeInfo|null
     */
    public function last(): ?\StructType\IncidentTypeInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\IncidentTypeInfo|null
     */
    public function offsetGet($offset): ?\StructType\IncidentTypeInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\IncidentTypeInfo $item
     * @return \ArrayType\ArrayOfIncidentTypeInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\IncidentTypeInfo) {
            throw new InvalidArgumentException(sprintf('The IncidentTypeInfo property can only contain items of type \StructType\IncidentTypeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IncidentTypeInfo
     */
    public function getAttributeName(): string
    {
        return 'IncidentTypeInfo';
    }
}
