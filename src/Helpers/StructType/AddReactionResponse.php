<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddReactionResponse StructType
 * @subpackage Structs
 */
class AddReactionResponse extends AbstractStructBase
{
    /**
     * The AddReactionResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddReactionResult = null;
    /**
     * Constructor method for AddReactionResponse
     * @uses AddReactionResponse::setAddReactionResult()
     * @param string $addReactionResult
     */
    public function __construct(?string $addReactionResult = null)
    {
        $this
            ->setAddReactionResult($addReactionResult);
    }
    /**
     * Get AddReactionResult value
     * @return string|null
     */
    public function getAddReactionResult(): ?string
    {
        return $this->AddReactionResult;
    }
    /**
     * Set AddReactionResult value
     * @param string $addReactionResult
     * @return \StructType\AddReactionResponse
     */
    public function setAddReactionResult(?string $addReactionResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addReactionResult) && !is_string($addReactionResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addReactionResult, true), gettype($addReactionResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addReactionResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addReactionResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addReactionResult, true)), __LINE__);
        }
        $this->AddReactionResult = $addReactionResult;
        
        return $this;
    }
}
