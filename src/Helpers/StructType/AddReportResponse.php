<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddReportResponse StructType
 * @subpackage Structs
 */
class AddReportResponse extends AbstractStructBase
{
    /**
     * The AddReportResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddReportResult = null;
    /**
     * Constructor method for AddReportResponse
     * @uses AddReportResponse::setAddReportResult()
     * @param string $addReportResult
     */
    public function __construct(?string $addReportResult = null)
    {
        $this
            ->setAddReportResult($addReportResult);
    }
    /**
     * Get AddReportResult value
     * @return string|null
     */
    public function getAddReportResult(): ?string
    {
        return $this->AddReportResult;
    }
    /**
     * Set AddReportResult value
     * @param string $addReportResult
     * @return \StructType\AddReportResponse
     */
    public function setAddReportResult(?string $addReportResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addReportResult) && !is_string($addReportResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addReportResult, true), gettype($addReportResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addReportResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addReportResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addReportResult, true)), __LINE__);
        }
        $this->AddReportResult = $addReportResult;
        
        return $this;
    }
}
