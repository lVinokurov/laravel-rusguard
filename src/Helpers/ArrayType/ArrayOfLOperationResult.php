<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLOperationResult ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLOperationResult
 * @subpackage Arrays
 */
class ArrayOfLOperationResult extends AbstractStructArrayBase
{
    /**
     * The LOperationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LOperationResult[]
     */
    protected array $LOperationResult = [];
    /**
     * Constructor method for ArrayOfLOperationResult
     * @uses ArrayOfLOperationResult::setLOperationResult()
     * @param \StructType\LOperationResult[] $lOperationResult
     */
    public function __construct(array $lOperationResult = [])
    {
        $this
            ->setLOperationResult($lOperationResult);
    }
    /**
     * Get LOperationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LOperationResult[]
     */
    public function getLOperationResult(): ?array
    {
        return isset($this->LOperationResult) ? $this->LOperationResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLOperationResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLOperationResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLOperationResultForArrayConstraintsFromSetLOperationResult(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLOperationResultLOperationResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfLOperationResultLOperationResultItem instanceof \StructType\LOperationResult) {
                $invalidValues[] = is_object($arrayOfLOperationResultLOperationResultItem) ? get_class($arrayOfLOperationResultLOperationResultItem) : sprintf('%s(%s)', gettype($arrayOfLOperationResultLOperationResultItem), var_export($arrayOfLOperationResultLOperationResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LOperationResult property can only contain items of type \StructType\LOperationResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LOperationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LOperationResult[] $lOperationResult
     * @return \ArrayType\ArrayOfLOperationResult
     */
    public function setLOperationResult(array $lOperationResult = []): self
    {
        // validation for constraint: array
        if ('' !== ($lOperationResultArrayErrorMessage = self::validateLOperationResultForArrayConstraintsFromSetLOperationResult($lOperationResult))) {
            throw new InvalidArgumentException($lOperationResultArrayErrorMessage, __LINE__);
        }
        if (is_null($lOperationResult) || (is_array($lOperationResult) && empty($lOperationResult))) {
            unset($this->LOperationResult);
        } else {
            $this->LOperationResult = $lOperationResult;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LOperationResult|null
     */
    public function current(): ?\StructType\LOperationResult
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LOperationResult|null
     */
    public function item($index): ?\StructType\LOperationResult
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LOperationResult|null
     */
    public function first(): ?\StructType\LOperationResult
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LOperationResult|null
     */
    public function last(): ?\StructType\LOperationResult
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LOperationResult|null
     */
    public function offsetGet($offset): ?\StructType\LOperationResult
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LOperationResult $item
     * @return \ArrayType\ArrayOfLOperationResult
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LOperationResult) {
            throw new InvalidArgumentException(sprintf('The LOperationResult property can only contain items of type \StructType\LOperationResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LOperationResult
     */
    public function getAttributeName(): string
    {
        return 'LOperationResult';
    }
}
