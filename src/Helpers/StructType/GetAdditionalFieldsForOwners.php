<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalFieldsForOwners StructType
 * @subpackage Structs
 */
class GetAdditionalFieldsForOwners extends AbstractStructBase
{
    /**
     * The ownerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ownerType = null;
    /**
     * The ownerIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $ownerIds = null;
    /**
     * The savedFieldContext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $savedFieldContext = null;
    /**
     * Constructor method for GetAdditionalFieldsForOwners
     * @uses GetAdditionalFieldsForOwners::setOwnerType()
     * @uses GetAdditionalFieldsForOwners::setOwnerIds()
     * @uses GetAdditionalFieldsForOwners::setSavedFieldContext()
     * @param string $ownerType
     * @param \ArrayType\ArrayOfguid $ownerIds
     * @param array|string $savedFieldContext
     */
    public function __construct(?string $ownerType = null, ?\ArrayType\ArrayOfguid $ownerIds = null, $savedFieldContext = [])
    {
        $this
            ->setOwnerType($ownerType)
            ->setOwnerIds($ownerIds)
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
     * @return \StructType\GetAdditionalFieldsForOwners
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
     * Get ownerIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getOwnerIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->ownerIds) ? $this->ownerIds : null;
    }
    /**
     * Set ownerIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $ownerIds
     * @return \StructType\GetAdditionalFieldsForOwners
     */
    public function setOwnerIds(?\ArrayType\ArrayOfguid $ownerIds = null): self
    {
        if (is_null($ownerIds) || (is_array($ownerIds) && empty($ownerIds))) {
            unset($this->ownerIds);
        } else {
            $this->ownerIds = $ownerIds;
        }
        
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
        foreach ($values as $getAdditionalFieldsForOwnersSavedFieldContextItem) {
            // validation for constraint: enumeration
            if (!\EnumType\SavedFieldContext::valueIsValid($getAdditionalFieldsForOwnersSavedFieldContextItem)) {
                $invalidValues[] = is_object($getAdditionalFieldsForOwnersSavedFieldContextItem) ? get_class($getAdditionalFieldsForOwnersSavedFieldContextItem) : sprintf('%s(%s)', gettype($getAdditionalFieldsForOwnersSavedFieldContextItem), var_export($getAdditionalFieldsForOwnersSavedFieldContextItem, true));
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
     * @return \StructType\GetAdditionalFieldsForOwners
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
