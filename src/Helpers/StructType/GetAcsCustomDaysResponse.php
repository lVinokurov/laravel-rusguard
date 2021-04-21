<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsCustomDaysResponse StructType
 * @subpackage Structs
 */
class GetAcsCustomDaysResponse extends AbstractStructBase
{
    /**
     * The GetAcsCustomDaysResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsCustomDay|null
     */
    protected ?\ArrayType\ArrayOfAcsCustomDay $GetAcsCustomDaysResult = null;
    /**
     * Constructor method for GetAcsCustomDaysResponse
     * @uses GetAcsCustomDaysResponse::setGetAcsCustomDaysResult()
     * @param \ArrayType\ArrayOfAcsCustomDay $getAcsCustomDaysResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsCustomDay $getAcsCustomDaysResult = null)
    {
        $this
            ->setGetAcsCustomDaysResult($getAcsCustomDaysResult);
    }
    /**
     * Get GetAcsCustomDaysResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsCustomDay|null
     */
    public function getGetAcsCustomDaysResult(): ?\ArrayType\ArrayOfAcsCustomDay
    {
        return isset($this->GetAcsCustomDaysResult) ? $this->GetAcsCustomDaysResult : null;
    }
    /**
     * Set GetAcsCustomDaysResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsCustomDay $getAcsCustomDaysResult
     * @return \StructType\GetAcsCustomDaysResponse
     */
    public function setGetAcsCustomDaysResult(?\ArrayType\ArrayOfAcsCustomDay $getAcsCustomDaysResult = null): self
    {
        if (is_null($getAcsCustomDaysResult) || (is_array($getAcsCustomDaysResult) && empty($getAcsCustomDaysResult))) {
            unset($this->GetAcsCustomDaysResult);
        } else {
            $this->GetAcsCustomDaysResult = $getAcsCustomDaysResult;
        }
        
        return $this;
    }
}
