<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAccessLevelsToEmployeeGroupWithPeriod StructType
 * @subpackage Structs
 */
class AddAccessLevelsToEmployeeGroupWithPeriod extends AbstractStructBase
{
    /**
     * The employeeGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeGroupID = null;
    /**
     * The accessLevelInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW|null
     */
    protected ?\ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW $accessLevelInfo = null;
    /**
     * Constructor method for AddAccessLevelsToEmployeeGroupWithPeriod
     * @uses AddAccessLevelsToEmployeeGroupWithPeriod::setEmployeeGroupID()
     * @uses AddAccessLevelsToEmployeeGroupWithPeriod::setAccessLevelInfo()
     * @param string $employeeGroupID
     * @param \ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW $accessLevelInfo
     */
    public function __construct(?string $employeeGroupID = null, ?\ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW $accessLevelInfo = null)
    {
        $this
            ->setEmployeeGroupID($employeeGroupID)
            ->setAccessLevelInfo($accessLevelInfo);
    }
    /**
     * Get employeeGroupID value
     * @return string|null
     */
    public function getEmployeeGroupID(): ?string
    {
        return $this->employeeGroupID;
    }
    /**
     * Set employeeGroupID value
     * @param string $employeeGroupID
     * @return \StructType\AddAccessLevelsToEmployeeGroupWithPeriod
     */
    public function setEmployeeGroupID(?string $employeeGroupID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupID) && !is_string($employeeGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupID, true), gettype($employeeGroupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeGroupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeGroupID, true)), __LINE__);
        }
        $this->employeeGroupID = $employeeGroupID;
        
        return $this;
    }
    /**
     * Get accessLevelInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW|null
     */
    public function getAccessLevelInfo(): ?\ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW
    {
        return isset($this->accessLevelInfo) ? $this->accessLevelInfo : null;
    }
    /**
     * Set accessLevelInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW $accessLevelInfo
     * @return \StructType\AddAccessLevelsToEmployeeGroupWithPeriod
     */
    public function setAccessLevelInfo(?\ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW $accessLevelInfo = null): self
    {
        if (is_null($accessLevelInfo) || (is_array($accessLevelInfo) && empty($accessLevelInfo))) {
            unset($this->accessLevelInfo);
        } else {
            $this->accessLevelInfo = $accessLevelInfo;
        }
        
        return $this;
    }
}
