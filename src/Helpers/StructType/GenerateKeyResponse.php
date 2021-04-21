<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateKeyResponse StructType
 * @subpackage Structs
 */
class GenerateKeyResponse extends AbstractStructBase
{
    /**
     * The GenerateKeyResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $GenerateKeyResult = null;
    /**
     * Constructor method for GenerateKeyResponse
     * @uses GenerateKeyResponse::setGenerateKeyResult()
     * @param int $generateKeyResult
     */
    public function __construct(?int $generateKeyResult = null)
    {
        $this
            ->setGenerateKeyResult($generateKeyResult);
    }
    /**
     * Get GenerateKeyResult value
     * @return int|null
     */
    public function getGenerateKeyResult(): ?int
    {
        return $this->GenerateKeyResult;
    }
    /**
     * Set GenerateKeyResult value
     * @param int $generateKeyResult
     * @return \StructType\GenerateKeyResponse
     */
    public function setGenerateKeyResult(?int $generateKeyResult = null): self
    {
        // validation for constraint: int
        if (!is_null($generateKeyResult) && !(is_int($generateKeyResult) || ctype_digit($generateKeyResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($generateKeyResult, true), gettype($generateKeyResult)), __LINE__);
        }
        $this->GenerateKeyResult = $generateKeyResult;
        
        return $this;
    }
}
