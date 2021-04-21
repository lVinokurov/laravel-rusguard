<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalFieldsValue StructType
 * @subpackage Structs
 */
class GetAdditionalFieldsValue extends AbstractStructBase
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
     * Constructor method for GetAdditionalFieldsValue
     * @uses GetAdditionalFieldsValue::setOwnerType()
     * @uses GetAdditionalFieldsValue::setOwnerId()
     * @param string $ownerType
     * @param string $ownerId
     */
    public function __construct(?string $ownerType = null, ?string $ownerId = null)
    {
        $this
            ->setOwnerType($ownerType)
            ->setOwnerId($ownerId);
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
     * @return \StructType\GetAdditionalFieldsValue
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
     * @return \StructType\GetAdditionalFieldsValue
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
}
