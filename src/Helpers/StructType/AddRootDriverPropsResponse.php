<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRootDriverPropsResponse StructType
 * @subpackage Structs
 */
class AddRootDriverPropsResponse extends AbstractStructBase
{
    /**
     * The AddRootDriverPropsResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddRootDriverPropsResult = null;
    /**
     * Constructor method for AddRootDriverPropsResponse
     * @uses AddRootDriverPropsResponse::setAddRootDriverPropsResult()
     * @param string $addRootDriverPropsResult
     */
    public function __construct(?string $addRootDriverPropsResult = null)
    {
        $this
            ->setAddRootDriverPropsResult($addRootDriverPropsResult);
    }
    /**
     * Get AddRootDriverPropsResult value
     * @return string|null
     */
    public function getAddRootDriverPropsResult(): ?string
    {
        return $this->AddRootDriverPropsResult;
    }
    /**
     * Set AddRootDriverPropsResult value
     * @param string $addRootDriverPropsResult
     * @return \StructType\AddRootDriverPropsResponse
     */
    public function setAddRootDriverPropsResult(?string $addRootDriverPropsResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addRootDriverPropsResult) && !is_string($addRootDriverPropsResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addRootDriverPropsResult, true), gettype($addRootDriverPropsResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addRootDriverPropsResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addRootDriverPropsResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addRootDriverPropsResult, true)), __LINE__);
        }
        $this->AddRootDriverPropsResult = $addRootDriverPropsResult;
        
        return $this;
    }
}
