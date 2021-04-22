<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named UpdateDriverFigureOnTheMap
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateDriverFigureOnTheMap $parameters
     * @return \StructType\UpdateDriverFigureOnTheMapResponse|bool
     */
    public function UpdateDriverFigureOnTheMap(\StructType\UpdateDriverFigureOnTheMap $parameters)
    {
        try {
            $this->setResult($resultUpdateDriverFigureOnTheMap = $this->getSoapClient()->__soapCall('UpdateDriverFigureOnTheMap', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateDriverFigureOnTheMap;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateWorkTimeTable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateWorkTimeTable $parameters
     * @return \StructType\UpdateWorkTimeTableResponse|bool
     */
    public function UpdateWorkTimeTable(\StructType\UpdateWorkTimeTable $parameters)
    {
        try {
            $this->setResult($resultUpdateWorkTimeTable = $this->getSoapClient()->__soapCall('UpdateWorkTimeTable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateWorkTimeTable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateEmployeeTimeTable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateEmployeeTimeTable $parameters
     * @return \StructType\UpdateEmployeeTimeTableResponse|bool
     */
    public function UpdateEmployeeTimeTable(\StructType\UpdateEmployeeTimeTable $parameters)
    {
        try {
            $this->setResult($resultUpdateEmployeeTimeTable = $this->getSoapClient()->__soapCall('UpdateEmployeeTimeTable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateEmployeeTimeTable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateSecurOSConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateSecurOSConfiguration $parameters
     * @return \StructType\UpdateSecurOSConfigurationResponse|bool
     */
    public function UpdateSecurOSConfiguration(\StructType\UpdateSecurOSConfiguration $parameters)
    {
        try {
            $this->setResult($resultUpdateSecurOSConfiguration = $this->getSoapClient()->__soapCall('UpdateSecurOSConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateSecurOSConfiguration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateBasIpDrivers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateBasIpDrivers $parameters
     * @return \StructType\UpdateBasIpDriversResponse|bool
     */
    public function UpdateBasIpDrivers(\StructType\UpdateBasIpDrivers $parameters)
    {
        try {
            $this->setResult($resultUpdateBasIpDrivers = $this->getSoapClient()->__soapCall('UpdateBasIpDrivers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateBasIpDrivers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateDeviceDrivers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateDeviceDrivers $parameters
     * @return \StructType\UpdateDeviceDriversResponse|bool
     */
    public function UpdateDeviceDrivers(\StructType\UpdateDeviceDrivers $parameters)
    {
        try {
            $this->setResult($resultUpdateDeviceDrivers = $this->getSoapClient()->__soapCall('UpdateDeviceDrivers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateDeviceDrivers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateAcsKeyEndTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateAcsKeyEndTime $parameters
     * @return \StructType\UpdateAcsKeyEndTimeResponse|bool
     */
    public function UpdateAcsKeyEndTime(\StructType\UpdateAcsKeyEndTime $parameters)
    {
        try {
            $this->setResult($resultUpdateAcsKeyEndTime = $this->getSoapClient()->__soapCall('UpdateAcsKeyEndTime', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAcsKeyEndTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\UpdateAcsKeyEndTimeResponse|\StructType\UpdateBasIpDriversResponse|\StructType\UpdateDeviceDriversResponse|\StructType\UpdateDriverFigureOnTheMapResponse|\StructType\UpdateEmployeeTimeTableResponse|\StructType\UpdateSecurOSConfigurationResponse|\StructType\UpdateWorkTimeTableResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
