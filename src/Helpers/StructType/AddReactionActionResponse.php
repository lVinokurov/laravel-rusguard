<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddReactionActionResponse StructType
 * @subpackage Structs
 */
class AddReactionActionResponse extends AbstractStructBase
{
    /**
     * The AddReactionActionResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddReactionActionResult = null;
    /**
     * Constructor method for AddReactionActionResponse
     * @uses AddReactionActionResponse::setAddReactionActionResult()
     * @param string $addReactionActionResult
     */
    public function __construct(?string $addReactionActionResult = null)
    {
        $this
            ->setAddReactionActionResult($addReactionActionResult);
    }
    /**
     * Get AddReactionActionResult value
     * @return string|null
     */
    public function getAddReactionActionResult(): ?string
    {
        return $this->AddReactionActionResult;
    }
    /**
     * Set AddReactionActionResult value
     * @param string $addReactionActionResult
     * @return \StructType\AddReactionActionResponse
     */
    public function setAddReactionActionResult(?string $addReactionActionResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addReactionActionResult) && !is_string($addReactionActionResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addReactionActionResult, true), gettype($addReactionActionResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addReactionActionResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addReactionActionResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addReactionActionResult, true)), __LINE__);
        }
        $this->AddReactionActionResult = $addReactionActionResult;
        
        return $this;
    }
}
