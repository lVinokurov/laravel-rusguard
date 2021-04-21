<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSystematicViolationResponse StructType
 * @subpackage Structs
 */
class SaveSystematicViolationResponse extends AbstractStructBase
{
    /**
     * The SaveSystematicViolationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SaveSystematicViolationResult = null;
    /**
     * Constructor method for SaveSystematicViolationResponse
     * @uses SaveSystematicViolationResponse::setSaveSystematicViolationResult()
     * @param int $saveSystematicViolationResult
     */
    public function __construct(?int $saveSystematicViolationResult = null)
    {
        $this
            ->setSaveSystematicViolationResult($saveSystematicViolationResult);
    }
    /**
     * Get SaveSystematicViolationResult value
     * @return int|null
     */
    public function getSaveSystematicViolationResult(): ?int
    {
        return $this->SaveSystematicViolationResult;
    }
    /**
     * Set SaveSystematicViolationResult value
     * @param int $saveSystematicViolationResult
     * @return \StructType\SaveSystematicViolationResponse
     */
    public function setSaveSystematicViolationResult(?int $saveSystematicViolationResult = null): self
    {
        // validation for constraint: int
        if (!is_null($saveSystematicViolationResult) && !(is_int($saveSystematicViolationResult) || ctype_digit($saveSystematicViolationResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saveSystematicViolationResult, true), gettype($saveSystematicViolationResult)), __LINE__);
        }
        $this->SaveSystematicViolationResult = $saveSystematicViolationResult;
        
        return $this;
    }
}
