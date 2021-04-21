<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkZonesAccessPoints StructType
 * @subpackage Structs
 */
class GetWorkZonesAccessPoints extends AbstractStructBase
{
    /**
     * The workZoneId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workZoneId = null;
    /**
     * Constructor method for GetWorkZonesAccessPoints
     * @uses GetWorkZonesAccessPoints::setWorkZoneId()
     * @param string $workZoneId
     */
    public function __construct(?string $workZoneId = null)
    {
        $this
            ->setWorkZoneId($workZoneId);
    }
    /**
     * Get workZoneId value
     * @return string|null
     */
    public function getWorkZoneId(): ?string
    {
        return $this->workZoneId;
    }
    /**
     * Set workZoneId value
     * @param string $workZoneId
     * @return \StructType\GetWorkZonesAccessPoints
     */
    public function setWorkZoneId(?string $workZoneId = null): self
    {
        // validation for constraint: string
        if (!is_null($workZoneId) && !is_string($workZoneId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workZoneId, true), gettype($workZoneId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workZoneId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workZoneId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workZoneId, true)), __LINE__);
        }
        $this->workZoneId = $workZoneId;
        
        return $this;
    }
}
