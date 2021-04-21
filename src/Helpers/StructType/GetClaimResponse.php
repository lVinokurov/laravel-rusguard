<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClaimResponse StructType
 * @subpackage Structs
 */
class GetClaimResponse extends AbstractStructBase
{
    /**
     * The GetClaimResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaimInfo|null
     */
    protected ?\StructType\ClaimInfo $GetClaimResult = null;
    /**
     * Constructor method for GetClaimResponse
     * @uses GetClaimResponse::setGetClaimResult()
     * @param \StructType\ClaimInfo $getClaimResult
     */
    public function __construct(?\StructType\ClaimInfo $getClaimResult = null)
    {
        $this
            ->setGetClaimResult($getClaimResult);
    }
    /**
     * Get GetClaimResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaimInfo|null
     */
    public function getGetClaimResult(): ?\StructType\ClaimInfo
    {
        return isset($this->GetClaimResult) ? $this->GetClaimResult : null;
    }
    /**
     * Set GetClaimResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ClaimInfo $getClaimResult
     * @return \StructType\GetClaimResponse
     */
    public function setGetClaimResult(?\StructType\ClaimInfo $getClaimResult = null): self
    {
        if (is_null($getClaimResult) || (is_array($getClaimResult) && empty($getClaimResult))) {
            unset($this->GetClaimResult);
        } else {
            $this->GetClaimResult = $getClaimResult;
        }
        
        return $this;
    }
}
