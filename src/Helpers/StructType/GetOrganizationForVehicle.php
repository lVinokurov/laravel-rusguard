<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrganizationForVehicle StructType
 * @subpackage Structs
 */
class GetOrganizationForVehicle extends AbstractStructBase
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
     * Constructor method for GetOrganizationForVehicle
     * @uses GetOrganizationForVehicle::setVehicleId()
     * @param string $vehicleId
     */
    public function __construct(?string $vehicleId = null)
    {
        $this
            ->setVehicleId($vehicleId);
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
     * @return \StructType\GetOrganizationForVehicle
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
}
