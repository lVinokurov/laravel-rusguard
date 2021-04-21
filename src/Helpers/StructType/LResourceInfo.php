<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LResourceInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LResourceInfo
 * @subpackage Structs
 */
class LResourceInfo extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The ResourceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResourceType = null;
    /**
     * Constructor method for LResourceInfo
     * @uses LResourceInfo::setId()
     * @uses LResourceInfo::setResourceType()
     * @param string $id
     * @param string $resourceType
     */
    public function __construct(?string $id = null, ?string $resourceType = null)
    {
        $this
            ->setId($id)
            ->setResourceType($resourceType);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\LResourceInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get ResourceType value
     * @return string|null
     */
    public function getResourceType(): ?string
    {
        return $this->ResourceType;
    }
    /**
     * Set ResourceType value
     * @uses \EnumType\ResourceType::valueIsValid()
     * @uses \EnumType\ResourceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resourceType
     * @return \StructType\LResourceInfo
     */
    public function setResourceType(?string $resourceType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ResourceType::valueIsValid($resourceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ResourceType', is_array($resourceType) ? implode(', ', $resourceType) : var_export($resourceType, true), implode(', ', \EnumType\ResourceType::getValidValues())), __LINE__);
        }
        $this->ResourceType = $resourceType;
        
        return $this;
    }
}
