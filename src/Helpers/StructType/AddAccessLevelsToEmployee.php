<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAccessLevelsToEmployee StructType
 * @subpackage Structs
 */
class AddAccessLevelsToEmployee extends AbstractStructBase
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
     * The accessLevelIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $accessLevelIDs = null;
    /**
     * Constructor method for AddAccessLevelsToEmployee
     * @uses AddAccessLevelsToEmployee::setEmployeeID()
     * @uses AddAccessLevelsToEmployee::setAccessLevelIDs()
     * @param string $employeeID
     * @param \ArrayType\ArrayOfguid $accessLevelIDs
     */
    public function __construct(?string $employeeID = null, ?\ArrayType\ArrayOfguid $accessLevelIDs = null)
    {
        $this
            ->setEmployeeID($employeeID)
            ->setAccessLevelIDs($accessLevelIDs);
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
     * @return \StructType\AddAccessLevelsToEmployee
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
     * @return \StructType\AddAccessLevelsToEmployee
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
