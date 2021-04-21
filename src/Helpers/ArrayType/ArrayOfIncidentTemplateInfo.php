<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIncidentTemplateInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIncidentTemplateInfo
 * @subpackage Arrays
 */
class ArrayOfIncidentTemplateInfo extends AbstractStructArrayBase
{
    /**
     * The IncidentTemplateInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentTemplateInfo[]
     */
    protected array $IncidentTemplateInfo = [];
    /**
     * Constructor method for ArrayOfIncidentTemplateInfo
     * @uses ArrayOfIncidentTemplateInfo::setIncidentTemplateInfo()
     * @param \StructType\IncidentTemplateInfo[] $incidentTemplateInfo
     */
    public function __construct(array $incidentTemplateInfo = [])
    {
        $this
            ->setIncidentTemplateInfo($incidentTemplateInfo);
    }
    /**
     * Get IncidentTemplateInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentTemplateInfo[]
     */
    public function getIncidentTemplateInfo(): ?array
    {
        return isset($this->IncidentTemplateInfo) ? $this->IncidentTemplateInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setIncidentTemplateInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncidentTemplateInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncidentTemplateInfoForArrayConstraintsFromSetIncidentTemplateInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfIncidentTemplateInfoIncidentTemplateInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfIncidentTemplateInfoIncidentTemplateInfoItem instanceof \StructType\IncidentTemplateInfo) {
                $invalidValues[] = is_object($arrayOfIncidentTemplateInfoIncidentTemplateInfoItem) ? get_class($arrayOfIncidentTemplateInfoIncidentTemplateInfoItem) : sprintf('%s(%s)', gettype($arrayOfIncidentTemplateInfoIncidentTemplateInfoItem), var_export($arrayOfIncidentTemplateInfoIncidentTemplateInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IncidentTemplateInfo property can only contain items of type \StructType\IncidentTemplateInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IncidentTemplateInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\IncidentTemplateInfo[] $incidentTemplateInfo
     * @return \ArrayType\ArrayOfIncidentTemplateInfo
     */
    public function setIncidentTemplateInfo(array $incidentTemplateInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($incidentTemplateInfoArrayErrorMessage = self::validateIncidentTemplateInfoForArrayConstraintsFromSetIncidentTemplateInfo($incidentTemplateInfo))) {
            throw new InvalidArgumentException($incidentTemplateInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($incidentTemplateInfo) || (is_array($incidentTemplateInfo) && empty($incidentTemplateInfo))) {
            unset($this->IncidentTemplateInfo);
        } else {
            $this->IncidentTemplateInfo = $incidentTemplateInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\IncidentTemplateInfo|null
     */
    public function current(): ?\StructType\IncidentTemplateInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\IncidentTemplateInfo|null
     */
    public function item($index): ?\StructType\IncidentTemplateInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\IncidentTemplateInfo|null
     */
    public function first(): ?\StructType\IncidentTemplateInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\IncidentTemplateInfo|null
     */
    public function last(): ?\StructType\IncidentTemplateInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\IncidentTemplateInfo|null
     */
    public function offsetGet($offset): ?\StructType\IncidentTemplateInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\IncidentTemplateInfo $item
     * @return \ArrayType\ArrayOfIncidentTemplateInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\IncidentTemplateInfo) {
            throw new InvalidArgumentException(sprintf('The IncidentTemplateInfo property can only contain items of type \StructType\IncidentTemplateInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IncidentTemplateInfo
     */
    public function getAttributeName(): string
    {
        return 'IncidentTemplateInfo';
    }
}
