<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrganizationAssignmentsForVehicle StructType
 * @subpackage Structs
 */
class GetOrganizationAssignmentsForVehicle extends AbstractStructBase
{
    /**
     * The vehicleId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $vehicleId = null;
    /**
     * The includeRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeRemoved = null;
    /**
     * Constructor method for GetOrganizationAssignmentsForVehicle
     * @uses GetOrganizationAssignmentsForVehicle::setVehicleId()
     * @uses GetOrganizationAssignmentsForVehicle::setIncludeRemoved()
     * @param string $vehicleId
     * @param bool $includeRemoved
     */
    public function __construct(?string $vehicleId = null, ?bool $includeRemoved = null)
    {
        $this
            ->setVehicleId($vehicleId)
            ->setIncludeRemoved($includeRemoved);
    }
    /**
     * Get vehicleId value
     * @return string|null
     */
    public function getVehicleId(): ?string
    {
        return $this->vehicleId;
    }
    /**
     * Set vehicleId value
     * @param string $vehicleId
     * @return \StructType\GetOrganizationAssignmentsForVehicle
     */
    public function setVehicleId(?string $vehicleId = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleId) && !is_string($vehicleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleId, true), gettype($vehicleId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($vehicleId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $vehicleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($vehicleId, true)), __LINE__);
        }
        $this->vehicleId = $vehicleId;
        
        return $this;
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
     * @return \StructType\GetOrganizationAssignmentsForVehicle
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
