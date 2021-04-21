<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetAdditionalDoubleValue StructType
 * @subpackage Structs
 */
class SetAdditionalDoubleValue extends AbstractStructBase
{
    /**
     * The ownerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ownerId = null;
    /**
     * The fieldId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $fieldId = null;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * The partOfCreateOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $partOfCreateOperation = null;
    /**
     * The savedFieldContext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $savedFieldContext = null;
    /**
     * Constructor method for SetAdditionalDoubleValue
     * @uses SetAdditionalDoubleValue::setOwnerId()
     * @uses SetAdditionalDoubleValue::setFieldId()
     * @uses SetAdditionalDoubleValue::setValue()
     * @uses SetAdditionalDoubleValue::setPartOfCreateOperation()
     * @uses SetAdditionalDoubleValue::setSavedFieldContext()
     * @param string $ownerId
     * @param string $fieldId
     * @param float $value
     * @param bool $partOfCreateOperation
     * @param array|string $savedFieldContext
     */
    public function __construct(?string $ownerId = null, ?string $fieldId = null, ?float $value = null, ?bool $partOfCreateOperation = null, $savedFieldContext = [])
    {
        $this
            ->setOwnerId($ownerId)
            ->setFieldId($fieldId)
            ->setValue($value)
            ->setPartOfCreateOperation($partOfCreateOperation)
            ->setSavedFieldContext($savedFieldContext);
    }
    /**
     * Get ownerId value
     * @return string|null
     */
    public function getOwnerId(): ?string
    {
        return $this->ownerId;
    }
    /**
     * Set ownerId value
     * @param string $ownerId
     * @return \StructType\SetAdditionalDoubleValue
     */
    public function setOwnerId(?string $ownerId = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerId) && !is_string($ownerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerId, true), gettype($ownerId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($ownerId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $ownerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($ownerId, true)), __LINE__);
        }
        $this->ownerId = $ownerId;
        
        return $this;
    }
    /**
     * Get fieldId value
     * @return string|null
     */
    public function getFieldId(): ?string
    {
        return $this->fieldId;
    }
    /**
     * Set fieldId value
     * @param string $fieldId
     * @return \StructType\SetAdditionalDoubleValue
     */
    public function setFieldId(?string $fieldId = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldId) && !is_string($fieldId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldId, true), gettype($fieldId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($fieldId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $fieldId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($fieldId, true)), __LINE__);
        }
        $this->fieldId = $fieldId;
        
        return $this;
    }
    /**
     * Get value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getValue(): ?float
    {
        return isset($this->value) ? $this->value : null;
    }
    /**
     * Set value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $value
     * @return \StructType\SetAdditionalDoubleValue
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->value);
        } else {
            $this->value = $value;
        }
        
        return $this;
    }
    /**
     * Get partOfCreateOperation value
     * @return bool|null
     */
    public function getPartOfCreateOperation(): ?bool
    {
        return $this->partOfCreateOperation;
    }
    /**
     * Set partOfCreateOperation value
     * @param bool $partOfCreateOperation
     * @return \StructType\SetAdditionalDoubleValue
     */
    public function setPartOfCreateOperation(?bool $partOfCreateOperation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partOfCreateOperation) && !is_bool($partOfCreateOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partOfCreateOperation, true), gettype($partOfCreateOperation)), __LINE__);
        }
        $this->partOfCreateOperation = $partOfCreateOperation;
        
        return $this;
    }
    /**
     * Get savedFieldContext value
     * @return string
     */
    public function getSavedFieldContext(): ?string
    {
        return $this->savedFieldContext;
    }
    /**
     * This method is responsible for validating the values passed to the setSavedFieldContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSavedFieldContext method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSavedFieldContextForArrayConstraintsFromSetSavedFieldContext(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setAdditionalDoubleValueSavedFieldContextItem) {
            // validation for constraint: enumeration
            if (!\EnumType\SavedFieldContext::valueIsValid($setAdditionalDoubleValueSavedFieldContextItem)) {
                $invalidValues[] = is_object($setAdditionalDoubleValueSavedFieldContextItem) ? get_class($setAdditionalDoubleValueSavedFieldContextItem) : sprintf('%s(%s)', gettype($setAdditionalDoubleValueSavedFieldContextItem), var_export($setAdditionalDoubleValueSavedFieldContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SavedFieldContext', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\SavedFieldContext::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set savedFieldContext value
     * @uses \EnumType\SavedFieldContext::valueIsValid()
     * @uses \EnumType\SavedFieldContext::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $savedFieldContext
     * @return \StructType\SetAdditionalDoubleValue
     */
    public function setSavedFieldContext($savedFieldContext = []): self
    {
        // validation for constraint: list
        if ('' !== ($savedFieldContextArrayErrorMessage = self::validateSavedFieldContextForArrayConstraintsFromSetSavedFieldContext(is_string($savedFieldContext) ? explode(' ', $savedFieldContext) : $savedFieldContext))) {
            throw new InvalidArgumentException($savedFieldContextArrayErrorMessage, __LINE__);
        }
        $this->savedFieldContext = is_array($savedFieldContext) ? implode(' ', $savedFieldContext) : $savedFieldContext;
        
        return $this;
    }
}
