<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkZonesAccessPointSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkZonesAccessPointSaveData
 * @subpackage Structs
 */
class WorkZonesAccessPointSaveData extends WorkZonesAccessPointBase
{
    /**
     * The DriverID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DriverID = null;
    /**
     * Constructor method for WorkZonesAccessPointSaveData
     * @uses WorkZonesAccessPointSaveData::setDriverID()
     * @param string $driverID
     */
    public function __construct(?string $driverID = null)
    {
        $this
            ->setDriverID($driverID);
    }
    /**
     * Get DriverID value
     * @return string|null
     */
    public function getDriverID(): ?string
    {
        return $this->DriverID;
    }
    /**
     * Set DriverID value
     * @param string $driverID
     * @return \StructType\WorkZonesAccessPointSaveData
     */
    public function setDriverID(?string $driverID = null): self
    {
        // validation for constraint: string
        if (!is_null($driverID) && !is_string($driverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverID, true), gettype($driverID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($driverID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $driverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($driverID, true)), __LINE__);
        }
        $this->DriverID = $driverID;
        
        return $this;
    }
}
