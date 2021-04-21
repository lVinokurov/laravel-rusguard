<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSystematicViolationResponse StructType
 * @subpackage Structs
 */
class GetSystematicViolationResponse extends AbstractStructBase
{
    /**
     * The GetSystematicViolationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $GetSystematicViolationResult = null;
    /**
     * Constructor method for GetSystematicViolationResponse
     * @uses GetSystematicViolationResponse::setGetSystematicViolationResult()
     * @param float $getSystematicViolationResult
     */
    public function __construct(?float $getSystematicViolationResult = null)
    {
        $this
            ->setGetSystematicViolationResult($getSystematicViolationResult);
    }
    /**
     * Get GetSystematicViolationResult value
     * @return float|null
     */
    public function getGetSystematicViolationResult(): ?float
    {
        return $this->GetSystematicViolationResult;
    }
    /**
     * Set GetSystematicViolationResult value
     * @param float $getSystematicViolationResult
     * @return \StructType\GetSystematicViolationResponse
     */
    public function setGetSystematicViolationResult(?float $getSystematicViolationResult = null): self
    {
        // validation for constraint: float
        if (!is_null($getSystematicViolationResult) && !(is_float($getSystematicViolationResult) || is_numeric($getSystematicViolationResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($getSystematicViolationResult, true), gettype($getSystematicViolationResult)), __LINE__);
        }
        $this->GetSystematicViolationResult = $getSystematicViolationResult;
        
        return $this;
    }
}
