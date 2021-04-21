<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetEmployees2AlcoGroup StructType
 * @subpackage Structs
 */
class SetEmployees2AlcoGroup extends AbstractStructBase
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
     * The employeesIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $employeesIds = null;
    /**
     * The deletedEmployeesIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $deletedEmployeesIds = null;
    /**
     * Constructor method for SetEmployees2AlcoGroup
     * @uses SetEmployees2AlcoGroup::setAlcoGroupId()
     * @uses SetEmployees2AlcoGroup::setEmployeesIds()
     * @uses SetEmployees2AlcoGroup::setDeletedEmployeesIds()
     * @param string $alcoGroupId
     * @param \ArrayType\ArrayOfguid $employeesIds
     * @param \ArrayType\ArrayOfguid $deletedEmployeesIds
     */
    public function __construct(?string $alcoGroupId = null, ?\ArrayType\ArrayOfguid $employeesIds = null, ?\ArrayType\ArrayOfguid $deletedEmployeesIds = null)
    {
        $this
            ->setAlcoGroupId($alcoGroupId)
            ->setEmployeesIds($employeesIds)
            ->setDeletedEmployeesIds($deletedEmployeesIds);
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
     * @return \StructType\SetEmployees2AlcoGroup
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
     * Get employeesIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getEmployeesIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->employeesIds) ? $this->employeesIds : null;
    }
    /**
     * Set employeesIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $employeesIds
     * @return \StructType\SetEmployees2AlcoGroup
     */
    public function setEmployeesIds(?\ArrayType\ArrayOfguid $employeesIds = null): self
    {
        if (is_null($employeesIds) || (is_array($employeesIds) && empty($employeesIds))) {
            unset($this->employeesIds);
        } else {
            $this->employeesIds = $employeesIds;
        }
        
        return $this;
    }
    /**
     * Get deletedEmployeesIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getDeletedEmployeesIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->deletedEmployeesIds) ? $this->deletedEmployeesIds : null;
    }
    /**
     * Set deletedEmployeesIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $deletedEmployeesIds
     * @return \StructType\SetEmployees2AlcoGroup
     */
    public function setDeletedEmployeesIds(?\ArrayType\ArrayOfguid $deletedEmployeesIds = null): self
    {
        if (is_null($deletedEmployeesIds) || (is_array($deletedEmployeesIds) && empty($deletedEmployeesIds))) {
            unset($this->deletedEmployeesIds);
        } else {
            $this->deletedEmployeesIds = $deletedEmployeesIds;
        }
        
        return $this;
    }
}
