<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalFields StructType
 * @subpackage Structs
 */
class GetAdditionalFields extends AbstractStructBase
{
    /**
     * The ownerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ownerType = null;
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
     * The savedFieldContext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $savedFieldContext = null;
    /**
     * Constructor method for GetAdditionalFields
     * @uses GetAdditionalFields::setOwnerType()
     * @uses GetAdditionalFields::setOwnerId()
     * @uses GetAdditionalFields::setSavedFieldContext()
     * @param string $ownerType
     * @param string $ownerId
     * @param array|string $savedFieldContext
     */
    public function __construct(?string $ownerType = null, ?string $ownerId = null, $savedFieldContext = [])
    {
        $this
            ->setOwnerType($ownerType)
            ->setOwnerId($ownerId)
            ->setSavedFieldContext($savedFieldContext);
    }
    /**
     * Get ownerType value
     * @return string|null
     */
    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }
    /**
     * Set ownerType value
     * @uses \EnumType\OwnerFieldType::valueIsValid()
     * @uses \EnumType\OwnerFieldType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ownerType
     * @return \StructType\GetAdditionalFields
     */
    public function setOwnerType(?string $ownerType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\OwnerFieldType::valueIsValid($ownerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OwnerFieldType', is_array($ownerType) ? implode(', ', $ownerType) : var_export($ownerType, true), implode(', ', \EnumType\OwnerFieldType::getValidValues())), __LINE__);
        }
        $this->ownerType = $ownerType;
        
        return $this;
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
     * @return \StructType\GetAdditionalFields
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
        foreach ($values as $getAdditionalFieldsSavedFieldContextItem) {
            // validation for constraint: enumeration
            if (!\EnumType\SavedFieldContext::valueIsValid($getAdditionalFieldsSavedFieldContextItem)) {
                $invalidValues[] = is_object($getAdditionalFieldsSavedFieldContextItem) ? get_class($getAdditionalFieldsSavedFieldContextItem) : sprintf('%s(%s)', gettype($getAdditionalFieldsSavedFieldContextItem), var_export($getAdditionalFieldsSavedFieldContextItem, true));
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
     * @return \StructType\GetAdditionalFields
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
