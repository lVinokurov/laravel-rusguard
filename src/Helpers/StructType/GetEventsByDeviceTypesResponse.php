<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventsByDeviceTypesResponse StructType
 * @subpackage Structs
 */
class GetEventsByDeviceTypesResponse extends AbstractStructBase
{
    /**
     * The GetEventsByDeviceTypesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LogData|null
     */
    protected ?\StructType\LogData $GetEventsByDeviceTypesResult = null;
    /**
     * Constructor method for GetEventsByDeviceTypesResponse
     * @uses GetEventsByDeviceTypesResponse::setGetEventsByDeviceTypesResult()
     * @param \StructType\LogData $getEventsByDeviceTypesResult
     */
    public function __construct(?\StructType\LogData $getEventsByDeviceTypesResult = null)
    {
        $this
            ->setGetEventsByDeviceTypesResult($getEventsByDeviceTypesResult);
    }
    /**
     * Get GetEventsByDeviceTypesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LogData|null
     */
    public function getGetEventsByDeviceTypesResult(): ?\StructType\LogData
    {
        return isset($this->GetEventsByDeviceTypesResult) ? $this->GetEventsByDeviceTypesResult : null;
    }
    /**
     * Set GetEventsByDeviceTypesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LogData $getEventsByDeviceTypesResult
     * @return \StructType\GetEventsByDeviceTypesResponse
     */
    public function setGetEventsByDeviceTypesResult(?\StructType\LogData $getEventsByDeviceTypesResult = null): self
    {
        if (is_null($getEventsByDeviceTypesResult) || (is_array($getEventsByDeviceTypesResult) && empty($getEventsByDeviceTypesResult))) {
            unset($this->GetEventsByDeviceTypesResult);
        } else {
            $this->GetEventsByDeviceTypesResult = $getEventsByDeviceTypesResult;
        }
        
        return $this;
    }
}
