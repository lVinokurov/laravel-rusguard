<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddUserGroupsToUser StructType
 * @subpackage Structs
 */
class AddUserGroupsToUser extends AbstractStructBase
{
    /**
     * The userID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $userID = null;
    /**
     * The userGroupIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $userGroupIDs = null;
    /**
     * Constructor method for AddUserGroupsToUser
     * @uses AddUserGroupsToUser::setUserID()
     * @uses AddUserGroupsToUser::setUserGroupIDs()
     * @param string $userID
     * @param \ArrayType\ArrayOfguid $userGroupIDs
     */
    public function __construct(?string $userID = null, ?\ArrayType\ArrayOfguid $userGroupIDs = null)
    {
        $this
            ->setUserID($userID)
            ->setUserGroupIDs($userGroupIDs);
    }
    /**
     * Get userID value
     * @return string|null
     */
    public function getUserID(): ?string
    {
        return $this->userID;
    }
    /**
     * Set userID value
     * @param string $userID
     * @return \StructType\AddUserGroupsToUser
     */
    public function setUserID(?string $userID = null): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userID, true)), __LINE__);
        }
        $this->userID = $userID;
        
        return $this;
    }
    /**
     * Get userGroupIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getUserGroupIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->userGroupIDs) ? $this->userGroupIDs : null;
    }
    /**
     * Set userGroupIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $userGroupIDs
     * @return \StructType\AddUserGroupsToUser
     */
    public function setUserGroupIDs(?\ArrayType\ArrayOfguid $userGroupIDs = null): self
    {
        if (is_null($userGroupIDs) || (is_array($userGroupIDs) && empty($userGroupIDs))) {
            unset($this->userGroupIDs);
        } else {
            $this->userGroupIDs = $userGroupIDs;
        }
        
        return $this;
    }
}
