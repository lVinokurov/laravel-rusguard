<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LUsersData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LUsersData
 * @subpackage Structs
 */
class LUsersData extends AbstractStructBase
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
     * The Users
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLUser|null
     */
    protected ?\ArrayType\ArrayOfLUser $Users = null;
    /**
     * Constructor method for LUsersData
     * @uses LUsersData::setCount()
     * @uses LUsersData::setIsAdminChangeRigthOnly()
     * @uses LUsersData::setIsAdminUsingAdminGroupOnly()
     * @uses LUsersData::setIsAdministrator()
     * @uses LUsersData::setUsers()
     * @param int $count
     * @param bool $isAdminChangeRigthOnly
     * @param bool $isAdminUsingAdminGroupOnly
     * @param bool $isAdministrator
     * @param \ArrayType\ArrayOfLUser $users
     */
    public function __construct(?int $count = null, ?bool $isAdminChangeRigthOnly = null, ?bool $isAdminUsingAdminGroupOnly = null, ?bool $isAdministrator = null, ?\ArrayType\ArrayOfLUser $users = null)
    {
        $this
            ->setCount($count)
            ->setIsAdminChangeRigthOnly($isAdminChangeRigthOnly)
            ->setIsAdminUsingAdminGroupOnly($isAdminUsingAdminGroupOnly)
            ->setIsAdministrator($isAdministrator)
            ->setUsers($users);
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
     * @return \StructType\LUsersData
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
     * @return \StructType\LUsersData
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
     * @return \StructType\LUsersData
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
     * @return \StructType\LUsersData
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
     * Get Users value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLUser|null
     */
    public function getUsers(): ?\ArrayType\ArrayOfLUser
    {
        return isset($this->Users) ? $this->Users : null;
    }
    /**
     * Set Users value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLUser $users
     * @return \StructType\LUsersData
     */
    public function setUsers(?\ArrayType\ArrayOfLUser $users = null): self
    {
        if (is_null($users) || (is_array($users) && empty($users))) {
            unset($this->Users);
        } else {
            $this->Users = $users;
        }
        
        return $this;
    }
}
