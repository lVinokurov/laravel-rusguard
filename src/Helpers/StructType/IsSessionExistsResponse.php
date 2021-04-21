<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsSessionExistsResponse StructType
 * @subpackage Structs
 */
class IsSessionExistsResponse extends AbstractStructBase
{
    /**
     * The IsSessionExistsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsSessionExistsResult = null;
    /**
     * Constructor method for IsSessionExistsResponse
     * @uses IsSessionExistsResponse::setIsSessionExistsResult()
     * @param bool $isSessionExistsResult
     */
    public function __construct(?bool $isSessionExistsResult = null)
    {
        $this
            ->setIsSessionExistsResult($isSessionExistsResult);
    }
    /**
     * Get IsSessionExistsResult value
     * @return bool|null
     */
    public function getIsSessionExistsResult(): ?bool
    {
        return $this->IsSessionExistsResult;
    }
    /**
     * Set IsSessionExistsResult value
     * @param bool $isSessionExistsResult
     * @return \StructType\IsSessionExistsResponse
     */
    public function setIsSessionExistsResult(?bool $isSessionExistsResult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSessionExistsResult) && !is_bool($isSessionExistsResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSessionExistsResult, true), gettype($isSessionExistsResult)), __LINE__);
        }
        $this->IsSessionExistsResult = $isSessionExistsResult;
        
        return $this;
    }
}
