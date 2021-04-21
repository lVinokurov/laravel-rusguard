<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveAllEmployee2VehicleChainForEmployee StructType
 * @subpackage Structs
 */
class RemoveAllEmployee2VehicleChainForEmployee extends AbstractStructBase
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
     * Constructor method for RemoveAllEmployee2VehicleChainForEmployee
     * @uses RemoveAllEmployee2VehicleChainForEmployee::setEmployeeId()
     * @param string $employeeId
     */
    public function __construct(?string $employeeId = null)
    {
        $this
            ->setEmployeeId($employeeId);
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
     * @return \StructType\RemoveAllEmployee2VehicleChainForEmployee
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
}
