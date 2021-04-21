<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmailDistributionAddressResponse StructType
 * @subpackage Structs
 */
class AddEmailDistributionAddressResponse extends AbstractStructBase
{
    /**
     * The AddEmailDistributionAddressResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddEmailDistributionAddressResult = null;
    /**
     * Constructor method for AddEmailDistributionAddressResponse
     * @uses AddEmailDistributionAddressResponse::setAddEmailDistributionAddressResult()
     * @param string $addEmailDistributionAddressResult
     */
    public function __construct(?string $addEmailDistributionAddressResult = null)
    {
        $this
            ->setAddEmailDistributionAddressResult($addEmailDistributionAddressResult);
    }
    /**
     * Get AddEmailDistributionAddressResult value
     * @return string|null
     */
    public function getAddEmailDistributionAddressResult(): ?string
    {
        return $this->AddEmailDistributionAddressResult;
    }
    /**
     * Set AddEmailDistributionAddressResult value
     * @param string $addEmailDistributionAddressResult
     * @return \StructType\AddEmailDistributionAddressResponse
     */
    public function setAddEmailDistributionAddressResult(?string $addEmailDistributionAddressResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addEmailDistributionAddressResult) && !is_string($addEmailDistributionAddressResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addEmailDistributionAddressResult, true), gettype($addEmailDistributionAddressResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addEmailDistributionAddressResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addEmailDistributionAddressResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addEmailDistributionAddressResult, true)), __LINE__);
        }
        $this->AddEmailDistributionAddressResult = $addEmailDistributionAddressResult;
        
        return $this;
    }
}
