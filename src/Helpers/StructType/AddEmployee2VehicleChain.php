<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmployee2VehicleChain StructType
 * @subpackage Structs
 */
class AddEmployee2VehicleChain extends AbstractStructBase
{
    /**
     * The employeeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeId = null;
    /**
     * The vehicles
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployeesVehicle|null
     */
    protected ?\ArrayType\ArrayOfEmployeesVehicle $vehicles = null;
    /**
     * Constructor method for AddEmployee2VehicleChain
     * @uses AddEmployee2VehicleChain::setEmployeeId()
     * @uses AddEmployee2VehicleChain::setVehicles()
     * @param string $employeeId
     * @param \ArrayType\ArrayOfEmployeesVehicle $vehicles
     */
    public function __construct(?string $employeeId = null, ?\ArrayType\ArrayOfEmployeesVehicle $vehicles = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setVehicles($vehicles);
    }
    /**
     * Get employeeId value
     * @return string|null
     */
    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }
    /**
     * Set employeeId value
     * @param string $employeeId
     * @return \StructType\AddEmployee2VehicleChain
     */
    public function setEmployeeId(?string $employeeId = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeId) && !is_string($employeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeId, true), gettype($employeeId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeId, true)), __LINE__);
        }
        $this->employeeId = $employeeId;
        
        return $this;
    }
    /**
     * Get vehicles value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployeesVehicle|null
     */
    public function getVehicles(): ?\ArrayType\ArrayOfEmployeesVehicle
    {
        return isset($this->vehicles) ? $this->vehicles : null;
    }
    /**
     * Set vehicles value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployeesVehicle $vehicles
     * @return \StructType\AddEmployee2VehicleChain
     */
    public function setVehicles(?\ArrayType\ArrayOfEmployeesVehicle $vehicles = null): self
    {
        if (is_null($vehicles) || (is_array($vehicles) && empty($vehicles))) {
            unset($this->vehicles);
        } else {
            $this->vehicles = $vehicles;
        }
        
        return $this;
    }
}
