<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserGroupsResponse StructType
 * @subpackage Structs
 */
class GetUserGroupsResponse extends AbstractStructBase
{
    /**
     * The GetUserGroupsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LUserGroupsData|null
     */
    protected ?\StructType\LUserGroupsData $GetUserGroupsResult = null;
    /**
     * Constructor method for GetUserGroupsResponse
     * @uses GetUserGroupsResponse::setGetUserGroupsResult()
     * @param \StructType\LUserGroupsData $getUserGroupsResult
     */
    public function __construct(?\StructType\LUserGroupsData $getUserGroupsResult = null)
    {
        $this
            ->setGetUserGroupsResult($getUserGroupsResult);
    }
    /**
     * Get GetUserGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LUserGroupsData|null
     */
    public function getGetUserGroupsResult(): ?\StructType\LUserGroupsData
    {
        return isset($this->GetUserGroupsResult) ? $this->GetUserGroupsResult : null;
    }
    /**
     * Set GetUserGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LUserGroupsData $getUserGroupsResult
     * @return \StructType\GetUserGroupsResponse
     */
    public function setGetUserGroupsResult(?\StructType\LUserGroupsData $getUserGroupsResult = null): self
    {
        if (is_null($getUserGroupsResult) || (is_array($getUserGroupsResult) && empty($getUserGroupsResult))) {
            unset($this->GetUserGroupsResult);
        } else {
            $this->GetUserGroupsResult = $getUserGroupsResult;
        }
        
        return $this;
    }
}
