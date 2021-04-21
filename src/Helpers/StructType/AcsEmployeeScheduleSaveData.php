<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeScheduleSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeScheduleSaveData
 * @subpackage Structs
 */
class AcsEmployeeScheduleSaveData extends AbstractStructBase
{
    /**
     * The BeginDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BeginDate = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The EmployeeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeID = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * Constructor method for AcsEmployeeScheduleSaveData
     * @uses AcsEmployeeScheduleSaveData::setBeginDate()
     * @uses AcsEmployeeScheduleSaveData::setDescription()
     * @uses AcsEmployeeScheduleSaveData::setEmployeeID()
     * @uses AcsEmployeeScheduleSaveData::setEndDate()
     * @param string $beginDate
     * @param string $description
     * @param string $employeeID
     * @param string $endDate
     */
    public function __construct(?string $beginDate = null, ?string $description = null, ?string $employeeID = null, ?string $endDate = null)
    {
        $this
            ->setBeginDate($beginDate)
            ->setDescription($description)
            ->setEmployeeID($employeeID)
            ->setEndDate($endDate);
    }
    /**
     * Get BeginDate value
     * @return string|null
     */
    public function getBeginDate(): ?string
    {
        return $this->BeginDate;
    }
    /**
     * Set BeginDate value
     * @param string $beginDate
     * @return \StructType\AcsEmployeeScheduleSaveData
     */
    public function setBeginDate(?string $beginDate = null): self
    {
        // validation for constraint: string
        if (!is_null($beginDate) && !is_string($beginDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginDate, true), gettype($beginDate)), __LINE__);
        }
        $this->BeginDate = $beginDate;
        
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\AcsEmployeeScheduleSaveData
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get EmployeeID value
     * @return string|null
     */
    public function getEmployeeID(): ?string
    {
        return $this->EmployeeID;
    }
    /**
     * Set EmployeeID value
     * @param string $employeeID
     * @return \StructType\AcsEmployeeScheduleSaveData
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
        $this->EmployeeID = $employeeID;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \StructType\AcsEmployeeScheduleSaveData
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        
        return $this;
    }
}
