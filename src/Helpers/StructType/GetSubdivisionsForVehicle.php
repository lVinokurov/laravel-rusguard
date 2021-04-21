<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSubdivisionsForVehicle StructType
 * @subpackage Structs
 */
class GetSubdivisionsForVehicle extends AbstractStructBase
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
     * The organizationId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $organizationId = null;
    /**
     * Constructor method for GetSubdivisionsForVehicle
     * @uses GetSubdivisionsForVehicle::setVehicleId()
     * @uses GetSubdivisionsForVehicle::setOrganizationId()
     * @param string $vehicleId
     * @param string $organizationId
     */
    public function __construct(?string $vehicleId = null, ?string $organizationId = null)
    {
        $this
            ->setVehicleId($vehicleId)
            ->setOrganizationId($organizationId);
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
     * @return \StructType\GetSubdivisionsForVehicle
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
     * Get organizationId value
     * @return string|null
     */
    public function getOrganizationId(): ?string
    {
        return $this->organizationId;
    }
    /**
     * Set organizationId value
     * @param string $organizationId
     * @return \StructType\GetSubdivisionsForVehicle
     */
    public function setOrganizationId(?string $organizationId = null): self
    {
        // validation for constraint: string
        if (!is_null($organizationId) && !is_string($organizationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizationId, true), gettype($organizationId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($organizationId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $organizationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($organizationId, true)), __LINE__);
        }
        $this->organizationId = $organizationId;
        
        return $this;
    }
}
