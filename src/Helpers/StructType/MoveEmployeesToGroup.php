<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveEmployeesToGroup StructType
 * @subpackage Structs
 */
class MoveEmployeesToGroup extends AbstractStructBase
{
    /**
     * The groupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $groupId = null;
    /**
     * The employeesIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $employeesIDs = null;
    /**
     * Constructor method for MoveEmployeesToGroup
     * @uses MoveEmployeesToGroup::setGroupId()
     * @uses MoveEmployeesToGroup::setEmployeesIDs()
     * @param string $groupId
     * @param \ArrayType\ArrayOfguid $employeesIDs
     */
    public function __construct(?string $groupId = null, ?\ArrayType\ArrayOfguid $employeesIDs = null)
    {
        $this
            ->setGroupId($groupId)
            ->setEmployeesIDs($employeesIDs);
    }
    /**
     * Get groupId value
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param string $groupId
     * @return \StructType\MoveEmployeesToGroup
     */
    public function setGroupId(?string $groupId = null): self
    {
        // validation for constraint: string
        if (!is_null($groupId) && !is_string($groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($groupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($groupId, true)), __LINE__);
        }
        $this->groupId = $groupId;
        
        return $this;
    }
    /**
     * Get employeesIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getEmployeesIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->employeesIDs) ? $this->employeesIDs : null;
    }
    /**
     * Set employeesIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $employeesIDs
     * @return \StructType\MoveEmployeesToGroup
     */
    public function setEmployeesIDs(?\ArrayType\ArrayOfguid $employeesIDs = null): self
    {
        if (is_null($employeesIDs) || (is_array($employeesIDs) && empty($employeesIDs))) {
            unset($this->employeesIDs);
        } else {
            $this->employeesIDs = $employeesIDs;
        }
        
        return $this;
    }
}
