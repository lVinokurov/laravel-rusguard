<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddServerResponse StructType
 * @subpackage Structs
 */
class AddServerResponse extends AbstractStructBase
{
    /**
     * The AddServerResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddServerResult = null;
    /**
     * Constructor method for AddServerResponse
     * @uses AddServerResponse::setAddServerResult()
     * @param string $addServerResult
     */
    public function __construct(?string $addServerResult = null)
    {
        $this
            ->setAddServerResult($addServerResult);
    }
    /**
     * Get AddServerResult value
     * @return string|null
     */
    public function getAddServerResult(): ?string
    {
        return $this->AddServerResult;
    }
    /**
     * Set AddServerResult value
     * @param string $addServerResult
     * @return \StructType\AddServerResponse
     */
    public function setAddServerResult(?string $addServerResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addServerResult) && !is_string($addServerResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addServerResult, true), gettype($addServerResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addServerResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addServerResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addServerResult, true)), __LINE__);
        }
        $this->AddServerResult = $addServerResult;
        
        return $this;
    }
}
