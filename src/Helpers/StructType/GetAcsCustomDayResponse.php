<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsCustomDayResponse StructType
 * @subpackage Structs
 */
class GetAcsCustomDayResponse extends AbstractStructBase
{
    /**
     * The GetAcsCustomDayResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsCustomDay|null
     */
    protected ?\StructType\AcsCustomDay $GetAcsCustomDayResult = null;
    /**
     * Constructor method for GetAcsCustomDayResponse
     * @uses GetAcsCustomDayResponse::setGetAcsCustomDayResult()
     * @param \StructType\AcsCustomDay $getAcsCustomDayResult
     */
    public function __construct(?\StructType\AcsCustomDay $getAcsCustomDayResult = null)
    {
        $this
            ->setGetAcsCustomDayResult($getAcsCustomDayResult);
    }
    /**
     * Get GetAcsCustomDayResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsCustomDay|null
     */
    public function getGetAcsCustomDayResult(): ?\StructType\AcsCustomDay
    {
        return isset($this->GetAcsCustomDayResult) ? $this->GetAcsCustomDayResult : null;
    }
    /**
     * Set GetAcsCustomDayResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsCustomDay $getAcsCustomDayResult
     * @return \StructType\GetAcsCustomDayResponse
     */
    public function setGetAcsCustomDayResult(?\StructType\AcsCustomDay $getAcsCustomDayResult = null): self
    {
        if (is_null($getAcsCustomDayResult) || (is_array($getAcsCustomDayResult) && empty($getAcsCustomDayResult))) {
            unset($this->GetAcsCustomDayResult);
        } else {
            $this->GetAcsCustomDayResult = $getAcsCustomDayResult;
        }
        
        return $this;
    }
}
