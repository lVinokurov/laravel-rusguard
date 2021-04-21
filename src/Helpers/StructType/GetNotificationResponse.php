<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNotificationResponse StructType
 * @subpackage Structs
 */
class GetNotificationResponse extends AbstractStructBase
{
    /**
     * The GetNotificationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\NotificationInfo|null
     */
    protected ?\StructType\NotificationInfo $GetNotificationResult = null;
    /**
     * Constructor method for GetNotificationResponse
     * @uses GetNotificationResponse::setGetNotificationResult()
     * @param \StructType\NotificationInfo $getNotificationResult
     */
    public function __construct(?\StructType\NotificationInfo $getNotificationResult = null)
    {
        $this
            ->setGetNotificationResult($getNotificationResult);
    }
    /**
     * Get GetNotificationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\NotificationInfo|null
     */
    public function getGetNotificationResult(): ?\StructType\NotificationInfo
    {
        return isset($this->GetNotificationResult) ? $this->GetNotificationResult : null;
    }
    /**
     * Set GetNotificationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\NotificationInfo $getNotificationResult
     * @return \StructType\GetNotificationResponse
     */
    public function setGetNotificationResult(?\StructType\NotificationInfo $getNotificationResult = null): self
    {
        if (is_null($getNotificationResult) || (is_array($getNotificationResult) && empty($getNotificationResult))) {
            unset($this->GetNotificationResult);
        } else {
            $this->GetNotificationResult = $getNotificationResult;
        }
        
        return $this;
    }
}
