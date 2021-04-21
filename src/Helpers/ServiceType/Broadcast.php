<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Broadcast ServiceType
 * @subpackage Services
 */
class Broadcast extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named BroadcastFindBasIpDevices
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BroadcastFindBasIpDevices $parameters
     * @return \StructType\BroadcastFindBasIpDevicesResponse|bool
     */
    public function BroadcastFindBasIpDevices(\StructType\BroadcastFindBasIpDevices $parameters)
    {
        try {
            $this->setResult($resultBroadcastFindBasIpDevices = $this->getSoapClient()->__soapCall('BroadcastFindBasIpDevices', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultBroadcastFindBasIpDevices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named BroadcastFindLanConverters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BroadcastFindLanConverters $parameters
     * @return \StructType\BroadcastFindLanConvertersResponse|bool
     */
    public function BroadcastFindLanConverters(\StructType\BroadcastFindLanConverters $parameters)
    {
        try {
            $this->setResult($resultBroadcastFindLanConverters = $this->getSoapClient()->__soapCall('BroadcastFindLanConverters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultBroadcastFindLanConverters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\BroadcastFindBasIpDevicesResponse|\StructType\BroadcastFindLanConvertersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
