<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedAcsKeyByKeyNumber StructType
 * @subpackage Structs
 */
class GetAssignedAcsKeyByKeyNumber extends AbstractStructBase
{
    /**
     * The keyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $keyNumber = null;
    /**
     * Constructor method for GetAssignedAcsKeyByKeyNumber
     * @uses GetAssignedAcsKeyByKeyNumber::setKeyNumber()
     * @param int $keyNumber
     */
    public function __construct(?int $keyNumber = null)
    {
        $this
            ->setKeyNumber($keyNumber);
    }
    /**
     * Get keyNumber value
     * @return int|null
     */
    public function getKeyNumber(): ?int
    {
        return $this->keyNumber;
    }
    /**
     * Set keyNumber value
     * @param int $keyNumber
     * @return \StructType\GetAssignedAcsKeyByKeyNumber
     */
    public function setKeyNumber(?int $keyNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($keyNumber) && !(is_int($keyNumber) || ctype_digit($keyNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyNumber, true), gettype($keyNumber)), __LINE__);
        }
        $this->keyNumber = $keyNumber;
        
        return $this;
    }
}
