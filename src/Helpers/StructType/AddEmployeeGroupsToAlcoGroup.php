<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmployeeGroupsToAlcoGroup StructType
 * @subpackage Structs
 */
class AddEmployeeGroupsToAlcoGroup extends AbstractStructBase
{
    /**
     * The alcoGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $alcoGroupId = null;
    /**
     * The groups
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployeeGroupForAlcoGroup|null
     */
    protected ?\ArrayType\ArrayOfEmployeeGroupForAlcoGroup $groups = null;
    /**
     * Constructor method for AddEmployeeGroupsToAlcoGroup
     * @uses AddEmployeeGroupsToAlcoGroup::setAlcoGroupId()
     * @uses AddEmployeeGroupsToAlcoGroup::setGroups()
     * @param string $alcoGroupId
     * @param \ArrayType\ArrayOfEmployeeGroupForAlcoGroup $groups
     */
    public function __construct(?string $alcoGroupId = null, ?\ArrayType\ArrayOfEmployeeGroupForAlcoGroup $groups = null)
    {
        $this
            ->setAlcoGroupId($alcoGroupId)
            ->setGroups($groups);
    }
    /**
     * Get alcoGroupId value
     * @return string|null
     */
    public function getAlcoGroupId(): ?string
    {
        return $this->alcoGroupId;
    }
    /**
     * Set alcoGroupId value
     * @param string $alcoGroupId
     * @return \StructType\AddEmployeeGroupsToAlcoGroup
     */
    public function setAlcoGroupId(?string $alcoGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($alcoGroupId) && !is_string($alcoGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alcoGroupId, true), gettype($alcoGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($alcoGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $alcoGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($alcoGroupId, true)), __LINE__);
        }
        $this->alcoGroupId = $alcoGroupId;
        
        return $this;
    }
    /**
     * Get groups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployeeGroupForAlcoGroup|null
     */
    public function getGroups(): ?\ArrayType\ArrayOfEmployeeGroupForAlcoGroup
    {
        return isset($this->groups) ? $this->groups : null;
    }
    /**
     * Set groups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployeeGroupForAlcoGroup $groups
     * @return \StructType\AddEmployeeGroupsToAlcoGroup
     */
    public function setGroups(?\ArrayType\ArrayOfEmployeeGroupForAlcoGroup $groups = null): self
    {
        if (is_null($groups) || (is_array($groups) && empty($groups))) {
            unset($this->groups);
        } else {
            $this->groups = $groups;
        }
        
        return $this;
    }
}
