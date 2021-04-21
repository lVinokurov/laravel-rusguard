<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddPhoneNumberResponse StructType
 * @subpackage Structs
 */
class AddPhoneNumberResponse extends AbstractStructBase
{
    /**
     * The AddPhoneNumberResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddPhoneNumberResult = null;
    /**
     * Constructor method for AddPhoneNumberResponse
     * @uses AddPhoneNumberResponse::setAddPhoneNumberResult()
     * @param string $addPhoneNumberResult
     */
    public function __construct(?string $addPhoneNumberResult = null)
    {
        $this
            ->setAddPhoneNumberResult($addPhoneNumberResult);
    }
    /**
     * Get AddPhoneNumberResult value
     * @return string|null
     */
    public function getAddPhoneNumberResult(): ?string
    {
        return $this->AddPhoneNumberResult;
    }
    /**
     * Set AddPhoneNumberResult value
     * @param string $addPhoneNumberResult
     * @return \StructType\AddPhoneNumberResponse
     */
    public function setAddPhoneNumberResult(?string $addPhoneNumberResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addPhoneNumberResult) && !is_string($addPhoneNumberResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addPhoneNumberResult, true), gettype($addPhoneNumberResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addPhoneNumberResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addPhoneNumberResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addPhoneNumberResult, true)), __LINE__);
        }
        $this->AddPhoneNumberResult = $addPhoneNumberResult;
        
        return $this;
    }
}
