<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmailAddressResponse StructType
 * @subpackage Structs
 */
class AddEmailAddressResponse extends AbstractStructBase
{
    /**
     * The AddEmailAddressResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddEmailAddressResult = null;
    /**
     * Constructor method for AddEmailAddressResponse
     * @uses AddEmailAddressResponse::setAddEmailAddressResult()
     * @param string $addEmailAddressResult
     */
    public function __construct(?string $addEmailAddressResult = null)
    {
        $this
            ->setAddEmailAddressResult($addEmailAddressResult);
    }
    /**
     * Get AddEmailAddressResult value
     * @return string|null
     */
    public function getAddEmailAddressResult(): ?string
    {
        return $this->AddEmailAddressResult;
    }
    /**
     * Set AddEmailAddressResult value
     * @param string $addEmailAddressResult
     * @return \StructType\AddEmailAddressResponse
     */
    public function setAddEmailAddressResult(?string $addEmailAddressResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addEmailAddressResult) && !is_string($addEmailAddressResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addEmailAddressResult, true), gettype($addEmailAddressResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addEmailAddressResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addEmailAddressResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addEmailAddressResult, true)), __LINE__);
        }
        $this->AddEmailAddressResult = $addEmailAddressResult;
        
        return $this;
    }
}
