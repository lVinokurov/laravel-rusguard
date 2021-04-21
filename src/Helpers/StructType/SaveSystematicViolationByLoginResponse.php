<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSystematicViolationByLoginResponse StructType
 * @subpackage Structs
 */
class SaveSystematicViolationByLoginResponse extends AbstractStructBase
{
    /**
     * The SaveSystematicViolationByLoginResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SaveSystematicViolationByLoginResult = null;
    /**
     * Constructor method for SaveSystematicViolationByLoginResponse
     * @uses SaveSystematicViolationByLoginResponse::setSaveSystematicViolationByLoginResult()
     * @param int $saveSystematicViolationByLoginResult
     */
    public function __construct(?int $saveSystematicViolationByLoginResult = null)
    {
        $this
            ->setSaveSystematicViolationByLoginResult($saveSystematicViolationByLoginResult);
    }
    /**
     * Get SaveSystematicViolationByLoginResult value
     * @return int|null
     */
    public function getSaveSystematicViolationByLoginResult(): ?int
    {
        return $this->SaveSystematicViolationByLoginResult;
    }
    /**
     * Set SaveSystematicViolationByLoginResult value
     * @param int $saveSystematicViolationByLoginResult
     * @return \StructType\SaveSystematicViolationByLoginResponse
     */
    public function setSaveSystematicViolationByLoginResult(?int $saveSystematicViolationByLoginResult = null): self
    {
        // validation for constraint: int
        if (!is_null($saveSystematicViolationByLoginResult) && !(is_int($saveSystematicViolationByLoginResult) || ctype_digit($saveSystematicViolationByLoginResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saveSystematicViolationByLoginResult, true), gettype($saveSystematicViolationByLoginResult)), __LINE__);
        }
        $this->SaveSystematicViolationByLoginResult = $saveSystematicViolationByLoginResult;
        
        return $this;
    }
}
