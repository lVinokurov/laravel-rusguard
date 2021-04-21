<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddFilterTagResponse StructType
 * @subpackage Structs
 */
class AddFilterTagResponse extends AbstractStructBase
{
    /**
     * The AddFilterTagResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddFilterTagResult = null;
    /**
     * Constructor method for AddFilterTagResponse
     * @uses AddFilterTagResponse::setAddFilterTagResult()
     * @param string $addFilterTagResult
     */
    public function __construct(?string $addFilterTagResult = null)
    {
        $this
            ->setAddFilterTagResult($addFilterTagResult);
    }
    /**
     * Get AddFilterTagResult value
     * @return string|null
     */
    public function getAddFilterTagResult(): ?string
    {
        return $this->AddFilterTagResult;
    }
    /**
     * Set AddFilterTagResult value
     * @param string $addFilterTagResult
     * @return \StructType\AddFilterTagResponse
     */
    public function setAddFilterTagResult(?string $addFilterTagResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addFilterTagResult) && !is_string($addFilterTagResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addFilterTagResult, true), gettype($addFilterTagResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addFilterTagResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addFilterTagResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addFilterTagResult, true)), __LINE__);
        }
        $this->AddFilterTagResult = $addFilterTagResult;
        
        return $this;
    }
}
