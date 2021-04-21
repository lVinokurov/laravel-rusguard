<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkZoneVisitorsCount StructType
 * @subpackage Structs
 */
class GetWorkZoneVisitorsCount extends AbstractStructBase
{
    /**
     * The workZoneID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workZoneID = null;
    /**
     * Constructor method for GetWorkZoneVisitorsCount
     * @uses GetWorkZoneVisitorsCount::setWorkZoneID()
     * @param string $workZoneID
     */
    public function __construct(?string $workZoneID = null)
    {
        $this
            ->setWorkZoneID($workZoneID);
    }
    /**
     * Get workZoneID value
     * @return string|null
     */
    public function getWorkZoneID(): ?string
    {
        return $this->workZoneID;
    }
    /**
     * Set workZoneID value
     * @param string $workZoneID
     * @return \StructType\GetWorkZoneVisitorsCount
     */
    public function setWorkZoneID(?string $workZoneID = null): self
    {
        // validation for constraint: string
        if (!is_null($workZoneID) && !is_string($workZoneID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workZoneID, true), gettype($workZoneID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workZoneID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workZoneID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workZoneID, true)), __LINE__);
        }
        $this->workZoneID = $workZoneID;
        
        return $this;
    }
}
