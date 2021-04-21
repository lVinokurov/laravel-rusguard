<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddFieldResponse StructType
 * @subpackage Structs
 */
class AddFieldResponse extends AbstractStructBase
{
    /**
     * The AddFieldResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddFieldResult = null;
    /**
     * Constructor method for AddFieldResponse
     * @uses AddFieldResponse::setAddFieldResult()
     * @param string $addFieldResult
     */
    public function __construct(?string $addFieldResult = null)
    {
        $this
            ->setAddFieldResult($addFieldResult);
    }
    /**
     * Get AddFieldResult value
     * @return string|null
     */
    public function getAddFieldResult(): ?string
    {
        return $this->AddFieldResult;
    }
    /**
     * Set AddFieldResult value
     * @param string $addFieldResult
     * @return \StructType\AddFieldResponse
     */
    public function setAddFieldResult(?string $addFieldResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addFieldResult) && !is_string($addFieldResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addFieldResult, true), gettype($addFieldResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addFieldResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addFieldResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addFieldResult, true)), __LINE__);
        }
        $this->AddFieldResult = $addFieldResult;
        
        return $this;
    }
}
