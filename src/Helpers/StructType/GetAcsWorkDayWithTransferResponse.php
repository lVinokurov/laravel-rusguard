<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsWorkDayWithTransferResponse StructType
 * @subpackage Structs
 */
class GetAcsWorkDayWithTransferResponse extends AbstractStructBase
{
    /**
     * The GetAcsWorkDayWithTransferResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsWorkDayWithTransfer|null
     */
    protected ?\StructType\AcsWorkDayWithTransfer $GetAcsWorkDayWithTransferResult = null;
    /**
     * Constructor method for GetAcsWorkDayWithTransferResponse
     * @uses GetAcsWorkDayWithTransferResponse::setGetAcsWorkDayWithTransferResult()
     * @param \StructType\AcsWorkDayWithTransfer $getAcsWorkDayWithTransferResult
     */
    public function __construct(?\StructType\AcsWorkDayWithTransfer $getAcsWorkDayWithTransferResult = null)
    {
        $this
            ->setGetAcsWorkDayWithTransferResult($getAcsWorkDayWithTransferResult);
    }
    /**
     * Get GetAcsWorkDayWithTransferResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsWorkDayWithTransfer|null
     */
    public function getGetAcsWorkDayWithTransferResult(): ?\StructType\AcsWorkDayWithTransfer
    {
        return isset($this->GetAcsWorkDayWithTransferResult) ? $this->GetAcsWorkDayWithTransferResult : null;
    }
    /**
     * Set GetAcsWorkDayWithTransferResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsWorkDayWithTransfer $getAcsWorkDayWithTransferResult
     * @return \StructType\GetAcsWorkDayWithTransferResponse
     */
    public function setGetAcsWorkDayWithTransferResult(?\StructType\AcsWorkDayWithTransfer $getAcsWorkDayWithTransferResult = null): self
    {
        if (is_null($getAcsWorkDayWithTransferResult) || (is_array($getAcsWorkDayWithTransferResult) && empty($getAcsWorkDayWithTransferResult))) {
            unset($this->GetAcsWorkDayWithTransferResult);
        } else {
            $this->GetAcsWorkDayWithTransferResult = $getAcsWorkDayWithTransferResult;
        }
        
        return $this;
    }
}
