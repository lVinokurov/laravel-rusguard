<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsAccessPointsResponse StructType
 * @subpackage Structs
 */
class GetAcsAccessPointsResponse extends AbstractStructBase
{
    /**
     * The GetAcsAccessPointsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsAccessPointSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsAccessPointSlimInfo $GetAcsAccessPointsResult = null;
    /**
     * Constructor method for GetAcsAccessPointsResponse
     * @uses GetAcsAccessPointsResponse::setGetAcsAccessPointsResult()
     * @param \ArrayType\ArrayOfAcsAccessPointSlimInfo $getAcsAccessPointsResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsAccessPointSlimInfo $getAcsAccessPointsResult = null)
    {
        $this
            ->setGetAcsAccessPointsResult($getAcsAccessPointsResult);
    }
    /**
     * Get GetAcsAccessPointsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsAccessPointSlimInfo|null
     */
    public function getGetAcsAccessPointsResult(): ?\ArrayType\ArrayOfAcsAccessPointSlimInfo
    {
        return isset($this->GetAcsAccessPointsResult) ? $this->GetAcsAccessPointsResult : null;
    }
    /**
     * Set GetAcsAccessPointsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsAccessPointSlimInfo $getAcsAccessPointsResult
     * @return \StructType\GetAcsAccessPointsResponse
     */
    public function setGetAcsAccessPointsResult(?\ArrayType\ArrayOfAcsAccessPointSlimInfo $getAcsAccessPointsResult = null): self
    {
        if (is_null($getAcsAccessPointsResult) || (is_array($getAcsAccessPointsResult) && empty($getAcsAccessPointsResult))) {
            unset($this->GetAcsAccessPointsResult);
        } else {
            $this->GetAcsAccessPointsResult = $getAcsAccessPointsResult;
        }
        
        return $this;
    }
}
