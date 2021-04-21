<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDepartmentTree StructType
 * @subpackage Structs
 */
class GetDepartmentTree extends AbstractStructBase
{
    /**
     * The departmentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $departmentId = null;
    /**
     * The isChild
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isChild = null;
    /**
     * Constructor method for GetDepartmentTree
     * @uses GetDepartmentTree::setDepartmentId()
     * @uses GetDepartmentTree::setIsChild()
     * @param string $departmentId
     * @param bool $isChild
     */
    public function __construct(?string $departmentId = null, ?bool $isChild = null)
    {
        $this
            ->setDepartmentId($departmentId)
            ->setIsChild($isChild);
    }
    /**
     * Get departmentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartmentId(): ?string
    {
        return isset($this->departmentId) ? $this->departmentId : null;
    }
    /**
     * Set departmentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departmentId
     * @return \StructType\GetDepartmentTree
     */
    public function setDepartmentId(?string $departmentId = null): self
    {
        // validation for constraint: string
        if (!is_null($departmentId) && !is_string($departmentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departmentId, true), gettype($departmentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($departmentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $departmentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($departmentId, true)), __LINE__);
        }
        if (is_null($departmentId) || (is_array($departmentId) && empty($departmentId))) {
            unset($this->departmentId);
        } else {
            $this->departmentId = $departmentId;
        }
        
        return $this;
    }
    /**
     * Get isChild value
     * @return bool|null
     */
    public function getIsChild(): ?bool
    {
        return $this->isChild;
    }
    /**
     * Set isChild value
     * @param bool $isChild
     * @return \StructType\GetDepartmentTree
     */
    public function setIsChild(?bool $isChild = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChild) && !is_bool($isChild)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChild, true), gettype($isChild)), __LINE__);
        }
        $this->isChild = $isChild;
        
        return $this;
    }
}
