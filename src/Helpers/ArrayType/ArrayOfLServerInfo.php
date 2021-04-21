<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLServerInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLServerInfo
 * @subpackage Arrays
 */
class ArrayOfLServerInfo extends AbstractStructArrayBase
{
    /**
     * The LServerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LServerInfo[]
     */
    protected array $LServerInfo = [];
    /**
     * Constructor method for ArrayOfLServerInfo
     * @uses ArrayOfLServerInfo::setLServerInfo()
     * @param \StructType\LServerInfo[] $lServerInfo
     */
    public function __construct(array $lServerInfo = [])
    {
        $this
            ->setLServerInfo($lServerInfo);
    }
    /**
     * Get LServerInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LServerInfo[]
     */
    public function getLServerInfo(): ?array
    {
        return isset($this->LServerInfo) ? $this->LServerInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLServerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLServerInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLServerInfoForArrayConstraintsFromSetLServerInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLServerInfoLServerInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfLServerInfoLServerInfoItem instanceof \StructType\LServerInfo) {
                $invalidValues[] = is_object($arrayOfLServerInfoLServerInfoItem) ? get_class($arrayOfLServerInfoLServerInfoItem) : sprintf('%s(%s)', gettype($arrayOfLServerInfoLServerInfoItem), var_export($arrayOfLServerInfoLServerInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LServerInfo property can only contain items of type \StructType\LServerInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LServerInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LServerInfo[] $lServerInfo
     * @return \ArrayType\ArrayOfLServerInfo
     */
    public function setLServerInfo(array $lServerInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($lServerInfoArrayErrorMessage = self::validateLServerInfoForArrayConstraintsFromSetLServerInfo($lServerInfo))) {
            throw new InvalidArgumentException($lServerInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($lServerInfo) || (is_array($lServerInfo) && empty($lServerInfo))) {
            unset($this->LServerInfo);
        } else {
            $this->LServerInfo = $lServerInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LServerInfo|null
     */
    public function current(): ?\StructType\LServerInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LServerInfo|null
     */
    public function item($index): ?\StructType\LServerInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LServerInfo|null
     */
    public function first(): ?\StructType\LServerInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LServerInfo|null
     */
    public function last(): ?\StructType\LServerInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LServerInfo|null
     */
    public function offsetGet($offset): ?\StructType\LServerInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LServerInfo $item
     * @return \ArrayType\ArrayOfLServerInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LServerInfo) {
            throw new InvalidArgumentException(sprintf('The LServerInfo property can only contain items of type \StructType\LServerInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LServerInfo
     */
    public function getAttributeName(): string
    {
        return 'LServerInfo';
    }
}
