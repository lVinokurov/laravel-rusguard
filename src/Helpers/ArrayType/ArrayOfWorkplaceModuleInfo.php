<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkplaceModuleInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWorkplaceModuleInfo
 * @subpackage Arrays
 */
class ArrayOfWorkplaceModuleInfo extends AbstractStructArrayBase
{
    /**
     * The WorkplaceModuleInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkplaceModuleInfo[]
     */
    protected array $WorkplaceModuleInfo = [];
    /**
     * Constructor method for ArrayOfWorkplaceModuleInfo
     * @uses ArrayOfWorkplaceModuleInfo::setWorkplaceModuleInfo()
     * @param \StructType\WorkplaceModuleInfo[] $workplaceModuleInfo
     */
    public function __construct(array $workplaceModuleInfo = [])
    {
        $this
            ->setWorkplaceModuleInfo($workplaceModuleInfo);
    }
    /**
     * Get WorkplaceModuleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkplaceModuleInfo[]
     */
    public function getWorkplaceModuleInfo(): ?array
    {
        return isset($this->WorkplaceModuleInfo) ? $this->WorkplaceModuleInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkplaceModuleInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkplaceModuleInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkplaceModuleInfoForArrayConstraintsFromSetWorkplaceModuleInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkplaceModuleInfoWorkplaceModuleInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkplaceModuleInfoWorkplaceModuleInfoItem instanceof \StructType\WorkplaceModuleInfo) {
                $invalidValues[] = is_object($arrayOfWorkplaceModuleInfoWorkplaceModuleInfoItem) ? get_class($arrayOfWorkplaceModuleInfoWorkplaceModuleInfoItem) : sprintf('%s(%s)', gettype($arrayOfWorkplaceModuleInfoWorkplaceModuleInfoItem), var_export($arrayOfWorkplaceModuleInfoWorkplaceModuleInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkplaceModuleInfo property can only contain items of type \StructType\WorkplaceModuleInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WorkplaceModuleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\WorkplaceModuleInfo[] $workplaceModuleInfo
     * @return \ArrayType\ArrayOfWorkplaceModuleInfo
     */
    public function setWorkplaceModuleInfo(array $workplaceModuleInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($workplaceModuleInfoArrayErrorMessage = self::validateWorkplaceModuleInfoForArrayConstraintsFromSetWorkplaceModuleInfo($workplaceModuleInfo))) {
            throw new InvalidArgumentException($workplaceModuleInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($workplaceModuleInfo) || (is_array($workplaceModuleInfo) && empty($workplaceModuleInfo))) {
            unset($this->WorkplaceModuleInfo);
        } else {
            $this->WorkplaceModuleInfo = $workplaceModuleInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WorkplaceModuleInfo|null
     */
    public function current(): ?\StructType\WorkplaceModuleInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WorkplaceModuleInfo|null
     */
    public function item($index): ?\StructType\WorkplaceModuleInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WorkplaceModuleInfo|null
     */
    public function first(): ?\StructType\WorkplaceModuleInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WorkplaceModuleInfo|null
     */
    public function last(): ?\StructType\WorkplaceModuleInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WorkplaceModuleInfo|null
     */
    public function offsetGet($offset): ?\StructType\WorkplaceModuleInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\WorkplaceModuleInfo $item
     * @return \ArrayType\ArrayOfWorkplaceModuleInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkplaceModuleInfo) {
            throw new InvalidArgumentException(sprintf('The WorkplaceModuleInfo property can only contain items of type \StructType\WorkplaceModuleInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkplaceModuleInfo
     */
    public function getAttributeName(): string
    {
        return 'WorkplaceModuleInfo';
    }
}
