<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BroadcastFindBasIpDevicesResponse StructType
 * @subpackage Structs
 */
class BroadcastFindBasIpDevicesResponse extends AbstractStructBase
{
    /**
     * The BroadcastFindBasIpDevicesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FindBasIpIntercomResult|null
     */
    protected ?\StructType\FindBasIpIntercomResult $BroadcastFindBasIpDevicesResult = null;
    /**
     * Constructor method for BroadcastFindBasIpDevicesResponse
     * @uses BroadcastFindBasIpDevicesResponse::setBroadcastFindBasIpDevicesResult()
     * @param \StructType\FindBasIpIntercomResult $broadcastFindBasIpDevicesResult
     */
    public function __construct(?\StructType\FindBasIpIntercomResult $broadcastFindBasIpDevicesResult = null)
    {
        $this
            ->setBroadcastFindBasIpDevicesResult($broadcastFindBasIpDevicesResult);
    }
    /**
     * Get BroadcastFindBasIpDevicesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FindBasIpIntercomResult|null
     */
    public function getBroadcastFindBasIpDevicesResult(): ?\StructType\FindBasIpIntercomResult
    {
        return isset($this->BroadcastFindBasIpDevicesResult) ? $this->BroadcastFindBasIpDevicesResult : null;
    }
    /**
     * Set BroadcastFindBasIpDevicesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FindBasIpIntercomResult $broadcastFindBasIpDevicesResult
     * @return \StructType\BroadcastFindBasIpDevicesResponse
     */
    public function setBroadcastFindBasIpDevicesResult(?\StructType\FindBasIpIntercomResult $broadcastFindBasIpDevicesResult = null): self
    {
        if (is_null($broadcastFindBasIpDevicesResult) || (is_array($broadcastFindBasIpDevicesResult) && empty($broadcastFindBasIpDevicesResult))) {
            unset($this->BroadcastFindBasIpDevicesResult);
        } else {
            $this->BroadcastFindBasIpDevicesResult = $broadcastFindBasIpDevicesResult;
        }
        
        return $this;
    }
}
