<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddUserGroupResponse StructType
 * @subpackage Structs
 */
class AddUserGroupResponse extends AbstractStructBase
{
    /**
     * The AddUserGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LUserGroup|null
     */
    protected ?\StructType\LUserGroup $AddUserGroupResult = null;
    /**
     * Constructor method for AddUserGroupResponse
     * @uses AddUserGroupResponse::setAddUserGroupResult()
     * @param \StructType\LUserGroup $addUserGroupResult
     */
    public function __construct(?\StructType\LUserGroup $addUserGroupResult = null)
    {
        $this
            ->setAddUserGroupResult($addUserGroupResult);
    }
    /**
     * Get AddUserGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LUserGroup|null
     */
    public function getAddUserGroupResult(): ?\StructType\LUserGroup
    {
        return isset($this->AddUserGroupResult) ? $this->AddUserGroupResult : null;
    }
    /**
     * Set AddUserGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LUserGroup $addUserGroupResult
     * @return \StructType\AddUserGroupResponse
     */
    public function setAddUserGroupResult(?\StructType\LUserGroup $addUserGroupResult = null): self
    {
        if (is_null($addUserGroupResult) || (is_array($addUserGroupResult) && empty($addUserGroupResult))) {
            unset($this->AddUserGroupResult);
        } else {
            $this->AddUserGroupResult = $addUserGroupResult;
        }
        
        return $this;
    }
}
