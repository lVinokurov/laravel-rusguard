<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnResolvedPhotoBankDetailsResponse StructType
 * @subpackage Structs
 */
class GetUnResolvedPhotoBankDetailsResponse extends AbstractStructBase
{
    /**
     * The GetUnResolvedPhotoBankDetailsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPhotoBankShort|null
     */
    protected ?\ArrayType\ArrayOfPhotoBankShort $GetUnResolvedPhotoBankDetailsResult = null;
    /**
     * Constructor method for GetUnResolvedPhotoBankDetailsResponse
     * @uses GetUnResolvedPhotoBankDetailsResponse::setGetUnResolvedPhotoBankDetailsResult()
     * @param \ArrayType\ArrayOfPhotoBankShort $getUnResolvedPhotoBankDetailsResult
     */
    public function __construct(?\ArrayType\ArrayOfPhotoBankShort $getUnResolvedPhotoBankDetailsResult = null)
    {
        $this
            ->setGetUnResolvedPhotoBankDetailsResult($getUnResolvedPhotoBankDetailsResult);
    }
    /**
     * Get GetUnResolvedPhotoBankDetailsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPhotoBankShort|null
     */
    public function getGetUnResolvedPhotoBankDetailsResult(): ?\ArrayType\ArrayOfPhotoBankShort
    {
        return isset($this->GetUnResolvedPhotoBankDetailsResult) ? $this->GetUnResolvedPhotoBankDetailsResult : null;
    }
    /**
     * Set GetUnResolvedPhotoBankDetailsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPhotoBankShort $getUnResolvedPhotoBankDetailsResult
     * @return \StructType\GetUnResolvedPhotoBankDetailsResponse
     */
    public function setGetUnResolvedPhotoBankDetailsResult(?\ArrayType\ArrayOfPhotoBankShort $getUnResolvedPhotoBankDetailsResult = null): self
    {
        if (is_null($getUnResolvedPhotoBankDetailsResult) || (is_array($getUnResolvedPhotoBankDetailsResult) && empty($getUnResolvedPhotoBankDetailsResult))) {
            unset($this->GetUnResolvedPhotoBankDetailsResult);
        } else {
            $this->GetUnResolvedPhotoBankDetailsResult = $getUnResolvedPhotoBankDetailsResult;
        }
        
        return $this;
    }
}
