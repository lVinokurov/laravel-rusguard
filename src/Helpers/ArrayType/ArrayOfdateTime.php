<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfdateTime ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfdateTime
 * @subpackage Arrays
 */
class ArrayOfdateTime extends AbstractStructArrayBase
{
    /**
     * The dateTime
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $dateTime = [];
    /**
     * Constructor method for ArrayOfdateTime
     * @uses ArrayOfdateTime::setDateTime()
     * @param string[] $dateTime
     */
    public function __construct(array $dateTime = [])
    {
        $this
            ->setDateTime($dateTime);
    }
    /**
     * Get dateTime value
     * @return string[]
     */
    public function getDateTime(): array
    {
        return $this->dateTime;
    }
    /**
     * This method is responsible for validating the values passed to the setDateTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDateTime method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDateTimeForArrayConstraintsFromSetDateTime(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfdateTimeDateTimeItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfdateTimeDateTimeItem)) {
                $invalidValues[] = is_object($arrayOfdateTimeDateTimeItem) ? get_class($arrayOfdateTimeDateTimeItem) : sprintf('%s(%s)', gettype($arrayOfdateTimeDateTimeItem), var_export($arrayOfdateTimeDateTimeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dateTime property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dateTime value
     * @throws InvalidArgumentException
     * @param string[] $dateTime
     * @return \ArrayType\ArrayOfdateTime
     */
    public function setDateTime(array $dateTime = []): self
    {
        // validation for constraint: array
        if ('' !== ($dateTimeArrayErrorMessage = self::validateDateTimeForArrayConstraintsFromSetDateTime($dateTime))) {
            throw new InvalidArgumentException($dateTimeArrayErrorMessage, __LINE__);
        }
        $this->dateTime = $dateTime;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string dateTime
     */
    public function getAttributeName(): string
    {
        return 'dateTime';
    }
}
