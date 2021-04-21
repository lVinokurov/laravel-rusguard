<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserGroupResponse StructType
 * @subpackage Structs
 */
class GetUserGroupResponse extends AbstractStructBase
{
    /**
     * The GetUserGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LUserGroup|null
     */
    protected ?\StructType\LUserGroup $GetUserGroupResult = null;
    /**
     * Constructor method for GetUserGroupResponse
     * @uses GetUserGroupResponse::setGetUserGroupResult()
     * @param \StructType\LUserGroup $getUserGroupResult
     */
    public function __construct(?\StructType\LUserGroup $getUserGroupResult = null)
    {
        $this
            ->setGetUserGroupResult($getUserGroupResult);
    }
    /**
     * Get GetUserGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LUserGroup|null
     */
    public function getGetUserGroupResult(): ?\StructType\LUserGroup
    {
        return isset($this->GetUserGroupResult) ? $this->GetUserGroupResult : null;
    }
    /**
     * Set GetUserGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LUserGroup $getUserGroupResult
     * @return \StructType\GetUserGroupResponse
     */
    public function setGetUserGroupResult(?\StructType\LUserGroup $getUserGroupResult = null): self
    {
        if (is_null($getUserGroupResult) || (is_array($getUserGroupResult) && empty($getUserGroupResult))) {
            unset($this->GetUserGroupResult);
        } else {
            $this->GetUserGroupResult = $getUserGroupResult;
        }
        
        return $this;
    }
}
