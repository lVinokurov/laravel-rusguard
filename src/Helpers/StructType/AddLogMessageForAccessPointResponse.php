<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddLogMessageForAccessPointResponse StructType
 * @subpackage Structs
 */
class AddLogMessageForAccessPointResponse extends AbstractStructBase
{
    /**
     * The AddLogMessageForAccessPointResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AddLogMessageForAccessPointResult = null;
    /**
     * Constructor method for AddLogMessageForAccessPointResponse
     * @uses AddLogMessageForAccessPointResponse::setAddLogMessageForAccessPointResult()
     * @param int $addLogMessageForAccessPointResult
     */
    public function __construct(?int $addLogMessageForAccessPointResult = null)
    {
        $this
            ->setAddLogMessageForAccessPointResult($addLogMessageForAccessPointResult);
    }
    /**
     * Get AddLogMessageForAccessPointResult value
     * @return int|null
     */
    public function getAddLogMessageForAccessPointResult(): ?int
    {
        return $this->AddLogMessageForAccessPointResult;
    }
    /**
     * Set AddLogMessageForAccessPointResult value
     * @param int $addLogMessageForAccessPointResult
     * @return \StructType\AddLogMessageForAccessPointResponse
     */
    public function setAddLogMessageForAccessPointResult(?int $addLogMessageForAccessPointResult = null): self
    {
        // validation for constraint: int
        if (!is_null($addLogMessageForAccessPointResult) && !(is_int($addLogMessageForAccessPointResult) || ctype_digit($addLogMessageForAccessPointResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addLogMessageForAccessPointResult, true), gettype($addLogMessageForAccessPointResult)), __LINE__);
        }
        $this->AddLogMessageForAccessPointResult = $addLogMessageForAccessPointResult;
        
        return $this;
    }
}
