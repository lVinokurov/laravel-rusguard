<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsVehicleSearched StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsVehicleSearched
 * @subpackage Structs
 */
class AcsVehicleSearched extends AbstractStructBase
{
    /**
     * The GroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $GroupID = null;
    /**
     * The VehicleID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $VehicleID = null;
    /**
     * Constructor method for AcsVehicleSearched
     * @uses AcsVehicleSearched::setGroupID()
     * @uses AcsVehicleSearched::setVehicleID()
     * @param string $groupID
     * @param string $vehicleID
     */
    public function __construct(?string $groupID = null, ?string $vehicleID = null)
    {
        $this
            ->setGroupID($groupID)
            ->setVehicleID($vehicleID);
    }
    /**
     * Get GroupID value
     * @return string|null
     */
    public function getGroupID(): ?string
    {
        return $this->GroupID;
    }
    /**
     * Set GroupID value
     * @param string $groupID
     * @return \StructType\AcsVehicleSearched
     */
    public function setGroupID(?string $groupID = null): self
    {
        // validation for constraint: string
        if (!is_null($groupID) && !is_string($groupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupID, true), gettype($groupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($groupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $groupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($groupID, true)), __LINE__);
        }
        $this->GroupID = $groupID;
        
        return $this;
    }
    /**
     * Get VehicleID value
     * @return string|null
     */
    public function getVehicleID(): ?string
    {
        return $this->VehicleID;
    }
    /**
     * Set VehicleID value
     * @param string $vehicleID
     * @return \StructType\AcsVehicleSearched
     */
    public function setVehicleID(?string $vehicleID = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleID) && !is_string($vehicleID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleID, true), gettype($vehicleID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($vehicleID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $vehicleID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($vehicleID, true)), __LINE__);
        }
        $this->VehicleID = $vehicleID;
        
        return $this;
    }
}
