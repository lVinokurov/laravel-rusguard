<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeePostionsForAlcoGroup StructType
 * @subpackage Structs
 */
class GetEmployeePostionsForAlcoGroup extends AbstractStructBase
{
    /**
     * The groupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $groupID = null;
    /**
     * Constructor method for GetEmployeePostionsForAlcoGroup
     * @uses GetEmployeePostionsForAlcoGroup::setGroupID()
     * @param string $groupID
     */
    public function __construct(?string $groupID = null)
    {
        $this
            ->setGroupID($groupID);
    }
    /**
     * Get groupID value
     * @return string|null
     */
    public function getGroupID(): ?string
    {
        return $this->groupID;
    }
    /**
     * Set groupID value
     * @param string $groupID
     * @return \StructType\GetEmployeePostionsForAlcoGroup
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
        $this->groupID = $groupID;
        
        return $this;
    }
}
