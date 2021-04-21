<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsersByUserGroupIDResponse StructType
 * @subpackage Structs
 */
class GetUsersByUserGroupIDResponse extends AbstractStructBase
{
    /**
     * The GetUsersByUserGroupIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LUsersData|null
     */
    protected ?\StructType\LUsersData $GetUsersByUserGroupIDResult = null;
    /**
     * Constructor method for GetUsersByUserGroupIDResponse
     * @uses GetUsersByUserGroupIDResponse::setGetUsersByUserGroupIDResult()
     * @param \StructType\LUsersData $getUsersByUserGroupIDResult
     */
    public function __construct(?\StructType\LUsersData $getUsersByUserGroupIDResult = null)
    {
        $this
            ->setGetUsersByUserGroupIDResult($getUsersByUserGroupIDResult);
    }
    /**
     * Get GetUsersByUserGroupIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LUsersData|null
     */
    public function getGetUsersByUserGroupIDResult(): ?\StructType\LUsersData
    {
        return isset($this->GetUsersByUserGroupIDResult) ? $this->GetUsersByUserGroupIDResult : null;
    }
    /**
     * Set GetUsersByUserGroupIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LUsersData $getUsersByUserGroupIDResult
     * @return \StructType\GetUsersByUserGroupIDResponse
     */
    public function setGetUsersByUserGroupIDResult(?\StructType\LUsersData $getUsersByUserGroupIDResult = null): self
    {
        if (is_null($getUsersByUserGroupIDResult) || (is_array($getUsersByUserGroupIDResult) && empty($getUsersByUserGroupIDResult))) {
            unset($this->GetUsersByUserGroupIDResult);
        } else {
            $this->GetUsersByUserGroupIDResult = $getUsersByUserGroupIDResult;
        }
        
        return $this;
    }
}
