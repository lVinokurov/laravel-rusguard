<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClaimsForUserGroupResponse StructType
 * @subpackage Structs
 */
class GetClaimsForUserGroupResponse extends AbstractStructBase
{
    /**
     * The GetClaimsForUserGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfClaimInfo|null
     */
    protected ?\ArrayType\ArrayOfClaimInfo $GetClaimsForUserGroupResult = null;
    /**
     * Constructor method for GetClaimsForUserGroupResponse
     * @uses GetClaimsForUserGroupResponse::setGetClaimsForUserGroupResult()
     * @param \ArrayType\ArrayOfClaimInfo $getClaimsForUserGroupResult
     */
    public function __construct(?\ArrayType\ArrayOfClaimInfo $getClaimsForUserGroupResult = null)
    {
        $this
            ->setGetClaimsForUserGroupResult($getClaimsForUserGroupResult);
    }
    /**
     * Get GetClaimsForUserGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfClaimInfo|null
     */
    public function getGetClaimsForUserGroupResult(): ?\ArrayType\ArrayOfClaimInfo
    {
        return isset($this->GetClaimsForUserGroupResult) ? $this->GetClaimsForUserGroupResult : null;
    }
    /**
     * Set GetClaimsForUserGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfClaimInfo $getClaimsForUserGroupResult
     * @return \StructType\GetClaimsForUserGroupResponse
     */
    public function setGetClaimsForUserGroupResult(?\ArrayType\ArrayOfClaimInfo $getClaimsForUserGroupResult = null): self
    {
        if (is_null($getClaimsForUserGroupResult) || (is_array($getClaimsForUserGroupResult) && empty($getClaimsForUserGroupResult))) {
            unset($this->GetClaimsForUserGroupResult);
        } else {
            $this->GetClaimsForUserGroupResult = $getClaimsForUserGroupResult;
        }
        
        return $this;
    }
}
