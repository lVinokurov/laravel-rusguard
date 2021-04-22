<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Process ServiceType
 * @subpackage Services
 */
class Process extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Process
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Process $parameters
     * @return \StructType\ProcessResponse|bool
     */
    public function Process(\StructType\Process $parameters)
    {
        try {
            $this->setResult($resultProcess = $this->getSoapClient()->__soapCall('Process', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultProcess;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ProcessSubnetworkStateChanged
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProcessSubnetworkStateChanged $parameters
     * @return \StructType\ProcessSubnetworkStateChangedResponse|bool
     */
    public function ProcessSubnetworkStateChanged(\StructType\ProcessSubnetworkStateChanged $parameters)
    {
        try {
            $this->setResult($resultProcessSubnetworkStateChanged = $this->getSoapClient()->__soapCall('ProcessSubnetworkStateChanged', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessSubnetworkStateChanged;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ProcessOnChangeDriver
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProcessOnChangeDriver $parameters
     * @return \StructType\ProcessOnChangeDriverResponse|bool
     */
    public function ProcessOnChangeDriver(\StructType\ProcessOnChangeDriver $parameters)
    {
        try {
            $this->setResult($resultProcessOnChangeDriver = $this->getSoapClient()->__soapCall('ProcessOnChangeDriver', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessOnChangeDriver;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ProcessSyncDriver
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProcessSyncDriver $parameters
     * @return \StructType\ProcessSyncDriverResponse|bool
     */
    public function ProcessSyncDriver(\StructType\ProcessSyncDriver $parameters)
    {
        try {
            $this->setResult($resultProcessSyncDriver = $this->getSoapClient()->__soapCall('ProcessSyncDriver', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessSyncDriver;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ProcessSyncDriverLight
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProcessSyncDriverLight $parameters
     * @return \StructType\ProcessSyncDriverLightResponse|bool
     */
    public function ProcessSyncDriverLight(\StructType\ProcessSyncDriverLight $parameters)
    {
        try {
            $this->setResult($resultProcessSyncDriverLight = $this->getSoapClient()->__soapCall('ProcessSyncDriverLight', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessSyncDriverLight;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ProcessOnChangeDriverResponse|\StructType\ProcessResponse|\StructType\ProcessSubnetworkStateChangedResponse|\StructType\ProcessSyncDriverLightResponse|\StructType\ProcessSyncDriverResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
