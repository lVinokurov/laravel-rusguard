<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIncidentElementFullInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIncidentElementFullInfo
 * @subpackage Arrays
 */
class ArrayOfIncidentElementFullInfo extends AbstractStructArrayBase
{
    /**
     * The IncidentElementFullInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentElementFullInfo[]
     */
    protected array $IncidentElementFullInfo = [];
    /**
     * Constructor method for ArrayOfIncidentElementFullInfo
     * @uses ArrayOfIncidentElementFullInfo::setIncidentElementFullInfo()
     * @param \StructType\IncidentElementFullInfo[] $incidentElementFullInfo
     */
    public function __construct(array $incidentElementFullInfo = [])
    {
        $this
            ->setIncidentElementFullInfo($incidentElementFullInfo);
    }
    /**
     * Get IncidentElementFullInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentElementFullInfo[]
     */
    public function getIncidentElementFullInfo(): ?array
    {
        return isset($this->IncidentElementFullInfo) ? $this->IncidentElementFullInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setIncidentElementFullInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncidentElementFullInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncidentElementFullInfoForArrayConstraintsFromSetIncidentElementFullInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfIncidentElementFullInfoIncidentElementFullInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfIncidentElementFullInfoIncidentElementFullInfoItem instanceof \StructType\IncidentElementFullInfo) {
                $invalidValues[] = is_object($arrayOfIncidentElementFullInfoIncidentElementFullInfoItem) ? get_class($arrayOfIncidentElementFullInfoIncidentElementFullInfoItem) : sprintf('%s(%s)', gettype($arrayOfIncidentElementFullInfoIncidentElementFullInfoItem), var_export($arrayOfIncidentElementFullInfoIncidentElementFullInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IncidentElementFullInfo property can only contain items of type \StructType\IncidentElementFullInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IncidentElementFullInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\IncidentElementFullInfo[] $incidentElementFullInfo
     * @return \ArrayType\ArrayOfIncidentElementFullInfo
     */
    public function setIncidentElementFullInfo(array $incidentElementFullInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($incidentElementFullInfoArrayErrorMessage = self::validateIncidentElementFullInfoForArrayConstraintsFromSetIncidentElementFullInfo($incidentElementFullInfo))) {
            throw new InvalidArgumentException($incidentElementFullInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($incidentElementFullInfo) || (is_array($incidentElementFullInfo) && empty($incidentElementFullInfo))) {
            unset($this->IncidentElementFullInfo);
        } else {
            $this->IncidentElementFullInfo = $incidentElementFullInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\IncidentElementFullInfo|null
     */
    public function current(): ?\StructType\IncidentElementFullInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\IncidentElementFullInfo|null
     */
    public function item($index): ?\StructType\IncidentElementFullInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\IncidentElementFullInfo|null
     */
    public function first(): ?\StructType\IncidentElementFullInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\IncidentElementFullInfo|null
     */
    public function last(): ?\StructType\IncidentElementFullInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\IncidentElementFullInfo|null
     */
    public function offsetGet($offset): ?\StructType\IncidentElementFullInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\IncidentElementFullInfo $item
     * @return \ArrayType\ArrayOfIncidentElementFullInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\IncidentElementFullInfo) {
            throw new InvalidArgumentException(sprintf('The IncidentElementFullInfo property can only contain items of type \StructType\IncidentElementFullInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IncidentElementFullInfo
     */
    public function getAttributeName(): string
    {
        return 'IncidentElementFullInfo';
    }
}
