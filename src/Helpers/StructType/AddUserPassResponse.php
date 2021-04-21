<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddUserPassResponse StructType
 * @subpackage Structs
 */
class AddUserPassResponse extends AbstractStructBase
{
    /**
     * The AddUserPassResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddUserPassResult = null;
    /**
     * Constructor method for AddUserPassResponse
     * @uses AddUserPassResponse::setAddUserPassResult()
     * @param string $addUserPassResult
     */
    public function __construct(?string $addUserPassResult = null)
    {
        $this
            ->setAddUserPassResult($addUserPassResult);
    }
    /**
     * Get AddUserPassResult value
     * @return string|null
     */
    public function getAddUserPassResult(): ?string
    {
        return $this->AddUserPassResult;
    }
    /**
     * Set AddUserPassResult value
     * @param string $addUserPassResult
     * @return \StructType\AddUserPassResponse
     */
    public function setAddUserPassResult(?string $addUserPassResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addUserPassResult) && !is_string($addUserPassResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addUserPassResult, true), gettype($addUserPassResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addUserPassResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addUserPassResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addUserPassResult, true)), __LINE__);
        }
        $this->AddUserPassResult = $addUserPassResult;
        
        return $this;
    }
}
