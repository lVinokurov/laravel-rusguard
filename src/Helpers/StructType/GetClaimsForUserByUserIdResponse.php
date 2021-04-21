<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClaimsForUserByUserIdResponse StructType
 * @subpackage Structs
 */
class GetClaimsForUserByUserIdResponse extends AbstractStructBase
{
    /**
     * The GetClaimsForUserByUserIdResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfClaimInfo|null
     */
    protected ?\ArrayType\ArrayOfClaimInfo $GetClaimsForUserByUserIdResult = null;
    /**
     * Constructor method for GetClaimsForUserByUserIdResponse
     * @uses GetClaimsForUserByUserIdResponse::setGetClaimsForUserByUserIdResult()
     * @param \ArrayType\ArrayOfClaimInfo $getClaimsForUserByUserIdResult
     */
    public function __construct(?\ArrayType\ArrayOfClaimInfo $getClaimsForUserByUserIdResult = null)
    {
        $this
            ->setGetClaimsForUserByUserIdResult($getClaimsForUserByUserIdResult);
    }
    /**
     * Get GetClaimsForUserByUserIdResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfClaimInfo|null
     */
    public function getGetClaimsForUserByUserIdResult(): ?\ArrayType\ArrayOfClaimInfo
    {
        return isset($this->GetClaimsForUserByUserIdResult) ? $this->GetClaimsForUserByUserIdResult : null;
    }
    /**
     * Set GetClaimsForUserByUserIdResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfClaimInfo $getClaimsForUserByUserIdResult
     * @return \StructType\GetClaimsForUserByUserIdResponse
     */
    public function setGetClaimsForUserByUserIdResult(?\ArrayType\ArrayOfClaimInfo $getClaimsForUserByUserIdResult = null): self
    {
        if (is_null($getClaimsForUserByUserIdResult) || (is_array($getClaimsForUserByUserIdResult) && empty($getClaimsForUserByUserIdResult))) {
            unset($this->GetClaimsForUserByUserIdResult);
        } else {
            $this->GetClaimsForUserByUserIdResult = $getClaimsForUserByUserIdResult;
        }
        
        return $this;
    }
}
