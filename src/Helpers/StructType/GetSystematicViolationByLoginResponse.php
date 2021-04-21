<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSystematicViolationByLoginResponse StructType
 * @subpackage Structs
 */
class GetSystematicViolationByLoginResponse extends AbstractStructBase
{
    /**
     * The GetSystematicViolationByLoginResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $GetSystematicViolationByLoginResult = null;
    /**
     * Constructor method for GetSystematicViolationByLoginResponse
     * @uses GetSystematicViolationByLoginResponse::setGetSystematicViolationByLoginResult()
     * @param float $getSystematicViolationByLoginResult
     */
    public function __construct(?float $getSystematicViolationByLoginResult = null)
    {
        $this
            ->setGetSystematicViolationByLoginResult($getSystematicViolationByLoginResult);
    }
    /**
     * Get GetSystematicViolationByLoginResult value
     * @return float|null
     */
    public function getGetSystematicViolationByLoginResult(): ?float
    {
        return $this->GetSystematicViolationByLoginResult;
    }
    /**
     * Set GetSystematicViolationByLoginResult value
     * @param float $getSystematicViolationByLoginResult
     * @return \StructType\GetSystematicViolationByLoginResponse
     */
    public function setGetSystematicViolationByLoginResult(?float $getSystematicViolationByLoginResult = null): self
    {
        // validation for constraint: float
        if (!is_null($getSystematicViolationByLoginResult) && !(is_float($getSystematicViolationByLoginResult) || is_numeric($getSystematicViolationByLoginResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($getSystematicViolationByLoginResult, true), gettype($getSystematicViolationByLoginResult)), __LINE__);
        }
        $this->GetSystematicViolationByLoginResult = $getSystematicViolationByLoginResult;
        
        return $this;
    }
}
