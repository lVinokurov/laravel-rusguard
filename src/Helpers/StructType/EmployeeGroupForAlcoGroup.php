<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeGroupForAlcoGroup StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeGroupForAlcoGroup
 * @subpackage Structs
 */
class EmployeeGroupForAlcoGroup extends AbstractStructBase
{
    /**
     * The GroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $GroupID = null;
    /**
     * The IncludeChilds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeChilds = null;
    /**
     * Constructor method for EmployeeGroupForAlcoGroup
     * @uses EmployeeGroupForAlcoGroup::setGroupID()
     * @uses EmployeeGroupForAlcoGroup::setIncludeChilds()
     * @param string $groupID
     * @param bool $includeChilds
     */
    public function __construct(?string $groupID = null, ?bool $includeChilds = null)
    {
        $this
            ->setGroupID($groupID)
            ->setIncludeChilds($includeChilds);
    }
    /**
     * Get GroupID value
     * @return string|null
     */
    public function getGroupID(): ?string
    {
        return $this->GroupID;
    }
    /**
     * Set GroupID value
     * @param string $groupID
     * @return \StructType\EmployeeGroupForAlcoGroup
     */
    public function setGroupID(?string $groupID = null): self
    {
        // validation for constraint: string
        if (!is_null($groupID) && !is_string($groupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupID, true), gettype($groupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($groupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $groupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($groupID, true)), __LINE__);
        }
        $this->GroupID = $groupID;
        
        return $this;
    }
    /**
     * Get IncludeChilds value
     * @return bool|null
     */
    public function getIncludeChilds(): ?bool
    {
        return $this->IncludeChilds;
    }
    /**
     * Set IncludeChilds value
     * @param bool $includeChilds
     * @return \StructType\EmployeeGroupForAlcoGroup
     */
    public function setIncludeChilds(?bool $includeChilds = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeChilds) && !is_bool($includeChilds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeChilds, true), gettype($includeChilds)), __LINE__);
        }
        $this->IncludeChilds = $includeChilds;
        
        return $this;
    }
}
