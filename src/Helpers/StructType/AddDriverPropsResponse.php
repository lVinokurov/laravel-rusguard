<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDriverPropsResponse StructType
 * @subpackage Structs
 */
class AddDriverPropsResponse extends AbstractStructBase
{
    /**
     * The AddDriverPropsResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddDriverPropsResult = null;
    /**
     * Constructor method for AddDriverPropsResponse
     * @uses AddDriverPropsResponse::setAddDriverPropsResult()
     * @param string $addDriverPropsResult
     */
    public function __construct(?string $addDriverPropsResult = null)
    {
        $this
            ->setAddDriverPropsResult($addDriverPropsResult);
    }
    /**
     * Get AddDriverPropsResult value
     * @return string|null
     */
    public function getAddDriverPropsResult(): ?string
    {
        return $this->AddDriverPropsResult;
    }
    /**
     * Set AddDriverPropsResult value
     * @param string $addDriverPropsResult
     * @return \StructType\AddDriverPropsResponse
     */
    public function setAddDriverPropsResult(?string $addDriverPropsResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addDriverPropsResult) && !is_string($addDriverPropsResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addDriverPropsResult, true), gettype($addDriverPropsResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addDriverPropsResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addDriverPropsResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addDriverPropsResult, true)), __LINE__);
        }
        $this->AddDriverPropsResult = $addDriverPropsResult;
        
        return $this;
    }
}
