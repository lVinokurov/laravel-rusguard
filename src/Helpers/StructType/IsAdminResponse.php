<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsAdminResponse StructType
 * @subpackage Structs
 */
class IsAdminResponse extends AbstractStructBase
{
    /**
     * The IsAdminResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAdminResult = null;
    /**
     * Constructor method for IsAdminResponse
     * @uses IsAdminResponse::setIsAdminResult()
     * @param bool $isAdminResult
     */
    public function __construct(?bool $isAdminResult = null)
    {
        $this
            ->setIsAdminResult($isAdminResult);
    }
    /**
     * Get IsAdminResult value
     * @return bool|null
     */
    public function getIsAdminResult(): ?bool
    {
        return $this->IsAdminResult;
    }
    /**
     * Set IsAdminResult value
     * @param bool $isAdminResult
     * @return \StructType\IsAdminResponse
     */
    public function setIsAdminResult(?bool $isAdminResult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAdminResult) && !is_bool($isAdminResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAdminResult, true), gettype($isAdminResult)), __LINE__);
        }
        $this->IsAdminResult = $isAdminResult;
        
        return $this;
    }
}
