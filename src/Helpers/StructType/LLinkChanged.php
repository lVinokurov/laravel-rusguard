<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LLinkChanged StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LLinkChanged
 * @subpackage Structs
 */
class LLinkChanged extends AbstractStructBase
{
    /**
     * The CUDType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CUDType = null;
    /**
     * The ChildId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ChildId = null;
    /**
     * The LinkType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LinkType = null;
    /**
     * The ParentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ParentId = null;
    /**
     * Constructor method for LLinkChanged
     * @uses LLinkChanged::setCUDType()
     * @uses LLinkChanged::setChildId()
     * @uses LLinkChanged::setLinkType()
     * @uses LLinkChanged::setParentId()
     * @param string $cUDType
     * @param string $childId
     * @param string $linkType
     * @param string $parentId
     */
    public function __construct(?string $cUDType = null, ?string $childId = null, ?string $linkType = null, ?string $parentId = null)
    {
        $this
            ->setCUDType($cUDType)
            ->setChildId($childId)
            ->setLinkType($linkType)
            ->setParentId($parentId);
    }
    /**
     * Get CUDType value
     * @return string|null
     */
    public function getCUDType(): ?string
    {
        return $this->CUDType;
    }
    /**
     * Set CUDType value
     * @uses \EnumType\CUDType::valueIsValid()
     * @uses \EnumType\CUDType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $cUDType
     * @return \StructType\LLinkChanged
     */
    public function setCUDType(?string $cUDType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\CUDType::valueIsValid($cUDType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CUDType', is_array($cUDType) ? implode(', ', $cUDType) : var_export($cUDType, true), implode(', ', \EnumType\CUDType::getValidValues())), __LINE__);
        }
        $this->CUDType = $cUDType;
        
        return $this;
    }
    /**
     * Get ChildId value
     * @return string|null
     */
    public function getChildId(): ?string
    {
        return $this->ChildId;
    }
    /**
     * Set ChildId value
     * @param string $childId
     * @return \StructType\LLinkChanged
     */
    public function setChildId(?string $childId = null): self
    {
        // validation for constraint: string
        if (!is_null($childId) && !is_string($childId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($childId, true), gettype($childId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($childId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $childId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($childId, true)), __LINE__);
        }
        $this->ChildId = $childId;
        
        return $this;
    }
    /**
     * Get LinkType value
     * @return string|null
     */
    public function getLinkType(): ?string
    {
        return $this->LinkType;
    }
    /**
     * Set LinkType value
     * @uses \EnumType\LinkType::valueIsValid()
     * @uses \EnumType\LinkType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $linkType
     * @return \StructType\LLinkChanged
     */
    public function setLinkType(?string $linkType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LinkType::valueIsValid($linkType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LinkType', is_array($linkType) ? implode(', ', $linkType) : var_export($linkType, true), implode(', ', \EnumType\LinkType::getValidValues())), __LINE__);
        }
        $this->LinkType = $linkType;
        
        return $this;
    }
    /**
     * Get ParentId value
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->ParentId;
    }
    /**
     * Set ParentId value
     * @param string $parentId
     * @return \StructType\LLinkChanged
     */
    public function setParentId(?string $parentId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentId) && !is_string($parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentId, true)), __LINE__);
        }
        $this->ParentId = $parentId;
        
        return $this;
    }
}
