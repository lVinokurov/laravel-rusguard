<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddReactionEventResponse StructType
 * @subpackage Structs
 */
class AddReactionEventResponse extends AbstractStructBase
{
    /**
     * The AddReactionEventResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddReactionEventResult = null;
    /**
     * Constructor method for AddReactionEventResponse
     * @uses AddReactionEventResponse::setAddReactionEventResult()
     * @param string $addReactionEventResult
     */
    public function __construct(?string $addReactionEventResult = null)
    {
        $this
            ->setAddReactionEventResult($addReactionEventResult);
    }
    /**
     * Get AddReactionEventResult value
     * @return string|null
     */
    public function getAddReactionEventResult(): ?string
    {
        return $this->AddReactionEventResult;
    }
    /**
     * Set AddReactionEventResult value
     * @param string $addReactionEventResult
     * @return \StructType\AddReactionEventResponse
     */
    public function setAddReactionEventResult(?string $addReactionEventResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addReactionEventResult) && !is_string($addReactionEventResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addReactionEventResult, true), gettype($addReactionEventResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addReactionEventResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addReactionEventResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addReactionEventResult, true)), __LINE__);
        }
        $this->AddReactionEventResult = $addReactionEventResult;
        
        return $this;
    }
}
