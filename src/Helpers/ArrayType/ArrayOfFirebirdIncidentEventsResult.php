<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFirebirdIncidentEventsResult ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFirebirdIncidentEventsResult
 * @subpackage Arrays
 */
class ArrayOfFirebirdIncidentEventsResult extends AbstractStructArrayBase
{
    /**
     * The FirebirdIncidentEventsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FirebirdIncidentEventsResult[]
     */
    protected array $FirebirdIncidentEventsResult = [];
    /**
     * Constructor method for ArrayOfFirebirdIncidentEventsResult
     * @uses ArrayOfFirebirdIncidentEventsResult::setFirebirdIncidentEventsResult()
     * @param \StructType\FirebirdIncidentEventsResult[] $firebirdIncidentEventsResult
     */
    public function __construct(array $firebirdIncidentEventsResult = [])
    {
        $this
            ->setFirebirdIncidentEventsResult($firebirdIncidentEventsResult);
    }
    /**
     * Get FirebirdIncidentEventsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FirebirdIncidentEventsResult[]
     */
    public function getFirebirdIncidentEventsResult(): ?array
    {
        return isset($this->FirebirdIncidentEventsResult) ? $this->FirebirdIncidentEventsResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFirebirdIncidentEventsResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFirebirdIncidentEventsResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFirebirdIncidentEventsResultForArrayConstraintsFromSetFirebirdIncidentEventsResult(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFirebirdIncidentEventsResultFirebirdIncidentEventsResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfFirebirdIncidentEventsResultFirebirdIncidentEventsResultItem instanceof \StructType\FirebirdIncidentEventsResult) {
                $invalidValues[] = is_object($arrayOfFirebirdIncidentEventsResultFirebirdIncidentEventsResultItem) ? get_class($arrayOfFirebirdIncidentEventsResultFirebirdIncidentEventsResultItem) : sprintf('%s(%s)', gettype($arrayOfFirebirdIncidentEventsResultFirebirdIncidentEventsResultItem), var_export($arrayOfFirebirdIncidentEventsResultFirebirdIncidentEventsResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FirebirdIncidentEventsResult property can only contain items of type \StructType\FirebirdIncidentEventsResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FirebirdIncidentEventsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\FirebirdIncidentEventsResult[] $firebirdIncidentEventsResult
     * @return \ArrayType\ArrayOfFirebirdIncidentEventsResult
     */
    public function setFirebirdIncidentEventsResult(array $firebirdIncidentEventsResult = []): self
    {
        // validation for constraint: array
        if ('' !== ($firebirdIncidentEventsResultArrayErrorMessage = self::validateFirebirdIncidentEventsResultForArrayConstraintsFromSetFirebirdIncidentEventsResult($firebirdIncidentEventsResult))) {
            throw new InvalidArgumentException($firebirdIncidentEventsResultArrayErrorMessage, __LINE__);
        }
        if (is_null($firebirdIncidentEventsResult) || (is_array($firebirdIncidentEventsResult) && empty($firebirdIncidentEventsResult))) {
            unset($this->FirebirdIncidentEventsResult);
        } else {
            $this->FirebirdIncidentEventsResult = $firebirdIncidentEventsResult;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\FirebirdIncidentEventsResult|null
     */
    public function current(): ?\StructType\FirebirdIncidentEventsResult
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\FirebirdIncidentEventsResult|null
     */
    public function item($index): ?\StructType\FirebirdIncidentEventsResult
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\FirebirdIncidentEventsResult|null
     */
    public function first(): ?\StructType\FirebirdIncidentEventsResult
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\FirebirdIncidentEventsResult|null
     */
    public function last(): ?\StructType\FirebirdIncidentEventsResult
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\FirebirdIncidentEventsResult|null
     */
    public function offsetGet($offset): ?\StructType\FirebirdIncidentEventsResult
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\FirebirdIncidentEventsResult $item
     * @return \ArrayType\ArrayOfFirebirdIncidentEventsResult
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FirebirdIncidentEventsResult) {
            throw new InvalidArgumentException(sprintf('The FirebirdIncidentEventsResult property can only contain items of type \StructType\FirebirdIncidentEventsResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FirebirdIncidentEventsResult
     */
    public function getAttributeName(): string
    {
        return 'FirebirdIncidentEventsResult';
    }
}
