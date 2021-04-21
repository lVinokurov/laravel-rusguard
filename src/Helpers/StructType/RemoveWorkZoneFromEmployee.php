<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveWorkZoneFromEmployee StructType
 * @subpackage Structs
 */
class RemoveWorkZoneFromEmployee extends AbstractStructBase
{
    /**
     * The employeeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeID = null;
    /**
     * The workZoneIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $workZoneIDs = null;
    /**
     * Constructor method for RemoveWorkZoneFromEmployee
     * @uses RemoveWorkZoneFromEmployee::setEmployeeID()
     * @uses RemoveWorkZoneFromEmployee::setWorkZoneIDs()
     * @param string $employeeID
     * @param \ArrayType\ArrayOfguid $workZoneIDs
     */
    public function __construct(?string $employeeID = null, ?\ArrayType\ArrayOfguid $workZoneIDs = null)
    {
        $this
            ->setEmployeeID($employeeID)
            ->setWorkZoneIDs($workZoneIDs);
    }
    /**
     * Get employeeID value
     * @return string|null
     */
    public function getEmployeeID(): ?string
    {
        return $this->employeeID;
    }
    /**
     * Set employeeID value
     * @param string $employeeID
     * @return \StructType\RemoveWorkZoneFromEmployee
     */
    public function setEmployeeID(?string $employeeID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeID) && !is_string($employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeID, true), gettype($employeeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeID, true)), __LINE__);
        }
        $this->employeeID = $employeeID;
        
        return $this;
    }
    /**
     * Get workZoneIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getWorkZoneIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->workZoneIDs) ? $this->workZoneIDs : null;
    }
    /**
     * Set workZoneIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $workZoneIDs
     * @return \StructType\RemoveWorkZoneFromEmployee
     */
    public function setWorkZoneIDs(?\ArrayType\ArrayOfguid $workZoneIDs = null): self
    {
        if (is_null($workZoneIDs) || (is_array($workZoneIDs) && empty($workZoneIDs))) {
            unset($this->workZoneIDs);
        } else {
            $this->workZoneIDs = $workZoneIDs;
        }
        
        return $this;
    }
}
