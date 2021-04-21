<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetViolationPlanResponse StructType
 * @subpackage Structs
 */
class SetViolationPlanResponse extends AbstractStructBase
{
    /**
     * The SetViolationPlanResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SetViolationPlanResult = null;
    /**
     * Constructor method for SetViolationPlanResponse
     * @uses SetViolationPlanResponse::setSetViolationPlanResult()
     * @param bool $setViolationPlanResult
     */
    public function __construct(?bool $setViolationPlanResult = null)
    {
        $this
            ->setSetViolationPlanResult($setViolationPlanResult);
    }
    /**
     * Get SetViolationPlanResult value
     * @return bool|null
     */
    public function getSetViolationPlanResult(): ?bool
    {
        return $this->SetViolationPlanResult;
    }
    /**
     * Set SetViolationPlanResult value
     * @param bool $setViolationPlanResult
     * @return \StructType\SetViolationPlanResponse
     */
    public function setSetViolationPlanResult(?bool $setViolationPlanResult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($setViolationPlanResult) && !is_bool($setViolationPlanResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($setViolationPlanResult, true), gettype($setViolationPlanResult)), __LINE__);
        }
        $this->SetViolationPlanResult = $setViolationPlanResult;
        
        return $this;
    }
}
