<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUseEmployeeParentAccessLevel StructType
 * @subpackage Structs
 */
class SetUseEmployeeParentAccessLevel extends AbstractStructBase
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
     * The isUseParentAccessLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isUseParentAccessLevel = null;
    /**
     * The partOfCreateOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $partOfCreateOperation = null;
    /**
     * Constructor method for SetUseEmployeeParentAccessLevel
     * @uses SetUseEmployeeParentAccessLevel::setEmployeeID()
     * @uses SetUseEmployeeParentAccessLevel::setIsUseParentAccessLevel()
     * @uses SetUseEmployeeParentAccessLevel::setPartOfCreateOperation()
     * @param string $employeeID
     * @param bool $isUseParentAccessLevel
     * @param bool $partOfCreateOperation
     */
    public function __construct(?string $employeeID = null, ?bool $isUseParentAccessLevel = null, ?bool $partOfCreateOperation = null)
    {
        $this
            ->setEmployeeID($employeeID)
            ->setIsUseParentAccessLevel($isUseParentAccessLevel)
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
     * @return \StructType\SetUseEmployeeParentAccessLevel
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
     * Get isUseParentAccessLevel value
     * @return bool|null
     */
    public function getIsUseParentAccessLevel(): ?bool
    {
        return $this->isUseParentAccessLevel;
    }
    /**
     * Set isUseParentAccessLevel value
     * @param bool $isUseParentAccessLevel
     * @return \StructType\SetUseEmployeeParentAccessLevel
     */
    public function setIsUseParentAccessLevel(?bool $isUseParentAccessLevel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUseParentAccessLevel) && !is_bool($isUseParentAccessLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUseParentAccessLevel, true), gettype($isUseParentAccessLevel)), __LINE__);
        }
        $this->isUseParentAccessLevel = $isUseParentAccessLevel;
        
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
     * @return \StructType\SetUseEmployeeParentAccessLevel
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
