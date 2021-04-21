<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastEventByDeviceIDsResponse StructType
 * @subpackage Structs
 */
class GetLastEventByDeviceIDsResponse extends AbstractStructBase
{
    /**
     * The GetLastEventByDeviceIDsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LogData|null
     */
    protected ?\StructType\LogData $GetLastEventByDeviceIDsResult = null;
    /**
     * Constructor method for GetLastEventByDeviceIDsResponse
     * @uses GetLastEventByDeviceIDsResponse::setGetLastEventByDeviceIDsResult()
     * @param \StructType\LogData $getLastEventByDeviceIDsResult
     */
    public function __construct(?\StructType\LogData $getLastEventByDeviceIDsResult = null)
    {
        $this
            ->setGetLastEventByDeviceIDsResult($getLastEventByDeviceIDsResult);
    }
    /**
     * Get GetLastEventByDeviceIDsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LogData|null
     */
    public function getGetLastEventByDeviceIDsResult(): ?\StructType\LogData
    {
        return isset($this->GetLastEventByDeviceIDsResult) ? $this->GetLastEventByDeviceIDsResult : null;
    }
    /**
     * Set GetLastEventByDeviceIDsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LogData $getLastEventByDeviceIDsResult
     * @return \StructType\GetLastEventByDeviceIDsResponse
     */
    public function setGetLastEventByDeviceIDsResult(?\StructType\LogData $getLastEventByDeviceIDsResult = null): self
    {
        if (is_null($getLastEventByDeviceIDsResult) || (is_array($getLastEventByDeviceIDsResult) && empty($getLastEventByDeviceIDsResult))) {
            unset($this->GetLastEventByDeviceIDsResult);
        } else {
            $this->GetLastEventByDeviceIDsResult = $getLastEventByDeviceIDsResult;
        }
        
        return $this;
    }
}
