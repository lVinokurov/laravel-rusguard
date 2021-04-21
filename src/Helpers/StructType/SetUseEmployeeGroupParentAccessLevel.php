<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUseEmployeeGroupParentAccessLevel StructType
 * @subpackage Structs
 */
class SetUseEmployeeGroupParentAccessLevel extends AbstractStructBase
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
     * Constructor method for SetUseEmployeeGroupParentAccessLevel
     * @uses SetUseEmployeeGroupParentAccessLevel::setEmployeeGroupID()
     * @uses SetUseEmployeeGroupParentAccessLevel::setIsUseParentAccessLevel()
     * @uses SetUseEmployeeGroupParentAccessLevel::setPartOfCreateOperation()
     * @param string $employeeGroupID
     * @param bool $isUseParentAccessLevel
     * @param bool $partOfCreateOperation
     */
    public function __construct(?string $employeeGroupID = null, ?bool $isUseParentAccessLevel = null, ?bool $partOfCreateOperation = null)
    {
        $this
            ->setEmployeeGroupID($employeeGroupID)
            ->setIsUseParentAccessLevel($isUseParentAccessLevel)
            ->setPartOfCreateOperation($partOfCreateOperation);
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
     * @return \StructType\SetUseEmployeeGroupParentAccessLevel
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
     * @return \StructType\SetUseEmployeeGroupParentAccessLevel
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
     * @return \StructType\SetUseEmployeeGroupParentAccessLevel
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
