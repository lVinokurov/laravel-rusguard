<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClaimsForUserGroup StructType
 * @subpackage Structs
 */
class GetClaimsForUserGroup extends AbstractStructBase
{
    /**
     * The userGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $userGroupId = null;
    /**
     * Constructor method for GetClaimsForUserGroup
     * @uses GetClaimsForUserGroup::setUserGroupId()
     * @param string $userGroupId
     */
    public function __construct(?string $userGroupId = null)
    {
        $this
            ->setUserGroupId($userGroupId);
    }
    /**
     * Get userGroupId value
     * @return string|null
     */
    public function getUserGroupId(): ?string
    {
        return $this->userGroupId;
    }
    /**
     * Set userGroupId value
     * @param string $userGroupId
     * @return \StructType\GetClaimsForUserGroup
     */
    public function setUserGroupId(?string $userGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($userGroupId) && !is_string($userGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userGroupId, true), gettype($userGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userGroupId, true)), __LINE__);
        }
        $this->userGroupId = $userGroupId;
        
        return $this;
    }
}
