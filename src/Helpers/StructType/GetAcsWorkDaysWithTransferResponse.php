<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsWorkDaysWithTransferResponse StructType
 * @subpackage Structs
 */
class GetAcsWorkDaysWithTransferResponse extends AbstractStructBase
{
    /**
     * The GetAcsWorkDaysWithTransferResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsWorkDayWithTransfer|null
     */
    protected ?\ArrayType\ArrayOfAcsWorkDayWithTransfer $GetAcsWorkDaysWithTransferResult = null;
    /**
     * Constructor method for GetAcsWorkDaysWithTransferResponse
     * @uses GetAcsWorkDaysWithTransferResponse::setGetAcsWorkDaysWithTransferResult()
     * @param \ArrayType\ArrayOfAcsWorkDayWithTransfer $getAcsWorkDaysWithTransferResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsWorkDayWithTransfer $getAcsWorkDaysWithTransferResult = null)
    {
        $this
            ->setGetAcsWorkDaysWithTransferResult($getAcsWorkDaysWithTransferResult);
    }
    /**
     * Get GetAcsWorkDaysWithTransferResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsWorkDayWithTransfer|null
     */
    public function getGetAcsWorkDaysWithTransferResult(): ?\ArrayType\ArrayOfAcsWorkDayWithTransfer
    {
        return isset($this->GetAcsWorkDaysWithTransferResult) ? $this->GetAcsWorkDaysWithTransferResult : null;
    }
    /**
     * Set GetAcsWorkDaysWithTransferResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsWorkDayWithTransfer $getAcsWorkDaysWithTransferResult
     * @return \StructType\GetAcsWorkDaysWithTransferResponse
     */
    public function setGetAcsWorkDaysWithTransferResult(?\ArrayType\ArrayOfAcsWorkDayWithTransfer $getAcsWorkDaysWithTransferResult = null): self
    {
        if (is_null($getAcsWorkDaysWithTransferResult) || (is_array($getAcsWorkDaysWithTransferResult) && empty($getAcsWorkDaysWithTransferResult))) {
            unset($this->GetAcsWorkDaysWithTransferResult);
        } else {
            $this->GetAcsWorkDaysWithTransferResult = $getAcsWorkDaysWithTransferResult;
        }
        
        return $this;
    }
}
