<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAccessLevelsToEmployeeWithPeriod StructType
 * @subpackage Structs
 */
class AddAccessLevelsToEmployeeWithPeriod extends AbstractStructBase
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
     * The accessLevelInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW|null
     */
    protected ?\ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW $accessLevelInfo = null;
    /**
     * The partOfCreateOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $partOfCreateOperation = null;
    /**
     * Constructor method for AddAccessLevelsToEmployeeWithPeriod
     * @uses AddAccessLevelsToEmployeeWithPeriod::setEmployeeID()
     * @uses AddAccessLevelsToEmployeeWithPeriod::setAccessLevelInfo()
     * @uses AddAccessLevelsToEmployeeWithPeriod::setPartOfCreateOperation()
     * @param string $employeeID
     * @param \ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW $accessLevelInfo
     * @param bool $partOfCreateOperation
     */
    public function __construct(?string $employeeID = null, ?\ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW $accessLevelInfo = null, ?bool $partOfCreateOperation = null)
    {
        $this
            ->setEmployeeID($employeeID)
            ->setAccessLevelInfo($accessLevelInfo)
            ->setPartOfCreateOperation($partOfCreateOperation);
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
     * @return \StructType\AddAccessLevelsToEmployeeWithPeriod
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
     * @return \StructType\AddAccessLevelsToEmployeeWithPeriod
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
    /**
     * Get partOfCreateOperation value
     * @return bool|null
     */
    public function getPartOfCreateOperation(): ?bool
    {
        return $this->partOfCreateOperation;
    }
    /**
     * Set partOfCreateOperation value
     * @param bool $partOfCreateOperation
     * @return \StructType\AddAccessLevelsToEmployeeWithPeriod
     */
    public function setPartOfCreateOperation(?bool $partOfCreateOperation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partOfCreateOperation) && !is_bool($partOfCreateOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partOfCreateOperation, true), gettype($partOfCreateOperation)), __LINE__);
        }
        $this->partOfCreateOperation = $partOfCreateOperation;
        
        return $this;
    }
}
