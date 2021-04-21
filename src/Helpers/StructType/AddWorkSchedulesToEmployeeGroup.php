<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWorkSchedulesToEmployeeGroup StructType
 * @subpackage Structs
 */
class AddWorkSchedulesToEmployeeGroup extends AbstractStructBase
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
     * The workScheduleIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $workScheduleIDs = null;
    /**
     * Constructor method for AddWorkSchedulesToEmployeeGroup
     * @uses AddWorkSchedulesToEmployeeGroup::setEmployeeGroupID()
     * @uses AddWorkSchedulesToEmployeeGroup::setWorkScheduleIDs()
     * @param string $employeeGroupID
     * @param \ArrayType\ArrayOfguid $workScheduleIDs
     */
    public function __construct(?string $employeeGroupID = null, ?\ArrayType\ArrayOfguid $workScheduleIDs = null)
    {
        $this
            ->setEmployeeGroupID($employeeGroupID)
            ->setWorkScheduleIDs($workScheduleIDs);
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
     * @return \StructType\AddWorkSchedulesToEmployeeGroup
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
     * Get workScheduleIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getWorkScheduleIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->workScheduleIDs) ? $this->workScheduleIDs : null;
    }
    /**
     * Set workScheduleIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $workScheduleIDs
     * @return \StructType\AddWorkSchedulesToEmployeeGroup
     */
    public function setWorkScheduleIDs(?\ArrayType\ArrayOfguid $workScheduleIDs = null): self
    {
        if (is_null($workScheduleIDs) || (is_array($workScheduleIDs) && empty($workScheduleIDs))) {
            unset($this->workScheduleIDs);
        } else {
            $this->workScheduleIDs = $workScheduleIDs;
        }
        
        return $this;
    }
}
