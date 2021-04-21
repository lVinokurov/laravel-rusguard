<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessSubnetworkStateChanged StructType
 * @subpackage Structs
 */
class ProcessSubnetworkStateChanged extends AbstractStructBase
{
    /**
     * The subnetworkId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $subnetworkId = null;
    /**
     * Constructor method for ProcessSubnetworkStateChanged
     * @uses ProcessSubnetworkStateChanged::setSubnetworkId()
     * @param string $subnetworkId
     */
    public function __construct(?string $subnetworkId = null)
    {
        $this
            ->setSubnetworkId($subnetworkId);
    }
    /**
     * Get subnetworkId value
     * @return string|null
     */
    public function getSubnetworkId(): ?string
    {
        return $this->subnetworkId;
    }
    /**
     * Set subnetworkId value
     * @param string $subnetworkId
     * @return \StructType\ProcessSubnetworkStateChanged
     */
    public function setSubnetworkId(?string $subnetworkId = null): self
    {
        // validation for constraint: string
        if (!is_null($subnetworkId) && !is_string($subnetworkId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subnetworkId, true), gettype($subnetworkId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($subnetworkId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $subnetworkId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($subnetworkId, true)), __LINE__);
        }
        $this->subnetworkId = $subnetworkId;
        
        return $this;
    }
}
