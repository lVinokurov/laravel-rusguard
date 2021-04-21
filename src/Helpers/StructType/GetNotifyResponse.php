<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNotifyResponse StructType
 * @subpackage Structs
 */
class GetNotifyResponse extends AbstractStructBase
{
    /**
     * The GetNotifyResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\NotificationState|null
     */
    protected ?\StructType\NotificationState $GetNotifyResult = null;
    /**
     * Constructor method for GetNotifyResponse
     * @uses GetNotifyResponse::setGetNotifyResult()
     * @param \StructType\NotificationState $getNotifyResult
     */
    public function __construct(?\StructType\NotificationState $getNotifyResult = null)
    {
        $this
            ->setGetNotifyResult($getNotifyResult);
    }
    /**
     * Get GetNotifyResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\NotificationState|null
     */
    public function getGetNotifyResult(): ?\StructType\NotificationState
    {
        return isset($this->GetNotifyResult) ? $this->GetNotifyResult : null;
    }
    /**
     * Set GetNotifyResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\NotificationState $getNotifyResult
     * @return \StructType\GetNotifyResponse
     */
    public function setGetNotifyResult(?\StructType\NotificationState $getNotifyResult = null): self
    {
        if (is_null($getNotifyResult) || (is_array($getNotifyResult) && empty($getNotifyResult))) {
            unset($this->GetNotifyResult);
        } else {
            $this->GetNotifyResult = $getNotifyResult;
        }
        
        return $this;
    }
}
