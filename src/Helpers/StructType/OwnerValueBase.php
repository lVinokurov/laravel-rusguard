<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnerValueBase StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OwnerValueBase
 * @subpackage Structs
 */
class OwnerValueBase extends AbstractStructBase
{
    /**
     * The OwnerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OwnerId = null;
    /**
     * Constructor method for OwnerValueBase
     * @uses OwnerValueBase::setOwnerId()
     * @param string $ownerId
     */
    public function __construct(?string $ownerId = null)
    {
        $this
            ->setOwnerId($ownerId);
    }
    /**
     * Get OwnerId value
     * @return string|null
     */
    public function getOwnerId(): ?string
    {
        return $this->OwnerId;
    }
    /**
     * Set OwnerId value
     * @param string $ownerId
     * @return \StructType\OwnerValueBase
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
        $this->OwnerId = $ownerId;
        
        return $this;
    }
}
