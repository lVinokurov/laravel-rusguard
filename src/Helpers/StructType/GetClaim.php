<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClaim StructType
 * @subpackage Structs
 */
class GetClaim extends AbstractStructBase
{
    /**
     * The claimId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $claimId = null;
    /**
     * Constructor method for GetClaim
     * @uses GetClaim::setClaimId()
     * @param string $claimId
     */
    public function __construct(?string $claimId = null)
    {
        $this
            ->setClaimId($claimId);
    }
    /**
     * Get claimId value
     * @return string|null
     */
    public function getClaimId(): ?string
    {
        return $this->claimId;
    }
    /**
     * Set claimId value
     * @param string $claimId
     * @return \StructType\GetClaim
     */
    public function setClaimId(?string $claimId = null): self
    {
        // validation for constraint: string
        if (!is_null($claimId) && !is_string($claimId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($claimId, true), gettype($claimId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($claimId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $claimId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($claimId, true)), __LINE__);
        }
        $this->claimId = $claimId;
        
        return $this;
    }
}
