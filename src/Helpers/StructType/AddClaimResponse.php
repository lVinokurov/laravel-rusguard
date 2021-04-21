<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddClaimResponse StructType
 * @subpackage Structs
 */
class AddClaimResponse extends AbstractStructBase
{
    /**
     * The AddClaimResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddClaimResult = null;
    /**
     * Constructor method for AddClaimResponse
     * @uses AddClaimResponse::setAddClaimResult()
     * @param string $addClaimResult
     */
    public function __construct(?string $addClaimResult = null)
    {
        $this
            ->setAddClaimResult($addClaimResult);
    }
    /**
     * Get AddClaimResult value
     * @return string|null
     */
    public function getAddClaimResult(): ?string
    {
        return $this->AddClaimResult;
    }
    /**
     * Set AddClaimResult value
     * @param string $addClaimResult
     * @return \StructType\AddClaimResponse
     */
    public function setAddClaimResult(?string $addClaimResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addClaimResult) && !is_string($addClaimResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addClaimResult, true), gettype($addClaimResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addClaimResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addClaimResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addClaimResult, true)), __LINE__);
        }
        $this->AddClaimResult = $addClaimResult;
        
        return $this;
    }
}
