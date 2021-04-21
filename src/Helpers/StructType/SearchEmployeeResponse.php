<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEmployeeResponse StructType
 * @subpackage Structs
 */
class SearchEmployeeResponse extends AbstractStructBase
{
    /**
     * The SearchEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SearchEmployeeResult = null;
    /**
     * Constructor method for SearchEmployeeResponse
     * @uses SearchEmployeeResponse::setSearchEmployeeResult()
     * @param int $searchEmployeeResult
     */
    public function __construct(?int $searchEmployeeResult = null)
    {
        $this
            ->setSearchEmployeeResult($searchEmployeeResult);
    }
    /**
     * Get SearchEmployeeResult value
     * @return int|null
     */
    public function getSearchEmployeeResult(): ?int
    {
        return $this->SearchEmployeeResult;
    }
    /**
     * Set SearchEmployeeResult value
     * @param int $searchEmployeeResult
     * @return \StructType\SearchEmployeeResponse
     */
    public function setSearchEmployeeResult(?int $searchEmployeeResult = null): self
    {
        // validation for constraint: int
        if (!is_null($searchEmployeeResult) && !(is_int($searchEmployeeResult) || ctype_digit($searchEmployeeResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searchEmployeeResult, true), gettype($searchEmployeeResult)), __LINE__);
        }
        $this->SearchEmployeeResult = $searchEmployeeResult;
        
        return $this;
    }
}
