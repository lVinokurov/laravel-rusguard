<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetOrganization2VehicleChain StructType
 * @subpackage Structs
 */
class SetOrganization2VehicleChain extends AbstractStructBase
{
    /**
     * The vehicleID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $vehicleID = null;
    /**
     * The organizationAssignments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployee2OrganizationAssignment|null
     */
    protected ?\ArrayType\ArrayOfEmployee2OrganizationAssignment $organizationAssignments = null;
    /**
     * Constructor method for SetOrganization2VehicleChain
     * @uses SetOrganization2VehicleChain::setVehicleID()
     * @uses SetOrganization2VehicleChain::setOrganizationAssignments()
     * @param string $vehicleID
     * @param \ArrayType\ArrayOfEmployee2OrganizationAssignment $organizationAssignments
     */
    public function __construct(?string $vehicleID = null, ?\ArrayType\ArrayOfEmployee2OrganizationAssignment $organizationAssignments = null)
    {
        $this
            ->setVehicleID($vehicleID)
            ->setOrganizationAssignments($organizationAssignments);
    }
    /**
     * Get vehicleID value
     * @return string|null
     */
    public function getVehicleID(): ?string
    {
        return $this->vehicleID;
    }
    /**
     * Set vehicleID value
     * @param string $vehicleID
     * @return \StructType\SetOrganization2VehicleChain
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
        $this->vehicleID = $vehicleID;
        
        return $this;
    }
    /**
     * Get organizationAssignments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployee2OrganizationAssignment|null
     */
    public function getOrganizationAssignments(): ?\ArrayType\ArrayOfEmployee2OrganizationAssignment
    {
        return isset($this->organizationAssignments) ? $this->organizationAssignments : null;
    }
    /**
     * Set organizationAssignments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployee2OrganizationAssignment $organizationAssignments
     * @return \StructType\SetOrganization2VehicleChain
     */
    public function setOrganizationAssignments(?\ArrayType\ArrayOfEmployee2OrganizationAssignment $organizationAssignments = null): self
    {
        if (is_null($organizationAssignments) || (is_array($organizationAssignments) && empty($organizationAssignments))) {
            unset($this->organizationAssignments);
        } else {
            $this->organizationAssignments = $organizationAssignments;
        }
        
        return $this;
    }
}
