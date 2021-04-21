<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddUsersToUserGroup StructType
 * @subpackage Structs
 */
class AddUsersToUserGroup extends AbstractStructBase
{
    /**
     * The userGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $userGroupID = null;
    /**
     * The userIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $userIDs = null;
    /**
     * Constructor method for AddUsersToUserGroup
     * @uses AddUsersToUserGroup::setUserGroupID()
     * @uses AddUsersToUserGroup::setUserIDs()
     * @param string $userGroupID
     * @param \ArrayType\ArrayOfguid $userIDs
     */
    public function __construct(?string $userGroupID = null, ?\ArrayType\ArrayOfguid $userIDs = null)
    {
        $this
            ->setUserGroupID($userGroupID)
            ->setUserIDs($userIDs);
    }
    /**
     * Get userGroupID value
     * @return string|null
     */
    public function getUserGroupID(): ?string
    {
        return $this->userGroupID;
    }
    /**
     * Set userGroupID value
     * @param string $userGroupID
     * @return \StructType\AddUsersToUserGroup
     */
    public function setUserGroupID(?string $userGroupID = null): self
    {
        // validation for constraint: string
        if (!is_null($userGroupID) && !is_string($userGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userGroupID, true), gettype($userGroupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userGroupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userGroupID, true)), __LINE__);
        }
        $this->userGroupID = $userGroupID;
        
        return $this;
    }
    /**
     * Get userIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getUserIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->userIDs) ? $this->userIDs : null;
    }
    /**
     * Set userIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $userIDs
     * @return \StructType\AddUsersToUserGroup
     */
    public function setUserIDs(?\ArrayType\ArrayOfguid $userIDs = null): self
    {
        if (is_null($userIDs) || (is_array($userIDs) && empty($userIDs))) {
            unset($this->userIDs);
        } else {
            $this->userIDs = $userIDs;
        }
        
        return $this;
    }
}
