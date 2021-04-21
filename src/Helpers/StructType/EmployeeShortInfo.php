<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeShortInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeShortInfo
 * @subpackage Structs
 */
class EmployeeShortInfo extends AbstractStructBase
{
    /**
     * The EmployeeGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeGroup = null;
    /**
     * The EmployeeGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeGroupID = null;
    /**
     * The FIO
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FIO = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * Constructor method for EmployeeShortInfo
     * @uses EmployeeShortInfo::setEmployeeGroup()
     * @uses EmployeeShortInfo::setEmployeeGroupID()
     * @uses EmployeeShortInfo::setFIO()
     * @uses EmployeeShortInfo::setID()
     * @param string $employeeGroup
     * @param string $employeeGroupID
     * @param string $fIO
     * @param string $iD
     */
    public function __construct(?string $employeeGroup = null, ?string $employeeGroupID = null, ?string $fIO = null, ?string $iD = null)
    {
        $this
            ->setEmployeeGroup($employeeGroup)
            ->setEmployeeGroupID($employeeGroupID)
            ->setFIO($fIO)
            ->setID($iD);
    }
    /**
     * Get EmployeeGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeGroup(): ?string
    {
        return isset($this->EmployeeGroup) ? $this->EmployeeGroup : null;
    }
    /**
     * Set EmployeeGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeGroup
     * @return \StructType\EmployeeShortInfo
     */
    public function setEmployeeGroup(?string $employeeGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroup) && !is_string($employeeGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroup, true), gettype($employeeGroup)), __LINE__);
        }
        if (is_null($employeeGroup) || (is_array($employeeGroup) && empty($employeeGroup))) {
            unset($this->EmployeeGroup);
        } else {
            $this->EmployeeGroup = $employeeGroup;
        }
        
        return $this;
    }
    /**
     * Get EmployeeGroupID value
     * @return string|null
     */
    public function getEmployeeGroupID(): ?string
    {
        return $this->EmployeeGroupID;
    }
    /**
     * Set EmployeeGroupID value
     * @param string $employeeGroupID
     * @return \StructType\EmployeeShortInfo
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
        $this->EmployeeGroupID = $employeeGroupID;
        
        return $this;
    }
    /**
     * Get FIO value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFIO(): ?string
    {
        return isset($this->FIO) ? $this->FIO : null;
    }
    /**
     * Set FIO value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fIO
     * @return \StructType\EmployeeShortInfo
     */
    public function setFIO(?string $fIO = null): self
    {
        // validation for constraint: string
        if (!is_null($fIO) && !is_string($fIO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fIO, true), gettype($fIO)), __LINE__);
        }
        if (is_null($fIO) || (is_array($fIO) && empty($fIO))) {
            unset($this->FIO);
        } else {
            $this->FIO = $fIO;
        }
        
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\EmployeeShortInfo
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
}
