<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastEventByDeviceTypesResponse StructType
 * @subpackage Structs
 */
class GetLastEventByDeviceTypesResponse extends AbstractStructBase
{
    /**
     * The GetLastEventByDeviceTypesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LogData|null
     */
    protected ?\StructType\LogData $GetLastEventByDeviceTypesResult = null;
    /**
     * Constructor method for GetLastEventByDeviceTypesResponse
     * @uses GetLastEventByDeviceTypesResponse::setGetLastEventByDeviceTypesResult()
     * @param \StructType\LogData $getLastEventByDeviceTypesResult
     */
    public function __construct(?\StructType\LogData $getLastEventByDeviceTypesResult = null)
    {
        $this
            ->setGetLastEventByDeviceTypesResult($getLastEventByDeviceTypesResult);
    }
    /**
     * Get GetLastEventByDeviceTypesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LogData|null
     */
    public function getGetLastEventByDeviceTypesResult(): ?\StructType\LogData
    {
        return isset($this->GetLastEventByDeviceTypesResult) ? $this->GetLastEventByDeviceTypesResult : null;
    }
    /**
     * Set GetLastEventByDeviceTypesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LogData $getLastEventByDeviceTypesResult
     * @return \StructType\GetLastEventByDeviceTypesResponse
     */
    public function setGetLastEventByDeviceTypesResult(?\StructType\LogData $getLastEventByDeviceTypesResult = null): self
    {
        if (is_null($getLastEventByDeviceTypesResult) || (is_array($getLastEventByDeviceTypesResult) && empty($getLastEventByDeviceTypesResult))) {
            unset($this->GetLastEventByDeviceTypesResult);
        } else {
            $this->GetLastEventByDeviceTypesResult = $getLastEventByDeviceTypesResult;
        }
        
        return $this;
    }
}
