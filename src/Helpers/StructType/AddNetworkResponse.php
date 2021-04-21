<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNetworkResponse StructType
 * @subpackage Structs
 */
class AddNetworkResponse extends AbstractStructBase
{
    /**
     * The AddNetworkResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddNetworkResult = null;
    /**
     * Constructor method for AddNetworkResponse
     * @uses AddNetworkResponse::setAddNetworkResult()
     * @param string $addNetworkResult
     */
    public function __construct(?string $addNetworkResult = null)
    {
        $this
            ->setAddNetworkResult($addNetworkResult);
    }
    /**
     * Get AddNetworkResult value
     * @return string|null
     */
    public function getAddNetworkResult(): ?string
    {
        return $this->AddNetworkResult;
    }
    /**
     * Set AddNetworkResult value
     * @param string $addNetworkResult
     * @return \StructType\AddNetworkResponse
     */
    public function setAddNetworkResult(?string $addNetworkResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addNetworkResult) && !is_string($addNetworkResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addNetworkResult, true), gettype($addNetworkResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addNetworkResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addNetworkResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addNetworkResult, true)), __LINE__);
        }
        $this->AddNetworkResult = $addNetworkResult;
        
        return $this;
    }
}
