<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncidentArchiveReport StructType
 * @subpackage Structs
 */
class GetIncidentArchiveReport extends AbstractStructBase
{
    /**
     * The begin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $begin = null;
    /**
     * The end
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * Constructor method for GetIncidentArchiveReport
     * @uses GetIncidentArchiveReport::setBegin()
     * @uses GetIncidentArchiveReport::setEnd()
     * @param string $begin
     * @param string $end
     */
    public function __construct(?string $begin = null, ?string $end = null)
    {
        $this
            ->setBegin($begin)
            ->setEnd($end);
    }
    /**
     * Get begin value
     * @return string|null
     */
    public function getBegin(): ?string
    {
        return $this->begin;
    }
    /**
     * Set begin value
     * @param string $begin
     * @return \StructType\GetIncidentArchiveReport
     */
    public function setBegin(?string $begin = null): self
    {
        // validation for constraint: string
        if (!is_null($begin) && !is_string($begin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begin, true), gettype($begin)), __LINE__);
        }
        $this->begin = $begin;
        
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \StructType\GetIncidentArchiveReport
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        
        return $this;
    }
}
