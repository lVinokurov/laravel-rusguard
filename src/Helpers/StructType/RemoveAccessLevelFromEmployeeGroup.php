<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveAccessLevelFromEmployeeGroup StructType
 * @subpackage Structs
 */
class RemoveAccessLevelFromEmployeeGroup extends AbstractStructBase
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
     * The accessLevelIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $accessLevelIDs = null;
    /**
     * Constructor method for RemoveAccessLevelFromEmployeeGroup
     * @uses RemoveAccessLevelFromEmployeeGroup::setEmployeeGroupID()
     * @uses RemoveAccessLevelFromEmployeeGroup::setAccessLevelIDs()
     * @param string $employeeGroupID
     * @param \ArrayType\ArrayOfguid $accessLevelIDs
     */
    public function __construct(?string $employeeGroupID = null, ?\ArrayType\ArrayOfguid $accessLevelIDs = null)
    {
        $this
            ->setEmployeeGroupID($employeeGroupID)
            ->setAccessLevelIDs($accessLevelIDs);
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
     * @return \StructType\RemoveAccessLevelFromEmployeeGroup
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
     * Get accessLevelIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getAccessLevelIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->accessLevelIDs) ? $this->accessLevelIDs : null;
    }
    /**
     * Set accessLevelIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $accessLevelIDs
     * @return \StructType\RemoveAccessLevelFromEmployeeGroup
     */
    public function setAccessLevelIDs(?\ArrayType\ArrayOfguid $accessLevelIDs = null): self
    {
        if (is_null($accessLevelIDs) || (is_array($accessLevelIDs) && empty($accessLevelIDs))) {
            unset($this->accessLevelIDs);
        } else {
            $this->accessLevelIDs = $accessLevelIDs;
        }
        
        return $this;
    }
}
