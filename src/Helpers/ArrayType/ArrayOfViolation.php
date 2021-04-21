<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfViolation ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfViolation
 * @subpackage Arrays
 */
class ArrayOfViolation extends AbstractStructArrayBase
{
    /**
     * The Violation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Violation[]
     */
    protected array $Violation = [];
    /**
     * Constructor method for ArrayOfViolation
     * @uses ArrayOfViolation::setViolation()
     * @param \StructType\Violation[] $violation
     */
    public function __construct(array $violation = [])
    {
        $this
            ->setViolation($violation);
    }
    /**
     * Get Violation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Violation[]
     */
    public function getViolation(): ?array
    {
        return isset($this->Violation) ? $this->Violation : null;
    }
    /**
     * This method is responsible for validating the values passed to the setViolation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setViolation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateViolationForArrayConstraintsFromSetViolation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfViolationViolationItem) {
            // validation for constraint: itemType
            if (!$arrayOfViolationViolationItem instanceof \StructType\Violation) {
                $invalidValues[] = is_object($arrayOfViolationViolationItem) ? get_class($arrayOfViolationViolationItem) : sprintf('%s(%s)', gettype($arrayOfViolationViolationItem), var_export($arrayOfViolationViolationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Violation property can only contain items of type \StructType\Violation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Violation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Violation[] $violation
     * @return \ArrayType\ArrayOfViolation
     */
    public function setViolation(array $violation = []): self
    {
        // validation for constraint: array
        if ('' !== ($violationArrayErrorMessage = self::validateViolationForArrayConstraintsFromSetViolation($violation))) {
            throw new InvalidArgumentException($violationArrayErrorMessage, __LINE__);
        }
        if (is_null($violation) || (is_array($violation) && empty($violation))) {
            unset($this->Violation);
        } else {
            $this->Violation = $violation;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Violation|null
     */
    public function current(): ?\StructType\Violation
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Violation|null
     */
    public function item($index): ?\StructType\Violation
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Violation|null
     */
    public function first(): ?\StructType\Violation
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Violation|null
     */
    public function last(): ?\StructType\Violation
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Violation|null
     */
    public function offsetGet($offset): ?\StructType\Violation
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\Violation $item
     * @return \ArrayType\ArrayOfViolation
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Violation) {
            throw new InvalidArgumentException(sprintf('The Violation property can only contain items of type \StructType\Violation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Violation
     */
    public function getAttributeName(): string
    {
        return 'Violation';
    }
}
