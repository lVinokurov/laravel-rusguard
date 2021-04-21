<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddLocalServerResponse StructType
 * @subpackage Structs
 */
class AddLocalServerResponse extends AbstractStructBase
{
    /**
     * The AddLocalServerResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddLocalServerResult = null;
    /**
     * Constructor method for AddLocalServerResponse
     * @uses AddLocalServerResponse::setAddLocalServerResult()
     * @param string $addLocalServerResult
     */
    public function __construct(?string $addLocalServerResult = null)
    {
        $this
            ->setAddLocalServerResult($addLocalServerResult);
    }
    /**
     * Get AddLocalServerResult value
     * @return string|null
     */
    public function getAddLocalServerResult(): ?string
    {
        return $this->AddLocalServerResult;
    }
    /**
     * Set AddLocalServerResult value
     * @param string $addLocalServerResult
     * @return \StructType\AddLocalServerResponse
     */
    public function setAddLocalServerResult(?string $addLocalServerResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addLocalServerResult) && !is_string($addLocalServerResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addLocalServerResult, true), gettype($addLocalServerResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addLocalServerResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addLocalServerResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addLocalServerResult, true)), __LINE__);
        }
        $this->AddLocalServerResult = $addLocalServerResult;
        
        return $this;
    }
}
