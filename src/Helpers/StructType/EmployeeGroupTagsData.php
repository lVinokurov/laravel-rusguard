<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeGroupTagsData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeGroupTagsData
 * @subpackage Structs
 */
class EmployeeGroupTagsData extends TagFullInfo
{
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
     * The TagID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $TagID = null;
    /**
     * Constructor method for EmployeeGroupTagsData
     * @uses EmployeeGroupTagsData::setEmployeeGroupID()
     * @uses EmployeeGroupTagsData::setTagID()
     * @param string $employeeGroupID
     * @param string $tagID
     */
    public function __construct(?string $employeeGroupID = null, ?string $tagID = null)
    {
        $this
            ->setEmployeeGroupID($employeeGroupID)
            ->setTagID($tagID);
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
     * @return \StructType\EmployeeGroupTagsData
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
     * Get TagID value
     * @return string|null
     */
    public function getTagID(): ?string
    {
        return $this->TagID;
    }
    /**
     * Set TagID value
     * @param string $tagID
     * @return \StructType\EmployeeGroupTagsData
     */
    public function setTagID(?string $tagID = null): self
    {
        // validation for constraint: string
        if (!is_null($tagID) && !is_string($tagID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tagID, true), gettype($tagID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($tagID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $tagID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($tagID, true)), __LINE__);
        }
        $this->TagID = $tagID;
        
        return $this;
    }
}
