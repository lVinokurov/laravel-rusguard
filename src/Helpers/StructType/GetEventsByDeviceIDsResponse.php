<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventsByDeviceIDsResponse StructType
 * @subpackage Structs
 */
class GetEventsByDeviceIDsResponse extends AbstractStructBase
{
    /**
     * The GetEventsByDeviceIDsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LogData|null
     */
    protected ?\StructType\LogData $GetEventsByDeviceIDsResult = null;
    /**
     * Constructor method for GetEventsByDeviceIDsResponse
     * @uses GetEventsByDeviceIDsResponse::setGetEventsByDeviceIDsResult()
     * @param \StructType\LogData $getEventsByDeviceIDsResult
     */
    public function __construct(?\StructType\LogData $getEventsByDeviceIDsResult = null)
    {
        $this
            ->setGetEventsByDeviceIDsResult($getEventsByDeviceIDsResult);
    }
    /**
     * Get GetEventsByDeviceIDsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LogData|null
     */
    public function getGetEventsByDeviceIDsResult(): ?\StructType\LogData
    {
        return isset($this->GetEventsByDeviceIDsResult) ? $this->GetEventsByDeviceIDsResult : null;
    }
    /**
     * Set GetEventsByDeviceIDsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LogData $getEventsByDeviceIDsResult
     * @return \StructType\GetEventsByDeviceIDsResponse
     */
    public function setGetEventsByDeviceIDsResult(?\StructType\LogData $getEventsByDeviceIDsResult = null): self
    {
        if (is_null($getEventsByDeviceIDsResult) || (is_array($getEventsByDeviceIDsResult) && empty($getEventsByDeviceIDsResult))) {
            unset($this->GetEventsByDeviceIDsResult);
        } else {
            $this->GetEventsByDeviceIDsResult = $getEventsByDeviceIDsResult;
        }
        
        return $this;
    }
}
