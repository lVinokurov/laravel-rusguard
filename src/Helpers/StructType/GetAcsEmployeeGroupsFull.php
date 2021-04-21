<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupsFull StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupsFull extends AbstractStructBase
{
    /**
     * The includeRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeRemoved = null;
    /**
     * Constructor method for GetAcsEmployeeGroupsFull
     * @uses GetAcsEmployeeGroupsFull::setIncludeRemoved()
     * @param bool $includeRemoved
     */
    public function __construct(?bool $includeRemoved = null)
    {
        $this
            ->setIncludeRemoved($includeRemoved);
    }
    /**
     * Get includeRemoved value
     * @return bool|null
     */
    public function getIncludeRemoved(): ?bool
    {
        return $this->includeRemoved;
    }
    /**
     * Set includeRemoved value
     * @param bool $includeRemoved
     * @return \StructType\GetAcsEmployeeGroupsFull
     */
    public function setIncludeRemoved(?bool $includeRemoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeRemoved) && !is_bool($includeRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeRemoved, true), gettype($includeRemoved)), __LINE__);
        }
        $this->includeRemoved = $includeRemoved;
        
        return $this;
    }
}
