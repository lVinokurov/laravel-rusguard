<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNetworkToSubnetworkLink StructType
 * @subpackage Structs
 */
class AddNetworkToSubnetworkLink extends AbstractStructBase
{
    /**
     * The parentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $parentId = null;
    /**
     * The childId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $childId = null;
    /**
     * Constructor method for AddNetworkToSubnetworkLink
     * @uses AddNetworkToSubnetworkLink::setParentId()
     * @uses AddNetworkToSubnetworkLink::setChildId()
     * @param string $parentId
     * @param string $childId
     */
    public function __construct(?string $parentId = null, ?string $childId = null)
    {
        $this
            ->setParentId($parentId)
            ->setChildId($childId);
    }
    /**
     * Get parentId value
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }
    /**
     * Set parentId value
     * @param string $parentId
     * @return \StructType\AddNetworkToSubnetworkLink
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
        $this->parentId = $parentId;
        
        return $this;
    }
    /**
     * Get childId value
     * @return string|null
     */
    public function getChildId(): ?string
    {
        return $this->childId;
    }
    /**
     * Set childId value
     * @param string $childId
     * @return \StructType\AddNetworkToSubnetworkLink
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
        $this->childId = $childId;
        
        return $this;
    }
}
