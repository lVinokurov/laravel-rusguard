<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNTechLabCameraInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNTechLabCameraInfo
 * @subpackage Arrays
 */
class ArrayOfNTechLabCameraInfo extends AbstractStructArrayBase
{
    /**
     * The NTechLabCameraInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\NTechLabCameraInfo[]
     */
    protected array $NTechLabCameraInfo = [];
    /**
     * Constructor method for ArrayOfNTechLabCameraInfo
     * @uses ArrayOfNTechLabCameraInfo::setNTechLabCameraInfo()
     * @param \StructType\NTechLabCameraInfo[] $nTechLabCameraInfo
     */
    public function __construct(array $nTechLabCameraInfo = [])
    {
        $this
            ->setNTechLabCameraInfo($nTechLabCameraInfo);
    }
    /**
     * Get NTechLabCameraInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\NTechLabCameraInfo[]
     */
    public function getNTechLabCameraInfo(): ?array
    {
        return isset($this->NTechLabCameraInfo) ? $this->NTechLabCameraInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setNTechLabCameraInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNTechLabCameraInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNTechLabCameraInfoForArrayConstraintsFromSetNTechLabCameraInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNTechLabCameraInfoNTechLabCameraInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfNTechLabCameraInfoNTechLabCameraInfoItem instanceof \StructType\NTechLabCameraInfo) {
                $invalidValues[] = is_object($arrayOfNTechLabCameraInfoNTechLabCameraInfoItem) ? get_class($arrayOfNTechLabCameraInfoNTechLabCameraInfoItem) : sprintf('%s(%s)', gettype($arrayOfNTechLabCameraInfoNTechLabCameraInfoItem), var_export($arrayOfNTechLabCameraInfoNTechLabCameraInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NTechLabCameraInfo property can only contain items of type \StructType\NTechLabCameraInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NTechLabCameraInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\NTechLabCameraInfo[] $nTechLabCameraInfo
     * @return \ArrayType\ArrayOfNTechLabCameraInfo
     */
    public function setNTechLabCameraInfo(array $nTechLabCameraInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($nTechLabCameraInfoArrayErrorMessage = self::validateNTechLabCameraInfoForArrayConstraintsFromSetNTechLabCameraInfo($nTechLabCameraInfo))) {
            throw new InvalidArgumentException($nTechLabCameraInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($nTechLabCameraInfo) || (is_array($nTechLabCameraInfo) && empty($nTechLabCameraInfo))) {
            unset($this->NTechLabCameraInfo);
        } else {
            $this->NTechLabCameraInfo = $nTechLabCameraInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\NTechLabCameraInfo|null
     */
    public function current(): ?\StructType\NTechLabCameraInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\NTechLabCameraInfo|null
     */
    public function item($index): ?\StructType\NTechLabCameraInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\NTechLabCameraInfo|null
     */
    public function first(): ?\StructType\NTechLabCameraInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\NTechLabCameraInfo|null
     */
    public function last(): ?\StructType\NTechLabCameraInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\NTechLabCameraInfo|null
     */
    public function offsetGet($offset): ?\StructType\NTechLabCameraInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\NTechLabCameraInfo $item
     * @return \ArrayType\ArrayOfNTechLabCameraInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NTechLabCameraInfo) {
            throw new InvalidArgumentException(sprintf('The NTechLabCameraInfo property can only contain items of type \StructType\NTechLabCameraInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NTechLabCameraInfo
     */
    public function getAttributeName(): string
    {
        return 'NTechLabCameraInfo';
    }
}
