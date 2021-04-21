<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmployeeGroupsToReactionAction StructType
 * @subpackage Structs
 */
class AddEmployeeGroupsToReactionAction extends AbstractStructBase
{
    /**
     * The actionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $actionId = null;
    /**
     * The employeeGroupIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $employeeGroupIds = null;
    /**
     * Constructor method for AddEmployeeGroupsToReactionAction
     * @uses AddEmployeeGroupsToReactionAction::setActionId()
     * @uses AddEmployeeGroupsToReactionAction::setEmployeeGroupIds()
     * @param string $actionId
     * @param \ArrayType\ArrayOfguid $employeeGroupIds
     */
    public function __construct(?string $actionId = null, ?\ArrayType\ArrayOfguid $employeeGroupIds = null)
    {
        $this
            ->setActionId($actionId)
            ->setEmployeeGroupIds($employeeGroupIds);
    }
    /**
     * Get actionId value
     * @return string|null
     */
    public function getActionId(): ?string
    {
        return $this->actionId;
    }
    /**
     * Set actionId value
     * @param string $actionId
     * @return \StructType\AddEmployeeGroupsToReactionAction
     */
    public function setActionId(?string $actionId = null): self
    {
        // validation for constraint: string
        if (!is_null($actionId) && !is_string($actionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionId, true), gettype($actionId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($actionId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $actionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($actionId, true)), __LINE__);
        }
        $this->actionId = $actionId;
        
        return $this;
    }
    /**
     * Get employeeGroupIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getEmployeeGroupIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->employeeGroupIds) ? $this->employeeGroupIds : null;
    }
    /**
     * Set employeeGroupIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $employeeGroupIds
     * @return \StructType\AddEmployeeGroupsToReactionAction
     */
    public function setEmployeeGroupIds(?\ArrayType\ArrayOfguid $employeeGroupIds = null): self
    {
        if (is_null($employeeGroupIds) || (is_array($employeeGroupIds) && empty($employeeGroupIds))) {
            unset($this->employeeGroupIds);
        } else {
            $this->employeeGroupIds = $employeeGroupIds;
        }
        
        return $this;
    }
}
