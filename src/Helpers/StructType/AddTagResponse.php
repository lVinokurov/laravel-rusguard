<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddTagResponse StructType
 * @subpackage Structs
 */
class AddTagResponse extends AbstractStructBase
{
    /**
     * The AddTagResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddTagResult = null;
    /**
     * Constructor method for AddTagResponse
     * @uses AddTagResponse::setAddTagResult()
     * @param string $addTagResult
     */
    public function __construct(?string $addTagResult = null)
    {
        $this
            ->setAddTagResult($addTagResult);
    }
    /**
     * Get AddTagResult value
     * @return string|null
     */
    public function getAddTagResult(): ?string
    {
        return $this->AddTagResult;
    }
    /**
     * Set AddTagResult value
     * @param string $addTagResult
     * @return \StructType\AddTagResponse
     */
    public function setAddTagResult(?string $addTagResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addTagResult) && !is_string($addTagResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addTagResult, true), gettype($addTagResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addTagResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addTagResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addTagResult, true)), __LINE__);
        }
        $this->AddTagResult = $addTagResult;
        
        return $this;
    }
}
