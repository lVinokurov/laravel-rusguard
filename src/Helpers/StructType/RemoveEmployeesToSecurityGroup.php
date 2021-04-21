<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveEmployeesToSecurityGroup StructType
 * @subpackage Structs
 */
class RemoveEmployeesToSecurityGroup extends AbstractStructBase
{
    /**
     * The securityGroup
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $securityGroup = null;
    /**
     * The employeeIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $employeeIds = null;
    /**
     * Constructor method for RemoveEmployeesToSecurityGroup
     * @uses RemoveEmployeesToSecurityGroup::setSecurityGroup()
     * @uses RemoveEmployeesToSecurityGroup::setEmployeeIds()
     * @param string $securityGroup
     * @param \ArrayType\ArrayOfguid $employeeIds
     */
    public function __construct(?string $securityGroup = null, ?\ArrayType\ArrayOfguid $employeeIds = null)
    {
        $this
            ->setSecurityGroup($securityGroup)
            ->setEmployeeIds($employeeIds);
    }
    /**
     * Get securityGroup value
     * @return string|null
     */
    public function getSecurityGroup(): ?string
    {
        return $this->securityGroup;
    }
    /**
     * Set securityGroup value
     * @param string $securityGroup
     * @return \StructType\RemoveEmployeesToSecurityGroup
     */
    public function setSecurityGroup(?string $securityGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($securityGroup) && !is_string($securityGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityGroup, true), gettype($securityGroup)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($securityGroup) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $securityGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($securityGroup, true)), __LINE__);
        }
        $this->securityGroup = $securityGroup;
        
        return $this;
    }
    /**
     * Get employeeIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getEmployeeIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->employeeIds) ? $this->employeeIds : null;
    }
    /**
     * Set employeeIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $employeeIds
     * @return \StructType\RemoveEmployeesToSecurityGroup
     */
    public function setEmployeeIds(?\ArrayType\ArrayOfguid $employeeIds = null): self
    {
        if (is_null($employeeIds) || (is_array($employeeIds) && empty($employeeIds))) {
            unset($this->employeeIds);
        } else {
            $this->employeeIds = $employeeIds;
        }
        
        return $this;
    }
}
