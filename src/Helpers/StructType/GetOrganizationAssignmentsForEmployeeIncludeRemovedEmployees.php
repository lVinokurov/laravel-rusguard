<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees StructType
 * @subpackage Structs
 */
class GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees extends AbstractStructBase
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
     * The includeRemovedEmployees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeRemovedEmployees = null;
    /**
     * Constructor method for
     * GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees
     * @uses GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees::setVehicleId()
     * @uses GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees::setIncludeRemovedEmployees()
     * @param string $vehicleId
     * @param bool $includeRemovedEmployees
     */
    public function __construct(?string $vehicleId = null, ?bool $includeRemovedEmployees = null)
    {
        $this
            ->setVehicleId($vehicleId)
            ->setIncludeRemovedEmployees($includeRemovedEmployees);
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
     * @return \StructType\GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees
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
     * Get includeRemovedEmployees value
     * @return bool|null
     */
    public function getIncludeRemovedEmployees(): ?bool
    {
        return $this->includeRemovedEmployees;
    }
    /**
     * Set includeRemovedEmployees value
     * @param bool $includeRemovedEmployees
     * @return \StructType\GetOrganizationAssignmentsForEmployeeIncludeRemovedEmployees
     */
    public function setIncludeRemovedEmployees(?bool $includeRemovedEmployees = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeRemovedEmployees) && !is_bool($includeRemovedEmployees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeRemovedEmployees, true), gettype($includeRemovedEmployees)), __LINE__);
        }
        $this->includeRemovedEmployees = $includeRemovedEmployees;
        
        return $this;
    }
}
