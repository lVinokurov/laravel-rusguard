<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LUserGroupsData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LUserGroupsData
 * @subpackage Structs
 */
class LUserGroupsData extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The IsAdminChangeRigthOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAdminChangeRigthOnly = null;
    /**
     * The IsAdminUsingAdminGroupOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAdminUsingAdminGroupOnly = null;
    /**
     * The IsAdministrator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAdministrator = null;
    /**
     * The UserGroups
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLUserGroup|null
     */
    protected ?\ArrayType\ArrayOfLUserGroup $UserGroups = null;
    /**
     * Constructor method for LUserGroupsData
     * @uses LUserGroupsData::setCount()
     * @uses LUserGroupsData::setIsAdminChangeRigthOnly()
     * @uses LUserGroupsData::setIsAdminUsingAdminGroupOnly()
     * @uses LUserGroupsData::setIsAdministrator()
     * @uses LUserGroupsData::setUserGroups()
     * @param int $count
     * @param bool $isAdminChangeRigthOnly
     * @param bool $isAdminUsingAdminGroupOnly
     * @param bool $isAdministrator
     * @param \ArrayType\ArrayOfLUserGroup $userGroups
     */
    public function __construct(?int $count = null, ?bool $isAdminChangeRigthOnly = null, ?bool $isAdminUsingAdminGroupOnly = null, ?bool $isAdministrator = null, ?\ArrayType\ArrayOfLUserGroup $userGroups = null)
    {
        $this
            ->setCount($count)
            ->setIsAdminChangeRigthOnly($isAdminChangeRigthOnly)
            ->setIsAdminUsingAdminGroupOnly($isAdminUsingAdminGroupOnly)
            ->setIsAdministrator($isAdministrator)
            ->setUserGroups($userGroups);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\LUserGroupsData
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get IsAdminChangeRigthOnly value
     * @return bool|null
     */
    public function getIsAdminChangeRigthOnly(): ?bool
    {
        return $this->IsAdminChangeRigthOnly;
    }
    /**
     * Set IsAdminChangeRigthOnly value
     * @param bool $isAdminChangeRigthOnly
     * @return \StructType\LUserGroupsData
     */
    public function setIsAdminChangeRigthOnly(?bool $isAdminChangeRigthOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAdminChangeRigthOnly) && !is_bool($isAdminChangeRigthOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAdminChangeRigthOnly, true), gettype($isAdminChangeRigthOnly)), __LINE__);
        }
        $this->IsAdminChangeRigthOnly = $isAdminChangeRigthOnly;
        
        return $this;
    }
    /**
     * Get IsAdminUsingAdminGroupOnly value
     * @return bool|null
     */
    public function getIsAdminUsingAdminGroupOnly(): ?bool
    {
        return $this->IsAdminUsingAdminGroupOnly;
    }
    /**
     * Set IsAdminUsingAdminGroupOnly value
     * @param bool $isAdminUsingAdminGroupOnly
     * @return \StructType\LUserGroupsData
     */
    public function setIsAdminUsingAdminGroupOnly(?bool $isAdminUsingAdminGroupOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAdminUsingAdminGroupOnly) && !is_bool($isAdminUsingAdminGroupOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAdminUsingAdminGroupOnly, true), gettype($isAdminUsingAdminGroupOnly)), __LINE__);
        }
        $this->IsAdminUsingAdminGroupOnly = $isAdminUsingAdminGroupOnly;
        
        return $this;
    }
    /**
     * Get IsAdministrator value
     * @return bool|null
     */
    public function getIsAdministrator(): ?bool
    {
        return $this->IsAdministrator;
    }
    /**
     * Set IsAdministrator value
     * @param bool $isAdministrator
     * @return \StructType\LUserGroupsData
     */
    public function setIsAdministrator(?bool $isAdministrator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAdministrator) && !is_bool($isAdministrator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAdministrator, true), gettype($isAdministrator)), __LINE__);
        }
        $this->IsAdministrator = $isAdministrator;
        
        return $this;
    }
    /**
     * Get UserGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLUserGroup|null
     */
    public function getUserGroups(): ?\ArrayType\ArrayOfLUserGroup
    {
        return isset($this->UserGroups) ? $this->UserGroups : null;
    }
    /**
     * Set UserGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLUserGroup $userGroups
     * @return \StructType\LUserGroupsData
     */
    public function setUserGroups(?\ArrayType\ArrayOfLUserGroup $userGroups = null): self
    {
        if (is_null($userGroups) || (is_array($userGroups) && empty($userGroups))) {
            unset($this->UserGroups);
        } else {
            $this->UserGroups = $userGroups;
        }
        
        return $this;
    }
}
