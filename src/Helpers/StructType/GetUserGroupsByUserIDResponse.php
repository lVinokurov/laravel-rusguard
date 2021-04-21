<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserGroupsByUserIDResponse StructType
 * @subpackage Structs
 */
class GetUserGroupsByUserIDResponse extends AbstractStructBase
{
    /**
     * The GetUserGroupsByUserIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LUserGroupsData|null
     */
    protected ?\StructType\LUserGroupsData $GetUserGroupsByUserIDResult = null;
    /**
     * Constructor method for GetUserGroupsByUserIDResponse
     * @uses GetUserGroupsByUserIDResponse::setGetUserGroupsByUserIDResult()
     * @param \StructType\LUserGroupsData $getUserGroupsByUserIDResult
     */
    public function __construct(?\StructType\LUserGroupsData $getUserGroupsByUserIDResult = null)
    {
        $this
            ->setGetUserGroupsByUserIDResult($getUserGroupsByUserIDResult);
    }
    /**
     * Get GetUserGroupsByUserIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LUserGroupsData|null
     */
    public function getGetUserGroupsByUserIDResult(): ?\StructType\LUserGroupsData
    {
        return isset($this->GetUserGroupsByUserIDResult) ? $this->GetUserGroupsByUserIDResult : null;
    }
    /**
     * Set GetUserGroupsByUserIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LUserGroupsData $getUserGroupsByUserIDResult
     * @return \StructType\GetUserGroupsByUserIDResponse
     */
    public function setGetUserGroupsByUserIDResult(?\StructType\LUserGroupsData $getUserGroupsByUserIDResult = null): self
    {
        if (is_null($getUserGroupsByUserIDResult) || (is_array($getUserGroupsByUserIDResult) && empty($getUserGroupsByUserIDResult))) {
            unset($this->GetUserGroupsByUserIDResult);
        } else {
            $this->GetUserGroupsByUserIDResult = $getUserGroupsByUserIDResult;
        }
        
        return $this;
    }
}
