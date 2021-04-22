<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeSaveData
 * @subpackage Structs
 */
class AcsEmployeeSaveData extends AcsEmployeeFullBase
{
    /**
     * The EmployeePositionID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeePositionID = null;
    /**
     * The IsChangeLocked
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsChangeLocked = null;
    /**
     * The IsChangePin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsChangePin = null;
    /**
     * Constructor method for AcsEmployeeSaveData
     * @uses AcsEmployeeSaveData::setEmployeePositionID()
     * @uses AcsEmployeeSaveData::setIsChangeLocked()
     * @uses AcsEmployeeSaveData::setIsChangePin()
     * @param string $employeePositionID
     * @param bool $isChangeLocked
     * @param bool $isChangePin
     */
    public function __construct(?string $employeePositionID = null, ?bool $isChangeLocked = null, ?bool $isChangePin = null)
    {
        $this
            ->setEmployeePositionID($employeePositionID)
            ->setIsChangeLocked($isChangeLocked)
            ->setIsChangePin($isChangePin);
    }
    /**
     * Get EmployeePositionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeePositionID(): ?string
    {
        return isset($this->EmployeePositionID) ? $this->EmployeePositionID : null;
    }
    /**
     * Set EmployeePositionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeePositionID
     * @return \StructType\AcsEmployeeSaveData
     */
    public function setEmployeePositionID(?string $employeePositionID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeePositionID) && !is_string($employeePositionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeePositionID, true), gettype($employeePositionID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeePositionID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeePositionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeePositionID, true)), __LINE__);
        }
        if (is_null($employeePositionID) || (is_array($employeePositionID) && empty($employeePositionID))) {
            unset($this->EmployeePositionID);
        } else {
            $this->EmployeePositionID = $employeePositionID;
        }

        return $this;
    }
    /**
     * Get IsChangeLocked value
     * @return bool|null
     */
    public function getIsChangeLocked(): ?bool
    {
        return $this->IsChangeLocked;
    }
    /**
     * Set IsChangeLocked value
     * @param bool $isChangeLocked
     * @return \StructType\AcsEmployeeSaveData
     */
    public function setIsChangeLocked(?bool $isChangeLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChangeLocked) && !is_bool($isChangeLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChangeLocked, true), gettype($isChangeLocked)), __LINE__);
        }
        $this->IsChangeLocked = $isChangeLocked;

        return $this;
    }
    /**
     * Get IsChangePin value
     * @return bool|null
     */
    public function getIsChangePin(): ?bool
    {
        return $this->IsChangePin;
    }
    /**
     * Set IsChangePin value
     * @param bool $isChangePin
     * @return \StructType\AcsEmployeeSaveData
     */
    public function setIsChangePin(?bool $isChangePin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChangePin) && !is_bool($isChangePin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChangePin, true), gettype($isChangePin)), __LINE__);
        }
        $this->IsChangePin = $isChangePin;

        return $this;
    }
}
