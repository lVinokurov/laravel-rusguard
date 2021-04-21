<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectResponse StructType
 * @subpackage Structs
 */
class ConnectResponse extends AbstractStructBase
{
    /**
     * The ConnectResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ConnectResult = null;
    /**
     * Constructor method for ConnectResponse
     * @uses ConnectResponse::setConnectResult()
     * @param string $connectResult
     */
    public function __construct(?string $connectResult = null)
    {
        $this
            ->setConnectResult($connectResult);
    }
    /**
     * Get ConnectResult value
     * @return string|null
     */
    public function getConnectResult(): ?string
    {
        return $this->ConnectResult;
    }
    /**
     * Set ConnectResult value
     * @param string $connectResult
     * @return \StructType\ConnectResponse
     */
    public function setConnectResult(?string $connectResult = null): self
    {
        // validation for constraint: string
        if (!is_null($connectResult) && !is_string($connectResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectResult, true), gettype($connectResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($connectResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $connectResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($connectResult, true)), __LINE__);
        }
        $this->ConnectResult = $connectResult;
        
        return $this;
    }
}
