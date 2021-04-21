<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByEmployeeGroupID StructType
 * @subpackage Structs
 */
class GetTagsByEmployeeGroupID extends AbstractStructBase
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
     * The isShowRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isShowRemoved = null;
    /**
     * Constructor method for GetTagsByEmployeeGroupID
     * @uses GetTagsByEmployeeGroupID::setEmployeeGroupID()
     * @uses GetTagsByEmployeeGroupID::setIsShowRemoved()
     * @param string $employeeGroupID
     * @param bool $isShowRemoved
     */
    public function __construct(?string $employeeGroupID = null, ?bool $isShowRemoved = null)
    {
        $this
            ->setEmployeeGroupID($employeeGroupID)
            ->setIsShowRemoved($isShowRemoved);
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
     * @return \StructType\GetTagsByEmployeeGroupID
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
     * Get isShowRemoved value
     * @return bool|null
     */
    public function getIsShowRemoved(): ?bool
    {
        return $this->isShowRemoved;
    }
    /**
     * Set isShowRemoved value
     * @param bool $isShowRemoved
     * @return \StructType\GetTagsByEmployeeGroupID
     */
    public function setIsShowRemoved(?bool $isShowRemoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowRemoved) && !is_bool($isShowRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowRemoved, true), gettype($isShowRemoved)), __LINE__);
        }
        $this->isShowRemoved = $isShowRemoved;
        
        return $this;
    }
}
